@extends('painel.layouts.main')
	
@section('content')
	<!--begin::Post-->
		<div class="post d-flex flex-column-fluid" id="kt_post">
			<!--begin::Container-->
			<div id="kt_content_container" class="container-xxl">
				<!--begin::Row-->
				@can('tenant_active')
					aaa
				@endcan
				<!--end::Row-->
			</div>
			<!--end::Container-->
		</div>
	<!--end::Post-->
@endsection