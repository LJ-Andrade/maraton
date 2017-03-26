@extends('web.layouts.main')
@section('title', 'Maraton de La Paternal  | Inicio')

@section('styles')
<style>



</style>
@endsection

@section('content')
    {{-- Facebook Plugin --}}
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8&appId=240698342801213";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script> 
    {{-- /Facebook Plugin --}}

    <div id="actual_section" data-section="home"></div>
    {{-- Home Section Desktop --}}
    <div class="home-intro">      
        <div class="main-logo wow animated zoomIn" data-wow-delay="0s" data-wow-duration="3s">
            <img src="{{ asset('webimages/home/logo.png') }}">
        </div>
    </div>

    {{-- Section --}}
    <div class="container-fluid second-section">
        <div class="top-img">
            <img src="{{ asset('webimages/home/texturasup.png') }}" alt="">
        </div>
        <div class="big-text">
            7KM <br>
            3,5KM
        </div>
        <div class="bottom-img">
            <img src="{{ asset('webimages/home/texturainf.png') }}" alt="">
        </div>
    </div>
    {{-- Section --}}
    <div class="container-fluid third-section">
        <div class="row">
            Tercer Sección
        </div>
    </div>
  

    @include('web.layouts.partials.contact')
    @include('web.layouts.partials.foot')


@endsection

@section('scripts')


@endsection

@section('custom_js')
<script>    


    if ($(window).width() < 1250) {
        $('.RightSocialIcons').removeClass('navbar-right');
    }
    else {
        $('.RightSocialIcons').addClass('navbar-right');
    }



</script>

@endsection