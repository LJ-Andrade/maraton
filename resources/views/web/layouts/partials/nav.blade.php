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
            <ul class="MiddleNavbar nav navbar-nav middle-navbar">

                <li class=""><a href="{{ url('/') }}">Informes</a></li>
                <li class=""><a href="{{ url('/') }}">Reglamento</a></li>
                <li class="hide-middle"><a href="{{ url('/') }}">Recorrido</a></li>
                <li class="hide-middle"><a href="{{ url('/') }}">Inscripción</a></li>
                <li class="hide-middle"><a href="{{ url('/') }}">Escuela de Natación</a></li>
                <li class="hide-middle"><a href="{{ url('/') }}">Fotos</a></li>

                <li class="MobileMenu2 mobile-menu2 dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                    aria-expanded="false">Más<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Recorrido</a></li>
                        <li><a href="#">Inscripción</a></li>
                        <li><a href="#">Escuela de Natación</a></li>
                        <li><a href="#">Fotos</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="RightSocialIcons nav navbar-nav navbar-right right-navbar">
                <li><a href="{{ url('/') }}"> <img src="{{ asset('webimages/home/red1.png') }}" alt=""></a></li>
                <li><a href=""><img src="{{ asset('webimages/home/red2.png') }}" alt=""></a></li>
                <li><a href="{{ url('/#contact') }}"> <img src="{{ asset('webimages/home/red3.png') }}" alt=""></a></li>   
            </ul>
        </div>
    </div>
</div>
