@extends('layouts.layout')
@section('title', 'dashboard')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="row g-5 g-xl-8">
                <div class="col-xl-12">

                    @session('success')
                        <div class="alert alert-success d-flex align-items-center p-5">
                            <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4"><span class="path1"></span><span class="path2"></span></i>

                            <div class="d-flex flex-column">
                                <h4 class="mb-1 text-dark">{{ session()->get('error') }}</h4>

                                <span>Data successfully added to the system.</span>
                            </div>
                        </div>
                    @endsession
                    
                    @session('error')
                        <div class="alert alert-danger d-flex align-items-center p-5">
                            <i class="ki-duotone ki-shield-cross fs-2hx text-danger me-4"><span class="path1"></span><span class="path2"></span></i>

                            <div class="d-flex flex-column">
                                <h4 class="mb-1 text-dark">{{ session()->get('error') }}</h4>

                                <span>Data failed added to the system.</span>
                            </div>
                        </div>
                    @endsession

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Invoice #{{ $order->invoice }}</h3>
                            <div class="card-toolbar">
                                <a href="{{ route('order.index') }}" class="btn btn-secondary btn-sm">back</a>
                            </div>
                        </div>
            
                        <!-- Invoice Body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>From:</h5>
                                    <address>
                                        <strong>{{ $order->company->name }}</strong><br>
                                        {{ $order->company->address ?? '-' }}<br>
                                        Email: {{ $order->company->email ?? '-' }}
                                    </address>
                                </div>
                                <div class="col-md-6 text-right">
                                    <h5>To:</h5>
                                    <address>
                                        <strong>{{ $order->customer->firstname . ' ' . $order->customer->lastname }}</strong><br>
                                        {{ $order->customer->address ?? '-' }}<br>
                                        Email: {{ $order->customer->email ?? '-' }}
                                    </address>
                                </div>
                            </div>
            
                            <!-- Order Details -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($details as $item)
                                            <tr>
                                                <td>{{ $item->product->name }}</td>
                                                <td>{{ $item->sum }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->price * $item->sum }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
            
                            <!-- Summary -->
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="lead">Payment Methods:</p>
                                    <strong>{{ $order->transaction_type }}</strong>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p class="lead">Amount Due {{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}</p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>Paid:</th>
                                                    <td>{{ $order->paid }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Total:</th>
                                                    <td>{{ $order->amount }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
@endpush

            