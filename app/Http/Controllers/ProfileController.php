<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function index(Request $request)
    {
        $data = User::where('uuid', auth()->user()->uuid)->first();
        $companies = Company::get();

        return view('profile.index', compact('data', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = User::where('uuid', auth()->user()->uuid)->first();
        
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users,email,'.$data->id,
            'password' => 'nullable|string|max:255',
            'company_uuid' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'is_active' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png',
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
            
            $params['is_active'] = $request->is_active ? 1 : 0;
            if(@$params['photo']) {
                if(file_exists(public_path("uploads/users/photos/$data->photo"))) {
                    unlink(public_path("uploads/users/photos/$data->photo"));
                }
                $params['photo'] = upload($params['photo'], public_path('uploads/users/photos/'));
            }
            if($request->password) {
                $params['password'] = Hash::make($params['password']);
            } else {
                unset($params['password']);
            }
            
            $data->update($params);

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
}
