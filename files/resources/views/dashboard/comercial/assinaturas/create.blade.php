@extends('dashboard.layouts.main')

@section('breadcrumb')
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a class="text-muted text-hover-primary">Comercial</a>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-300 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a class="text-muted text-hover-primary">Assinaturas</a>
    </li>
    <!--end::Item-->
@endsection

@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Content-->
                <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
                    <!--begin::Form-->
                    <form class="form" action="{{ route('dashboard.comercial.assinaturas.store') }}" method="post" id="kt_subscriptions_create_new">
                        @csrf
                        <!--begin::Customer-->
                        <div class="card card-flush pt-3 mb-5 mb-lg-10">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Customer</h2>
                                </div>
                                <!--begin::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Description-->
                                <div class="text-gray-500 fw-bold fs-5 mb-5">Select or add a customer to a subscription:</div>
                                <!--end::Description-->
                                <!--begin::Selected customer-->
                                <div class="d-flex align-items-center p-3 mb-2">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-60px symbol-circle me-3">
                                        <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-5.jpg">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Name-->
                                        <a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-2">Sean Bean</a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <a href="#" class="fw-bold text-gray-600 text-hover-primary">sean@dellito.com</a>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Selected customer-->
                                <!--begin::Customer add buttons-->
                                <div class="mb-7 d-none">
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_customer_search">Select Customer</a>
                                    <span class="fw-bolder text-gray-500 mx-2">or</span>
                                    <a href="/metronic8/demo1/../demo1/apps/customers/list.html" class="btn btn-light-primary">Add New Customer</a>
                                </div>
                                <!--end::Customer add buttons-->
                                <!--begin::Customer change button-->
                                <div class="mb-10">
                                    <a href="#" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_customer_search">Change Customer</a>
                                </div>
                                <!--end::Customer change button-->
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed rounded-3 p-6">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <!--begin::Content-->
                                        <div class="fw-bold">
                                            <h4 class="text-gray-900 fw-bolder">This is a very important privacy notice!</h4>
                                            <div class="fs-6 text-gray-700">Writing headlines for blog posts is much science and probably cool audience.
                                                <a href="#" class="fw-bolder">Learn more</a>.</div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Customer-->
                        <!--begin::Pricing-->
                        <div class="card card-flush pt-3 mb-5 mb-lg-10">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Planos</h2>
                                </div>
                                <!--begin::Card title-->
                                @can('criar_plano')
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_product">Novo Plano</button>
                                    </div>
                                    <!--end::Card toolbar-->
                                @endcan
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Selecione um plano">
                                    <option></option>
                                    @foreach($plans as $plan)
                                        <option value="{{ $plan->id }}">{{ $plan->name }} - R$ {{ $plan->amount }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Pricing-->
                        <!--begin::Payment method-->
                        <div class="card card-flush pt-3 mb-5 mb-lg-10" data-kt-subscriptions-form="pricing">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Payment Method</h2>
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">New Method</a>
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Options-->
                                <div id="kt_create_new_payment_method">
                                    <!--begin::Option-->
                                    <div class="py-1">
                                        <!--begin::Header-->
                                        <div class="py-3 d-flex flex-stack flex-wrap">
                                            <!--begin::Toggle-->
                                            <div class="d-flex align-items-center collapsible toggle" data-bs-toggle="collapse" data-bs-target="#kt_create_new_payment_method_1">
                                                <!--begin::Arrow-->
                                                <div class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
																				<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
																			</svg>
																		</span>
                                                    <!--end::Svg Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                    <span class="svg-icon toggle-off svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
																				<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
																				<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
																			</svg>
																		</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Arrow-->
                                                <!--begin::Logo-->
                                                <img src="/metronic8/demo1/assets/media/svg/card-logos/mastercard.svg" class="w-40px me-3" alt="">
                                                <!--end::Logo-->
                                                <!--begin::Summary-->
                                                <div class="me-3">
                                                    <div class="d-flex align-items-center fw-bolder">Mastercard
                                                        <div class="badge badge-light-primary ms-5">Primary</div></div>
                                                    <div class="text-muted">Expires Dec 2024</div>
                                                </div>
                                                <!--end::Summary-->
                                            </div>
                                            <!--end::Toggle-->
                                            <!--begin::Input-->
                                            <div class="d-flex my-3 ms-9">
                                                <!--begin::Radio-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" name="payment_method" checked="checked">
                                                </label>
                                                <!--end::Radio-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div id="kt_create_new_payment_method_1" class="collapse show fs-6 ps-10">
                                            <!--begin::Details-->
                                            <div class="d-flex flex-wrap py-5">
                                                <!--begin::Col-->
                                                <div class="flex-equal me-5">
                                                    <table class="table table-flush fw-bold gy-1">
                                                        <tbody><tr>
                                                            <td class="text-muted min-w-125px w-125px">Name</td>
                                                            <td class="text-gray-800">Emma Smith</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Number</td>
                                                            <td class="text-gray-800">**** 1536</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Expires</td>
                                                            <td class="text-gray-800">12/2024</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Type</td>
                                                            <td class="text-gray-800">Mastercard credit card</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Issuer</td>
                                                            <td class="text-gray-800">VICBANK</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">ID</td>
                                                            <td class="text-gray-800">id_4325df90sdf8</td>
                                                        </tr>
                                                        </tbody></table>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="flex-equal">
                                                    <table class="table table-flush fw-bold gy-1">
                                                        <tbody><tr>
                                                            <td class="text-muted min-w-125px w-125px">Billing address</td>
                                                            <td class="text-gray-800">AU</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Phone</td>
                                                            <td class="text-gray-800">No phone provided</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Email</td>
                                                            <td class="text-gray-800">
                                                                <a href="#" class="text-gray-900 text-hover-primary">e.smith@kpmg.com.au</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Origin</td>
                                                            <td class="text-gray-800">Australia
                                                                <div class="symbol symbol-20px symbol-circle ms-2">
                                                                    <img src="/metronic8/demo1/assets/media/flags/australia.svg">
                                                                </div></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">CVC check</td>
                                                            <td class="text-gray-800">Passed
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-success">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
																						<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"></path>
																					</svg>
																				</span>
                                                                <!--end::Svg Icon--></td>
                                                        </tr>
                                                        </tbody></table>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Option-->
                                    <div class="separator separator-dashed"></div>
                                    <!--begin::Option-->
                                    <div class="py-1">
                                        <!--begin::Header-->
                                        <div class="py-3 d-flex flex-stack flex-wrap">
                                            <!--begin::Toggle-->
                                            <div class="d-flex align-items-center collapsible toggle collapsed" data-bs-toggle="collapse" data-bs-target="#kt_create_new_payment_method_2">
                                                <!--begin::Arrow-->
                                                <div class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
																				<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
																			</svg>
																		</span>
                                                    <!--end::Svg Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                    <span class="svg-icon toggle-off svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
																				<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
																				<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
																			</svg>
																		</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Arrow-->
                                                <!--begin::Logo-->
                                                <img src="/metronic8/demo1/assets/media/svg/card-logos/visa.svg" class="w-40px me-3" alt="">
                                                <!--end::Logo-->
                                                <!--begin::Summary-->
                                                <div class="me-3">
                                                    <div class="d-flex align-items-center fw-bolder">Visa</div>
                                                    <div class="text-muted">Expires Feb 2022</div>
                                                </div>
                                                <!--end::Summary-->
                                            </div>
                                            <!--end::Toggle-->
                                            <!--begin::Input-->
                                            <div class="d-flex my-3 ms-9">
                                                <!--begin::Radio-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" name="payment_method">
                                                </label>
                                                <!--end::Radio-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div id="kt_create_new_payment_method_2" class="collapse fs-6 ps-10">
                                            <!--begin::Details-->
                                            <div class="d-flex flex-wrap py-5">
                                                <!--begin::Col-->
                                                <div class="flex-equal me-5">
                                                    <table class="table table-flush fw-bold gy-1">
                                                        <tbody><tr>
                                                            <td class="text-muted min-w-125px w-125px">Name</td>
                                                            <td class="text-gray-800">Melody Macy</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Number</td>
                                                            <td class="text-gray-800">**** 5303</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Expires</td>
                                                            <td class="text-gray-800">02/2022</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Type</td>
                                                            <td class="text-gray-800">Visa credit card</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Issuer</td>
                                                            <td class="text-gray-800">ENBANK</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">ID</td>
                                                            <td class="text-gray-800">id_w2r84jdy723</td>
                                                        </tr>
                                                        </tbody></table>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="flex-equal">
                                                    <table class="table table-flush fw-bold gy-1">
                                                        <tbody><tr>
                                                            <td class="text-muted min-w-125px w-125px">Billing address</td>
                                                            <td class="text-gray-800">UK</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Phone</td>
                                                            <td class="text-gray-800">No phone provided</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Email</td>
                                                            <td class="text-gray-800">
                                                                <a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Origin</td>
                                                            <td class="text-gray-800">United Kingdom
                                                                <div class="symbol symbol-20px symbol-circle ms-2">
                                                                    <img src="/metronic8/demo1/assets/media/flags/united-kingdom.svg">
                                                                </div></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">CVC check</td>
                                                            <td class="text-gray-800">Passed
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-success">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black"></path>
																						<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black"></path>
																					</svg>
																				</span>
                                                                <!--end::Svg Icon--></td>
                                                        </tr>
                                                        </tbody></table>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Option-->
                                    <div class="separator separator-dashed"></div>
                                    <!--begin::Option-->
                                    <div class="py-1">
                                        <!--begin::Header-->
                                        <div class="py-3 d-flex flex-stack flex-wrap">
                                            <!--begin::Toggle-->
                                            <div class="d-flex align-items-center collapsible toggle collapsed" data-bs-toggle="collapse" data-bs-target="#kt_create_new_payment_method_3">
                                                <!--begin::Arrow-->
                                                <div class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
																				<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
																			</svg>
																		</span>
                                                    <!--end::Svg Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                    <span class="svg-icon toggle-off svg-icon-2">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
																				<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
																				<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
																			</svg>
																		</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Arrow-->
                                                <!--begin::Logo-->
                                                <img src="/metronic8/demo1/assets/media/svg/card-logos/american-express.svg" class="w-40px me-3" alt="">
                                                <!--end::Logo-->
                                                <!--begin::Summary-->
                                                <div class="me-3">
                                                    <div class="d-flex align-items-center fw-bolder">American Express
                                                        <div class="badge badge-light-danger ms-5">Expired</div></div>
                                                    <div class="text-muted">Expires Aug 2021</div>
                                                </div>
                                                <!--end::Summary-->
                                            </div>
                                            <!--end::Toggle-->
                                            <!--begin::Input-->
                                            <div class="d-flex my-3 ms-9">
                                                <!--begin::Radio-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" name="payment_method">
                                                </label>
                                                <!--end::Radio-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div id="kt_create_new_payment_method_3" class="collapse fs-6 ps-10">
                                            <!--begin::Details-->
                                            <div class="d-flex flex-wrap py-5">
                                                <!--begin::Col-->
                                                <div class="flex-equal me-5">
                                                    <table class="table table-flush fw-bold gy-1">
                                                        <tbody><tr>
                                                            <td class="text-muted min-w-125px w-125px">Name</td>
                                                            <td class="text-gray-800">Max Smith</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Number</td>
                                                            <td class="text-gray-800">**** 5008</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Expires</td>
                                                            <td class="text-gray-800">08/2021</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Type</td>
                                                            <td class="text-gray-800">American express credit card</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Issuer</td>
                                                            <td class="text-gray-800">USABANK</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">ID</td>
                                                            <td class="text-gray-800">id_89457jcje63</td>
                                                        </tr>
                                                        </tbody></table>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="flex-equal">
                                                    <table class="table table-flush fw-bold gy-1">
                                                        <tbody><tr>
                                                            <td class="text-muted min-w-125px w-125px">Billing address</td>
                                                            <td class="text-gray-800">US</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Phone</td>
                                                            <td class="text-gray-800">No phone provided</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Email</td>
                                                            <td class="text-gray-800">
                                                                <a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">Origin</td>
                                                            <td class="text-gray-800">United States of America
                                                                <div class="symbol symbol-20px symbol-circle ms-2">
                                                                    <img src="/metronic8/demo1/assets/media/flags/united-states.svg">
                                                                </div></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted min-w-125px w-125px">CVC check</td>
                                                            <td class="text-gray-800">Failed
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
																						<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
																					</svg>
																				</span>
                                                                <!--end::Svg Icon--></td>
                                                        </tr>
                                                        </tbody></table>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Payment method-->
                        <!--begin::Card-->
                        <div class="card card-flush pt-3 mb-5 mb-lg-10">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">Advanced Options</h2>
                                </div>
                                <!--begin::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Custom fields-->
                                <div class="d-flex flex-column mb-15 fv-row">
                                    <!--begin::Label-->
                                    <div class="fs-5 fw-bolder form-label mb-3">Custom fields
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Add custom fields to the billing invoice." data-bs-original-title="" title=""></i></div>
                                    <!--end::Label-->
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <div id="kt_create_new_custom_fields_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table id="kt_create_new_custom_fields" class="table align-middle table-row-dashed fw-bold fs-6 gy-5 dataTable no-footer">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0"><th class="pt-0 sorting_disabled" rowspan="1" colspan="1" style="width: 239.469px;">Field Name</th><th class="pt-0 sorting_disabled" rowspan="1" colspan="1" style="width: 240.891px;">Field Value</th><th class="pt-0 text-end sorting_disabled" rowspan="1" colspan="1" style="width: 59.3906px;">Remove</th></tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>

                                                    <tr class="odd">
                                                        <td>
                                                            <input type="text" class="form-control form-control-solid" name="null-0" value="">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-solid" name="null-0" value="">
                                                        </td>
                                                        <td class="text-end">
                                                            <button type="button" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-kt-action="field_remove">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                <span class="svg-icon svg-icon-3">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
																						<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
																						<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
																					</svg>
																				</span>
                                                                <!--end::Svg Icon-->
                                                            </button>
                                                        </td>
                                                    </tr></tbody>
                                                    <!--end::Table body-->
                                                </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"></div></div></div>
                                        <!--end:Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                    <!--begin::Add custom field-->
                                    <button type="button" class="btn btn-light-primary me-auto" id="kt_create_new_custom_fields_add">Add custom field</button>
                                    <!--end::Add custom field-->
                                </div>
                                <!--end::Custom fields-->
                                <!--begin::Invoice footer-->
                                <div class="d-flex flex-column mb-10 fv-row">
                                    <!--begin::Label-->
                                    <div class="fs-5 fw-bolder form-label mb-3">Invoice footer
                                        <i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-content="Add an addition invoice footer note." data-bs-original-title="" title=""></i></div>
                                    <!--end::Label-->
                                    <textarea class="form-control form-control-solid rounded-3" rows="4"></textarea>
                                </div>
                                <!--end::Invoice footer-->
                                <!--begin::Option-->
                                <div class="d-flex flex-column mb-5 fv-row rounded-3 p-7 border border-dashed border-gray-300">
                                    <!--begin::Label-->
                                    <div class="fs-5 fw-bolder form-label mb-3">Usage treshold
                                        <i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-delay-hide="1000" data-bs-content="Thresholds help manage risk by limiting the unpaid usage balance a customer can accrue. Thresholds only measure and bill for metered usage (including discounts but excluding tax). <a href='#'>Learn more</a>." data-bs-original-title="" title=""></i></div>
                                    <!--end::Label-->
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" checked="checked" value="1">
                                        <span class="form-check-label text-gray-600">Bill immediately if usage treshold reaches 80%.</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <div class="d-flex flex-column fv-row rounded-3 p-7 border border-dashed border-gray-300">
                                    <!--begin::Label-->
                                    <div class="fs-5 fw-bolder form-label mb-3">Pro-rate billing
                                        <i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-delay-hide="1000" data-bs-content="Pro-rated billing dynamically calculates the remainder amount leftover per billing cycle that is owed. <a href='#'>Learn more</a>." data-bs-original-title="" title=""></i></div>
                                    <!--end::Label-->
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                        <span class="form-check-label text-gray-600">Allow pro-rated billing when treshold usage is paid before end of billing cycle.</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                <!--end::Option-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
                    <!--begin::Card-->
                    <div class="card card-flush pt-3 mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95" style="">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Summary</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0 fs-6">
                            <!--begin::Section-->
                            <div class="mb-7">
                                <!--begin::Title-->
                                <h5 class="mb-3">Customer details</h5>
                                <!--end::Title-->
                                <!--begin::Details-->
                                <div class="d-flex align-items-center mb-1">
                                    <!--begin::Name-->
                                    <a href="/metronic8/demo1/../demo1/apps/customers/view.html" class="fw-bolder text-gray-800 text-hover-primary me-2">Sean Bean</a>
                                    <!--end::Name-->
                                    <!--begin::Status-->
                                    <span class="badge badge-light-success">Active</span>
                                    <!--end::Status-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Email-->
                                <a href="#" class="fw-bold text-gray-600 text-hover-primary">sean@dellito.com</a>
                                <!--end::Email-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Seperator-->
                            <div class="separator separator-dashed mb-7"></div>
                            <!--end::Seperator-->
                            <!--begin::Section-->
                            <div class="mb-7">
                                <!--begin::Title-->
                                <h5 class="mb-3">Product details</h5>
                                <!--end::Title-->
                                <!--begin::Details-->
                                <div class="mb-0">
                                    <!--begin::Plan-->
                                    <span class="badge badge-light-info me-2">Basic Bundle</span>
                                    <!--end::Plan-->
                                    <!--begin::Price-->
                                    <span class="fw-bold text-gray-600">$149.99 / Year</span>
                                    <!--end::Price-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Seperator-->
                            <div class="separator separator-dashed mb-7"></div>
                            <!--end::Seperator-->
                            <!--begin::Section-->
                            <div class="mb-10">
                                <!--begin::Title-->
                                <h5 class="mb-3">Payment Details</h5>
                                <!--end::Title-->
                                <!--begin::Details-->
                                <div class="mb-0">
                                    <!--begin::Card info-->
                                    <div class="fw-bold text-gray-600 d-flex align-items-center">Mastercard
                                        <img src="/metronic8/demo1/assets/media/svg/card-logos/mastercard.svg" class="w-35px ms-2" alt=""></div>
                                    <!--end::Card info-->
                                    <!--begin::Card expiry-->
                                    <div class="fw-bold text-gray-600">Expires Dec 2024</div>
                                    <!--end::Card expiry-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Actions-->
                            <div class="mb-0">
                                <button type="submit" class="btn btn-primary" id="kt_subscriptions_create_button">
                                    <!--begin::Indicator-->
                                    <span class="indicator-label">Create Subscription</span>
                                    <span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator-->
                                </button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Sidebar-->
            </div>
            <!--end::Layout-->
            <!--begin::Modals-->
            <!--begin::Modal - Users Search-->
            <div class="modal fade" id="kt_modal_customer_search" tabindex="-1" aria-hidden="true" style="display: none;">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
														</svg>
													</span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--begin::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                            <!--begin::Content-->
                            <div class="text-center mb-12">
                                <h1 class="fw-bolder mb-3">Search Customers</h1>
                                <div class="text-gray-400 fw-bold fs-5">Add a customer to a subscription</div>
                            </div>
                            <!--end::Content-->
                            <!--begin::Search-->
                            <div id="kt_modal_customer_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline" data-kt-search="true">
                                <!--begin::Form-->
                                <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                    <input type="hidden">
                                    <!--end::Hidden input-->
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
																<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
															</svg>
														</span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input">
                                    <!--end::Input-->
                                    <!--begin::Spinner-->
                                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
															<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
														</span>
                                    <!--end::Spinner-->
                                    <!--begin::Reset-->
                                    <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
																</svg>
															</span>
                                        <!--end::Svg Icon-->
														</span>
                                    <!--end::Reset-->
                                </form>
                                <!--end::Form-->
                                <!--begin::Wrapper-->
                                <div class="py-5">
                                    <!--begin::Suggestions-->
                                    <div data-kt-search-element="suggestions">
                                        <!--begin::Illustration-->
                                        <div class="text-center px-4 pt-10">
                                            <img src="/metronic8/demo1/assets/media/illustrations/sketchy-1/4.png" alt="" class="mw-100 mh-200px">
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                    <!--end::Suggestions-->
                                    <!--begin::Results-->
                                    <div data-kt-search-element="results" class="d-none">
                                        <!--begin::Users-->
                                        <div class="mh-300px scroll-y me-n5 pe-5">
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-6.jpg">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                                    <span class="badge badge-light">Art Director</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                                    <span class="badge badge-light">Marketing Analytic</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-1.jpg">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                                    <span class="badge badge-light">Software Enginer</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-5.jpg">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                                    <span class="badge badge-light">Web Developer</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-25.jpg">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                                    <span class="badge badge-light">UI/UX Designer</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Mikaela Collins</span>
                                                    <span class="badge badge-light">Head Of Marketing</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-9.jpg">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Francis Mitcham</span>
                                                    <span class="badge badge-light">Software Arcitect</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Olivia Wild</span>
                                                    <span class="badge badge-light">System Admin</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Neil Owen</span>
                                                    <span class="badge badge-light">Account Manager</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-23.jpg">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Dan Wilson</span>
                                                    <span class="badge badge-light">Web Desinger</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->
                                    </div>
                                    <!--end::Results-->
                                    <!--begin::Empty-->
                                    <div data-kt-search-element="empty" class="text-center d-none">
                                        <!--begin::Message-->
                                        <div class="fw-bold py-0 mb-10">
                                            <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                            <div class="text-gray-400 fs-6">Try to search by username, full name or email...</div>
                                        </div>
                                        <!--end::Message-->
                                        <!--begin::Illustration-->
                                        <div class="text-center px-4">
                                            <img src="/metronic8/demo1/assets/media/illustrations/sketchy-1/9.png" alt="user" class="mw-100 mh-200px">
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                    <!--end::Empty-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Users Search-->
            <!--begin::Modal - New Product-->
            <div class="modal fade" id="kt_modal_add_product" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="#" id="kt_modal_add_product_form">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">Add a Product</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
															</svg>
														</span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Label-->
                                <h3 class="mb-7">
                                    <span class="fw-bolder required">Select Subscription</span>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Please select a subscription" aria-label="Please select a subscription"></i>
                                </h3>
                                <!--end::Label-->
                                <!--begin::Scroll-->
                                <div class="scroll-y mh-300px me-n7 pe-7">
                                    <!--begin::Product-->
                                    <div class="fv-row">
                                        <!--begin::Subscription-->
                                        <label class="d-flex align-items-center mb-5">
                                            <!--begin::Radio-->
                                            <span class="form-check form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="radio" name="product" checked="checked" data-kt-product-name="Basic" data-kt-product-price="15.99" data-kt-product-frequency="Month">
																</span>
                                            <!--end::Radio-->
                                            <!--begin::Description-->
                                            <span class="d-flex flex-column me-3">
																	<span class="fw-bolder">Basic</span>
																	<span class="text-gray-400 fw-bold fs-6">Basic subscription</span>
																</span>
                                            <!--end::Description-->
                                            <!--begin::Pricing-->
                                            <span class="fw-bolder ms-auto">$15.99 /
																<span class="text-gray-400 fs-6 fw-bold">Month</span></span>
                                            <!--end::Pricing-->
                                        </label>
                                        <!--end::Subscription-->
                                        <!--begin::Subscription-->
                                        <label class="d-flex align-items-center mb-5">
                                            <!--begin::Radio-->
                                            <span class="form-check form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="radio" name="product" data-kt-product-name="Basic Bundle" data-kt-product-price="149.99" data-kt-product-frequency="Year">
																</span>
                                            <!--end::Radio-->
                                            <!--begin::Description-->
                                            <span class="d-flex flex-column me-3">
																	<span class="fw-bolder">Basic Bundle</span>
																	<span class="text-gray-400 fw-bold fs-6">Basic yearly bundle</span>
																</span>
                                            <!--end::Description-->
                                            <!--begin::Pricing-->
                                            <span class="fw-bolder ms-auto">$149.99 /
																<span class="text-gray-400 fs-6 fw-bold">Year</span></span>
                                            <!--end::Pricing-->
                                        </label>
                                        <!--end::Subscription-->
                                        <!--begin::Subscription-->
                                        <label class="d-flex align-items-center mb-5">
                                            <!--begin::Radio-->
                                            <span class="form-check form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="radio" name="product" data-kt-product-name="Teams" data-kt-product-price="20.99" data-kt-product-frequency="Month">
																</span>
                                            <!--end::Radio-->
                                            <!--begin::Description-->
                                            <span class="d-flex flex-column me-3">
																	<span class="fw-bolder">Teams</span>
																	<span class="text-gray-400 fw-bold fs-6">Teams subscription</span>
																</span>
                                            <!--end::Description-->
                                            <!--begin::Pricing-->
                                            <span class="fw-bolder ms-auto">$20.99 /
																<span class="text-gray-400 fs-6 fw-bold">Month</span></span>
                                            <!--end::Pricing-->
                                        </label>
                                        <!--end::Subscription-->
                                        <!--begin::Subscription-->
                                        <label class="d-flex align-items-center mb-5">
                                            <!--begin::Radio-->
                                            <span class="form-check form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="radio" name="product" data-kt-product-name="Teams Bundle" data-kt-product-price="199.99" data-kt-product-frequency="Year">
																</span>
                                            <!--end::Radio-->
                                            <!--begin::Description-->
                                            <span class="d-flex flex-column me-3">
																	<span class="fw-bolder">Teams Bundle</span>
																	<span class="text-gray-400 fw-bold fs-6">Teams yearly bundle</span>
																</span>
                                            <!--end::Description-->
                                            <!--begin::Pricing-->
                                            <span class="fw-bolder ms-auto">$199.99 /
																<span class="text-gray-400 fs-6 fw-bold">Year</span></span>
                                            <!--end::Pricing-->
                                        </label>
                                        <!--end::Subscription-->
                                        <!--begin::Subscription-->
                                        <label class="d-flex align-items-center mb-5">
                                            <!--begin::Radio-->
                                            <span class="form-check form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="radio" name="product" data-kt-product-name="Corporate" data-kt-product-price="224.99" data-kt-product-frequency="Month">
																</span>
                                            <!--end::Radio-->
                                            <!--begin::Description-->
                                            <span class="d-flex flex-column me-3">
																	<span class="fw-bolder">Corporate</span>
																	<span class="text-gray-400 fw-bold fs-6">Corporate subscription</span>
																</span>
                                            <!--end::Description-->
                                            <!--begin::Pricing-->
                                            <span class="fw-bolder ms-auto">$224.99 /
																<span class="text-gray-400 fs-6 fw-bold">Month</span></span>
                                            <!--end::Pricing-->
                                        </label>
                                        <!--end::Subscription-->
                                        <!--begin::Subscription-->
                                        <label class="d-flex align-items-center mb-5">
                                            <!--begin::Radio-->
                                            <span class="form-check form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="radio" name="product" data-kt-product-name="Corporate Bundle" data-kt-product-price="1249.99" data-kt-product-frequency="Year">
																</span>
                                            <!--end::Radio-->
                                            <!--begin::Description-->
                                            <span class="d-flex flex-column me-3">
																	<span class="fw-bolder">Corporate Bundle</span>
																	<span class="text-gray-400 fw-bold fs-6">Corporate yearly bundle</span>
																</span>
                                            <!--end::Description-->
                                            <!--begin::Pricing-->
                                            <span class="fw-bolder ms-auto">$1249.99 /
																<span class="text-gray-400 fs-6 fw-bold">Year</span></span>
                                            <!--end::Pricing-->
                                        </label>
                                        <!--end::Subscription-->
                                        <!--begin::Subscription-->
                                        <label class="d-flex align-items-center mb-5">
                                            <!--begin::Radio-->
                                            <span class="form-check form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="radio" name="product" data-kt-product-name="Enterprise" data-kt-product-price="224.99" data-kt-product-frequency="Month">
																</span>
                                            <!--end::Radio-->
                                            <!--begin::Description-->
                                            <span class="d-flex flex-column me-3">
																	<span class="fw-bolder">Enterprise</span>
																	<span class="text-gray-400 fw-bold fs-6">Enterprise subscription</span>
																</span>
                                            <!--end::Description-->
                                            <!--begin::Pricing-->
                                            <span class="fw-bolder ms-auto">$224.99 /
																<span class="text-gray-400 fs-6 fw-bold">Month</span></span>
                                            <!--end::Pricing-->
                                        </label>
                                        <!--end::Subscription-->
                                        <!--begin::Subscription-->
                                        <label class="d-flex align-items-center mb-5">
                                            <!--begin::Radio-->
                                            <span class="form-check form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="radio" name="product" data-kt-product-name="Enterprise Bundle" data-kt-product-price="2249.99" data-kt-product-frequency="Year">
																</span>
                                            <!--end::Radio-->
                                            <!--begin::Description-->
                                            <span class="d-flex flex-column me-3">
																	<span class="fw-bolder">Enterprise Bundle</span>
																	<span class="text-gray-400 fw-bold fs-6">Enterprise yearly bundle</span>
																</span>
                                            <!--end::Description-->
                                            <!--begin::Pricing-->
                                            <span class="fw-bolder ms-auto">$2249.99 /
																<span class="text-gray-400 fs-6 fw-bold">Year</span></span>
                                            <!--end::Pricing-->
                                        </label>
                                        <!--end::Subscription-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="reset" id="kt_modal_add_product_cancel" class="btn btn-light me-3">Discard</button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="button" id="kt_modal_add_product_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Modal - New Product-->
            <!--begin::Modal - New Card-->
            <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Add New Card</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
														</svg>
													</span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="required">Name On Card</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a card holder's name" aria-label="Specify a card holder's name"></i>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe">
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
                                    <!--end::Label-->
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative">
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111">
                                        <!--end::Input-->
                                        <!--begin::Card logos-->
                                        <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                            <img src="/metronic8/demo1/assets/media/svg/card-logos/visa.svg" alt="" class="h-25px">
                                            <img src="/metronic8/demo1/assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px">
                                            <img src="/metronic8/demo1/assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px">
                                        </div>
                                        <!--end::Card logos-->
                                    </div>
                                    <!--end::Input wrapper-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-10">
                                    <!--begin::Col-->
                                    <div class="col-md-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold form-label mb-2">Expiration Date</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row fv-row fv-plugins-icon-container">
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <select name="card_expiry_month" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Month" data-select2-id="select2-data-10-exn1" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="select2-data-12-fnd2"></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-kqtr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-card_expiry_month-ws-container" aria-controls="select2-card_expiry_month-ws-container"><span class="select2-selection__rendered" id="select2-card_expiry_month-ws-container" role="textbox" aria-readonly="true" title="Month"><span class="select2-selection__placeholder">Month</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <select name="card_expiry_year" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Year" data-select2-id="select2-data-13-ma9b" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="select2-data-15-uimw"></option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                    <option value="2031">2031</option>
                                                    <option value="2032">2032</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-14-mhw8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-card_expiry_year-29-container" aria-controls="select2-card_expiry_year-29-container"><span class="select2-selection__rendered" id="select2-card_expiry_year-29-container" role="textbox" aria-readonly="true" title="Year"><span class="select2-selection__placeholder">Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">CVV</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter a card CVV code" aria-label="Enter a card CVV code"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv">
                                            <!--end::Input-->
                                            <!--begin::CVV icon-->
                                            <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                <span class="svg-icon svg-icon-2hx">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M22 7H2V11H22V7Z" fill="black"></path>
																			<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black"></path>
																		</svg>
																	</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::CVV icon-->
                                        </div>
                                        <!--end::Input wrapper-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Label-->
                                    <div class="me-5">
                                        <label class="fs-6 fw-bold form-label">Save Card for further billing?</label>
                                        <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" checked="checked">
                                        <span class="form-check-label fw-bold text-muted">Save Card</span>
                                    </label>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
                                    <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                                <div></div></form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - New Card-->
            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
@endsection
