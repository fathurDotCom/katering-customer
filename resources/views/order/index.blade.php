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

                            <div class="card-toolbar">
                                <a href="{{ route('order.create') }}" class="btn btn-primary btn-sm">[+] Add New</a>
                            </div>
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
                                    
                                        <table class="table table-row-bordered gy-5 datatable">
                                            <thead>
                                                <tr class="fw-bold fs-6 text-gray-800">
                                                    <th>#</th>
                                                    <th>Company</th>
                                                    <th>Invoice</th>
                                                    <th>Order Number</th>
                                                    <th>Amount</th>
                                                    <th>Paid</th>
                                                    <th>Transaction Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
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

@push('script')
    <script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script>
        const table = $('.datatable').DataTable({
            "pageLength": 10,
            "processing": true,
            "serverside": true,
            "scrollX": true,
            "language": {
                "processing": 'Memuat...'
            },
            "serverSide": true,
            "ajax": {
                url: "",
                data: {},
            },
            "columns": [
                {
                    data: "DT_RowIndex",
                    orderable: false,
                    searchable: false,
                }, {
                    data: "company.name",
                }, {
                    data: "invoice",
                }, {
                    data: "order_number",
                }, {
                    data: "amount",
                }, {
                    data: "paid",
                }, {
                    data: "transaction_type",
                }, {
                    data: "action",
                    orderable: false,
                    searchable: false,
                },
            ],
            bAutoWidth: false,
            columnDefs: [{
                targets: [0, 1, 3],
                className: 'text-center'
            }],
            bDestroy: true,
        });

        $(document).on('click', '.btn-delete', (e) => {

            appDelete(e, {
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: () => {
                    table.ajax.reload()
                }
            })
        })
    </script>
@endpush