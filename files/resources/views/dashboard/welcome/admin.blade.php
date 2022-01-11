@extends('dashboard.layouts.main')

@section('breadcrumb')
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a class="text-muted text-hover-primary">Dashboard</a>
    </li>
    <!--end::Item-->
@endsection

@section('content')
	{{ auth()->user()->getAllPermissions() }}
@endsection

@section('custom-css')
	<link href="{{ URL::asset('plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ URL::asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('custom-javascript')
	<script src="{{ URL::asset('js/custom/widgets.js') }}"></script>
	<script src="{{ URL::asset('js/custom/apps/chat/chat.js') }}"></script>
	<script src="{{ URL::asset('js/custom/modals/upgrade-plan.js') }}"></script>
	<script src="{{ URL::asset('js/custom/modals/users-search.js') }}"></script>
	<script src="{{ URL::asset('plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
	<script src="{{ URL::asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
@endsection

@section('drawers')

@endsection

@section('modals')

@endsection
