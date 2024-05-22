@extends('layouts.layout')
@section('title', 'dashboard')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                
                <div class="col-xl-3">
                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <h3>Rp. 20.000.000</h3>
                            <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">Revenue</div>
                            <div class="fw-semibold text-gray-400">Total revenue today's</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>

                <div class="col-xl-3">
                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <h3>300</h3>
                            <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">New Orders</div>
                            <div class="fw-semibold text-gray-400">Total orders on this month</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
                
                <div class="col-xl-3">
                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <h3>42</h3>
                            <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">New Customers</div>
                            <div class="fw-semibold text-gray-400">Total customers today's</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
                
                <div class="col-xl-3">
                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <h3>32</h3>
                            <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">New Chats</div>
                            <div class="fw-semibold text-gray-400">Total chats today's</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
                
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <!--begin::Tables Widget 5-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Latest Orders</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">List of orders</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive table-loading">
                                        {{-- <div class="table-loading-message">
                                            Loading...
                                        </div> --}}
                                    
                                        <table class="table table-row-bordered gy-5">
                                            <thead>
                                                <tr class="fw-bold fs-6 text-gray-800">
                                                    <th>#</th>
                                                    <th>Order Number</th>
                                                    <th>Amount</th>
                                                    <th>Paid</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>202405010001</td>
                                                    <td>Rp. 1.000.000</td>
                                                    <td>Rp. 0</td>
                                                    <td>2024-05-01</td>
                                                    <td><span class="badge badge-warning">New</span></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>202405010002</td>
                                                    <td>Rp. 2.500.000</td>
                                                    <td>Rp. 2.500.000</td>
                                                    <td>2024-04-30</td>
                                                    <td><span class="badge badge-success">Success</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>202405010003</td>
                                                    <td>Rp. 2.000.000</td>
                                                    <td>Rp. 2.000.000</td>
                                                    <td>2024-04-20</td>
                                                    <td><span class="badge badge-success">Success</span></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>202405010004</td>
                                                    <td>Rp. 1.000.000</td>
                                                    <td>Rp. 1.000.000</td>
                                                    <td>2024-04-20</td>
                                                    <td><span class="badge badge-success">Success</span></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>202405010005</td>
                                                    <td>Rp. 2.500.000</td>
                                                    <td>Rp. 2.500.000</td>
                                                    <td>2024-04-19</td>
                                                    <td><span class="badge badge-success">Success</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tables Widget 5-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection

            