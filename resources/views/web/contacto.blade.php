@extends('web.layouts.main')
@section('title', 'Maraton de La Paternal | Contacto')

@section('styles')
    

@endsection


@section('content')
    	
    @include('web.layouts.partials.contact')
    @include('web.layouts.partials.foot')

@endsection

@section('scripts')


@endsection

@section('custom_js')

	<script type="text/javascript">
		
		$('body').addClass('contact-background');

	</script>

@endsection