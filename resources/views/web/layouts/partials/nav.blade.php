<div class="navbar navbar-default navbar-fixed-top text-center" role="navigation">        
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>  
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('webimages/home/logomenu.png') }}"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav middle-navbar">
                <li><a href="{{ url('/') }}">Informes</a></li>
                <li><a href="{{ url('/') }}">Reglamento</a></li>
                <li><a href="{{ url('/') }}">Recorrido</a></li>
                <li><a href="{{ url('/') }}">Inscripción</a></li>
                <li><a href="{{ url('/') }}">Escuela de Natación</a></li>
                <li><a href="{{ url('/') }}">Fotos</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/') }}"> <img src="{{ asset('webimages/home/red1.png') }}" alt=""></a></li>
                <li><a href=""><img src="{{ asset('webimages/home/red2.png') }}" alt=""></a></li>
                <li><a href="{{ url('/#contact') }}"> <img src="{{ asset('webimages/home/red3.png') }}" alt=""></a></li>   
            </ul>
        </div>
    </div>
</div>