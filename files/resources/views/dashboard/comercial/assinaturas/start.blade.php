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
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body p-0">
                    <!--begin::Wrapper-->
                    <div class="card-px text-center py-20 my-10">
                        <!--begin::Title-->
                        <h2 class="fs-2x fw-bolder mb-10">Olá, {{ auth()->user()->first_name }}!</h2>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <p class="text-gray-400 fs-4 fw-bold mb-10">Ainda não há assinaturas vendidas.
                            <br>Comece a sua primeira venda agora</p>
                        <!--end::Description-->
                        <!--begin::Action-->
                        <a href="{{ route('dashboard.comercial.assinaturas.create') }}" class="btn btn-primary">Nova Assinatura</a>
                        <!--end::Action-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Illustration-->
                    <div class="text-center px-4">
                        <img class="mw-100 mh-300px" alt="" src="{{ URL::asset('media/illustrations/sketchy-1/5.png') }}">
                    </div>
                    <!--end::Illustration-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
@endsection
