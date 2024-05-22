<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return $this->json($request);
        }
        return view('order.index');
    }

    protected function json() {
        $data = Order::with('company', 'customer')->orderByDesc('created_at')->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('customer.fullname', function ($data) {
                return $data->customer->firstname . ' ' . $data->customer->lastname;
            })
            ->editColumn('action', function ($data) {
                $actionButton = '
                <a href='.route("order.invoice", ['uuid' => $data->uuid]).' data-bs-toggle="tooltip" data-bs-placement="top" title="invoice">
                    <i class="ki-duotone ki-document text-primary"><span class="path1"></span><span class="path2"></span></i>
                </a>

                <a href='.route("order.edit", ['uuid' => $data->uuid]).' data-bs-toggle="tooltip" data-bs-placement="top" title="edit">
                    <i class="ki-duotone ki-pencil fs-5 text-warning"><span class="path1"></span><span class="path2"></span></i>
                </a>

                <a href='.route("order.delete", ['uuid' => $data->uuid]).' class="btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" title="delete">
                    <i class="ki-solid ki-trash fs-5 text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                </a>';
                return $actionButton;
            })
            ->escapeColumns([])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::orderBy('name')->get();

        return view('order.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_uuid' => 'required|string',
            'product_uuid.*' => 'required|string',
            'price.*' => 'required|decimal:0,2',
            'sum.*' => 'required|integer',
            'amount' => 'required|decimal:0,2',
            'paid' => 'nullable|decimal:0,2',
            'transaction_type' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 400,
                'status' => 'error',
                'message' => $validator->errors(),
            ], 400);
        }

        DB::beginTransaction();
        try {
            $params = $validator->validate();
            $orderParams = [
                'company_uuid' => $params['company_uuid'],
                'customer_uuid' => auth()->user()->uuid,
                'order_number' => rand(100000, 999999),
                'invoice' => 'inv-' . date('YmdHis') . '-' . rand(1000, 9999),
                'amount' => $params['amount'],
                'paid' => $params['paid'],
                'transaction_type' => $params['transaction_type'],
                'description' => $params['description'],
                'created_by' => auth()->user()->uuid,
            ];

            $order = Order::create($orderParams);
            
            foreach($request->product_uuid as $key => $item) {

                $product = Product::where('uuid', $item)->first();
                
                $temp = [
                    'order_uuid' => $order->uuid,
                    'product_uuid' => $item,
                    'price' => $product->price,
                    'sum' => $request->sum[$key],
                ];
                
                $detail = OrderDetail::create($temp);
            }
            
            DB::commit();

            return response()->json([
                'code' => 200,
                'status' => 'success',
                'message' => 'saved data successfully',
            ], 200);
            

        } catch (\Throwable $th) {
            DB::rollBack();
            
            return response()->json([
                'code' => 500,
                'status' => 'error',
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($uuid)
    {
        $data = Order::where('uuid', $uuid)->first();
        $detail = OrderDetail::where('order_uuid', $uuid)->get();
        $companies = Company::orderBy('name')->get();
        $products = Product::where('company_uuid', $data->company_uuid)->orderBy('name')->get();

        return view('order.edit', compact('data', 'detail', 'companies', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $uuid)
    {
        $validator = Validator::make($request->all(), [
            'company_uuid' => 'required|string',
            'product_uuid.*' => 'required|string',
            'price.*' => 'required|decimal:0,2',
            'sum.*' => 'required|integer',
            'amount' => 'required|decimal:0,2',
            'paid' => 'nullable|decimal:0,2',
            'transaction_type' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 400,
                'status' => 'error',
                'message' => $validator->errors(),
            ], 400);
        }

        DB::beginTransaction();
        try {
            $params = $validator->validate();
            $orderParams = [
                'company_uuid' => $params['company_uuid'],
                'customer_uuid' => auth()->user()->uuid,
                'order_number' => rand(100000, 999999),
                'invoice' => 'inv-' . date('YmdHis') . '-' . rand(1000, 9999),
                'amount' => 0,
                'paid' => $params['paid'],
                'transaction_type' => $params['transaction_type'],
                'description' => $params['description'],
            ];
            
            $detailParams = [];
            
            $filteredArray = array_filter($request->detail_order_uuid, function($value) {
                return $value !== null;
            });

            OrderDetail::where('order_uuid', $uuid)->whereNotIn('uuid', $filteredArray)->delete();
            
            foreach($request->product_uuid as $key => $item) {

                $product = Product::where('uuid', $item)->first();
                
                $search =  [
                    'uuid' => $request->detail_order_uuid[$key] ?? null,
                ];
                
                $temp = [
                    'order_uuid' => $uuid,
                    'product_uuid' => $item,
                    'price' => $product->price,
                    'sum' => $request->sum[$key],
                ];

                $detail = OrderDetail::updateOrCreate($search, $temp);

            }

            Order::where('uuid', $uuid)->update($orderParams);
            
            DB::commit();

            return response()->json([
                'code' => 200,
                'status' => 'success',
                'message' => 'updated data successfully',
            ], 200);
            

        } catch (\Throwable $th) {
            DB::rollBack();
            
            return response()->json([
                'code' => 500,
                'status' => 'error',
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($uuid)
    {
        DB::beginTransaction();
        try {
            OrderDetail::where('order_uuid', $uuid)->delete();
            Order::where('uuid', $uuid)->delete();
            
            DB::commit();

            return response()->json([
                'code' => 200,
                'status' => 'success',
                'message' => 'deleted data successfully',
            ], 200);
            

        } catch (\Throwable $th) {
            DB::rollBack();
            
            return response()->json([
                'code' => 500,
                'status' => 'error',
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function invoice($uuid)
    {
        $order = Order::where('uuid', $uuid)->first();
        $details = OrderDetail::where('order_uuid', $order->uuid)->get();

        return view('order.invoice', compact('order', 'details'));
    }
}
