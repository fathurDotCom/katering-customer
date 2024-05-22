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
                            <div class="card-title fs-3 fw-bold">
                                <span class="card-label fw-bold fs-3 mb-1">Form Add New</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">Add New Order</span>
                            </div>
                        </div>
                        <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('order.update', $data->uuid) }}" method="POST" id="form-input" novalidate="novalidate">
                            @csrf
                            <div class="card-body p-9">

                                <div class="row">

                                    <div class="col-xl-6">  
                                        
                                        <div class="row mb-8">
                                            <div class="col-xl-3 text-end">
                                                <div class="fs-6 fw-semibold mt-2 mb-3">Company</div>
                                            </div>
                                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                                <select class="form-select @error('company_uuid') is-invalid @enderror" name="company_uuid" id="company_uuid" data-control="select2" data-placeholder="Select an option">
                                                    <option></option>
                                                    @foreach ($companies as $item)
                                                        <option value="{{ $item->uuid }}" {{ $data->company_uuid == $item->uuid ? 'selected' : null }}>{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('company_uuid')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-8">
                                            <div class="col-xl-3 text-end">
                                                <div class="fs-6 fw-semibold mt-2 mb-3">Description</div>
                                            </div>
                                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" cols="30" rows="3" placeholder="example description">{{ $data->description }}</textarea>
                                                @error('description')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-xl-6">

                                        <div class="row mb-8">
                                            <div class="col-xl-3 text-end">
                                                <div class="fs-6 fw-semibold mt-2 mb-3">transaction Type</div>
                                            </div>
                                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                                <select class="form-select @error('transaction_type') is-invalid @enderror" name="transaction_type" id="transaction_type" data-control="select2" data-placeholder="Select an option">
                                                    <option></option>
                                                    <option value="transfer" {{ $data->transaction_type == 'transfer' ? 'selected' : null }}>Transfer</option>
                                                    <option value="cash" {{ $data->transaction_type == 'cash' ? 'selected' : null }}>Cash</option>
                                                    <option value="loan" {{ $data->transaction_type == 'loan' ? 'selected' : null }}>Loan</option>
                                                </select>
                                                @error('transaction_type')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-8">
                                            <div class="col-xl-3 text-end">
                                                <div class="fs-6 fw-semibold mt-2 mb-3">paid</div>
                                            </div>
                                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                                <input type="number" class="form-control @error('paid') is-invalid @enderror" name="paid" placeholder="example order paid" value="{{ $data->paid }}">
                                                @error('paid')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-8">
                                            <div class="col-xl-3 text-end">
                                                <div class="fs-6 fw-semibold mt-2 mb-3">amount</div>
                                            </div>
                                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                                <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" placeholder="example order amount" value="{{ $data->amount }}">
                                                @error('amount')
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>

                                <div class="row">
                                    
                                    <div class="col-xl-3">
                                        <button type="button" class="btn btn-primary btn-sm" id="btn-add-product">[+] Add Product</button>
                                    </div>
                                    <div class="py-5 px-5">
                                        <table class="table table-row-dashed table-row-gray-300 gy-7">
                                            <thead>
                                                <tr class="fw-bold fs-6 text-gray-800">
                                                    <th>Product Name</th>
                                                    <th>Quantity</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="list-product">
                                                @foreach ($detail as $item)
                                                    <tr>
                                                        <td>
                                                            <input type="hidden" name="detail_order_uuid[]" value="{{ $item->uuid }}">
                                                            <select class="form-select product_select" name="product_uuid[0]" data-product-no="0" data-control="select2" data-placeholder="Select an option">
                                                                <option></option>
                                                                @foreach ($products as $item2)
                                                                    <option value="{{ $item2->uuid }}" {{ $item->product_uuid == $item2->uuid ? 'selected' : null }}>{{ $item2->name . ' - ' . $item2->price }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control sum_input" name="sum[0]" data-product-no="0" placeholder="order sum" value="{{ $item->sum }}">
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" title="delete">
                                                                <i class="ki-solid ki-trash fs-5 text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                
                            </div>
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <a href="{{ route('order.index') }}" class="btn btn-light btn-active-light-primary btn-sm me-2">back</a>
                                <button type="submit" class="btn btn-primary btn-sm">Save Changes</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script>
        let products
        let amount = 0
        let productOrder = []
        let productNo = 1
        
        $(document).ready((e) => {
            
            $('select.product_select').each(function() {
                let no = $(this).data('product-no')
                let price = $(this).find('option:selected').text().split(" - ")[1]
                const sum = $(this).closest('tr').find('input.sum_input').val()
                let value = price * sum
                
                productOrder.push({
                    id: no,
                    value: value
                })
            });            
            
            amountAccumulate()
        })
        
        $(document).on('click', '#btn-add-product', () => {

            if(!products) {
                $.ajax({
                    url: "{{ route('master.product') }}",
                    method: 'GET',
                    data: {
                        company_uuid: $('#company_uuid').val(),
                    },
                    success: (response) => {
                        products = response

                        let content = `<tr>
                            <td>
                                <select class="form-select product_select" name="product_uuid[${productNo}]" data-product-no="${productNo}" data-control="select2" data-placeholder="Select an option">
                                    <option></option>
                                    ${products}
                                </select>
                            </td>
                            <td>
                                <input type="number" class="form-control sum_input" name="sum[${productNo}]" data-product-no="${productNo}" placeholder="order sum" value="1">
                            </td>
                            <td>
                                <a href="#" class="btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" title="delete">
                                    <i class="ki-solid ki-trash fs-5 text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                </a>
                            </td>
                        </tr>`
                        
                        $('#list-product').append(content);
                        $(`select.product_select`).select2()
                        productNo++
                    }
                })
            } else {
                let content = `<tr>
                    <td>
                        <select class="form-select product_select" name="product_uuid[${productNo}]" data-product-no="${productNo}" data-control="select2" data-placeholder="Select an option">
                            <option></option>
                            ${products}
                        </select>
                    </td>
                    <td>
                        <input type="number" class="form-control sum_input" name="sum[${productNo}]" data-product-no="${productNo}" placeholder="order sum" value="1">
                    </td>
                    <td>
                        <a href="#" class="btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" title="delete">
                            <i class="ki-solid ki-trash fs-5 text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </a>
                    </td>
                </tr>`
    
                $('#list-product').append(content);
                $(`select.product_select`).select2()
                productNo++
            }
            
        })

        $(document).on('click', '.btn-delete', (e) => {
            let self = $(e.currentTarget)
            self.closest('tr').remove()
        })

        $(document).on('submit', '#form-input', (e) => {
            appSubmit(e)
        })
        

        $(document).on('change', '#company_uuid', (e) => {
            let self = $(e.currentTarget)
            $.ajax({
                url: "{{ route('master.product') }}",
                method: 'GET',
                data: {
                    company_uuid: self.val(),
                },
                success: (response) => {
                    products = response

                    $('select[name="product_uuid[]"]').html(products)
                }
            })
        })
        
        $(document).on('change', 'select.product_select', (e) => {
            const self = $(e.currentTarget)
            
            const price = self.find('option:selected').text().split(" - ")[1]
            const sum = self.closest('tr').find('input.sum_input').val()

            let no = self.data('product-no')
            let value = price * sum

            let find = productOrder.find(obj => obj.id === no)

            if (find) {
                find.value = value
            } else {
                productOrder.push({
                    id: no,
                    value: value
                })
            }

            amountAccumulate()
        })

        $(document).on('change', 'input.sum_input', (e) => {
            const self = $(e.currentTarget)
            
            const price = self.val()
            const sum = self.closest('tr').find('select.product_select option:selected').text().split(" - ")[1]

            let no = self.data('product-no')
            let value = price * sum

            let find = productOrder.find(obj => obj.id === no)

            if (find) {
                find.value = value
            } else {
                productOrder.push({
                    id: no,
                    value: value
                })
            }

            amountAccumulate()
        })

        function amountAccumulate() {
            amount = productOrder.reduce((total, obj) => total + obj.value, 0)
            $('input[name="amount"]').val(amount)
        }
        
    </script>
@endpush

            