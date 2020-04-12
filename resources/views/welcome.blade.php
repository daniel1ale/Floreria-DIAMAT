@extends('layouts.app')

@section('title', 'Bienvenido a Floreria DIANMAT de ' . config('app.name'))

@section('body-class','landing-page') 

@section('styles')
    <style>
        /*.features {
            margin-top: -100px;
        }*/
        .section-landing{
            margin-top: -130px;
        }
        .team .row .col-md-4 {
            margin-bottom: 5em;
        }
        .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }
        .row > [class*='col-']{
            display: flex;
            flex-direction: column;
        }
    </style>
@endsection

@section('content')



<!-- Load Facebook SDK for JavaScript -->
        <!-- <div id="fb-root"></div>
        <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script> -->

        <!-- Your customer chat code -->
        <!-- <div class="fb-customerchat"
          attribution=install_email
          page_id="459257604810125"
          theme_color="#ff5ca1"
            logged_in_greeting="Hola! gracias por contactrete en que le puedo servir"
            logged_out_greeting="Hola! gracias por contactrete en que le puedo servir">
        </div> -->


  <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />


<!-- 
Comentarios Facebook 1 d 2 -->
    <div id = "fb-root" > </div> 
    <script async defer crossorigin = "anónimo" src = "https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v6.0" > </script>


    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v6.0"></script>


    <div id="fb-root"></div>
  <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>



<!-- HEAD -->
    <div class="header header-filter" style="background-image: url('{{ asset('images/top.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="profile text-center">
                    <div class="avatar">
                        <img src="../public/images/che.png" alt="Imagen de Floreria DIAMAT en linea" class="img img-responsive img-rounded">
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="title">Bienvenido Floreria DIAMAT  de {{ config('app.name') }}.</h1>
                    <h3 class="title">Realiza tus pedidos en linea, facil y rapido.</h3>
                    <br />
                     <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-raised btn-lg">
                        <i class="fa fa-play"></i> Tutorial de compras
                    </a>
                </div>                
            </div>
        </div>        
    </div>




<div class="main main-raised">
    <div class="container">

        <!-- <div class="fb-share-button" 
                data-href="https://www.facebook.com/floreriadiamatmexico" 
                data-layout="button_count">
        </div> -->

        <div class="section text-center">
            <h2 class="title">FLORERIA DIAMAT
                <div class="fb-share-button" 
                    data-href="https://www.facebook.com/floreriadiamatmexico" 
                    data-layout="button_count">
                </div>
            </h2><br>
            
            <h2 class="title">Busca dentro de nuestros departamentos</h2><br>
            <form class="form-inline" method="get" action="{{ url('/search') }} ">
                <input type="text" placeholder="¿Qué producto buscas?" class="form-control" name="query" />
                <button class="btn btn-primary btn-just-icon" type="submit">
                    <i class="material-icons">search</i>
                </button>
            </form>


    <!-- Muestra de departamentos -->
            <div class="team">
                <div class="row">
                    @foreach ($departments as $department)
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="{{ $department->featured_image_url }} " alt="{{ $department->name }}" class="img-raised img-rounded">
                            <h4 class="title"> <a href="{{ url('/departments/'.$department->id)}} ">{{$department->name}} </a><br />
                            </h4>
                            <p class="description">{{ $department->description }} </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>




<!-- dadas pagos seguridad -->
    <div class="section text-center section-landing">
        <div class="features">
            <div class="row">
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-primary">
                            <i class="material-icons">chat</i>
                        </div>
                        <h4 class="info-title">Dudas</h4>
                        <p>Ponte e contacto con nosotros en cualquier momento y atenderemos cualquier duda que tengas, siempre estamos a su servicio.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-success">
                            <i class="material-icons">verified_user</i>
                        </div>
                        <h4 class="info-title">Pagos seguros</h4>
                        <p>Realiza tus pagos con toda seguridad, ya que este sera confirmado a travez de una llamada o si prefieres puedes pagar al recibir la entrega.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="material-icons">fingerprint</i>
                        </div>
                        <h4 class="info-title">Información privada</h4>
                        <p>Toda tu informacion otorgada sera solo visible para ti, tanto tus datos como tus compras, nadie mas tendra acceso a estos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--   Banner -->
    <section id="banner">
        <div class="inner">
            <h1>Floreria DIAMAT</h1>
            <p>Floreria DIAMAT sentra la compra de flor en el emblematico  <br />
            <h3> <a href="https://www.facebook.com/CentralDeAbasto/">MERCADO DE FLORES "VILLA GUERRERO"</a></h3>
            <br/> La Central de Abasto de Villa Guerrero es el principal mercado <br/> mayorista y minorista de productos de consumo en la region conocida como <br/> la Capital de la Flor en México, es especialista en flores finas, follajes, víveres, frutas, legumbres, hortalizas, animales, y carne. </p>
        </div>
        <video autoplay loop muted playsinline src="img/tenango.mp4"></video>
    </section>


<!-- REGISTRO -->
 <!--    <div class="section landing-section">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center title">¿Aun no te registras?</h2>
                <h4 class="text-center description">Registrate en nuestra pagina ingresando tus datos básicos para poder realizar tus pedidos a travez de nuestro carrito de compras. Si todavia no te decides, de todas formas, mandanos un mensaje con las dudas que tengas y con gusto te atenderemos.</h4>
                <form class="contact-form" method="get" action="{{ ('/register') }} ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Nombre</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Correo electrónico</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 text-center">
                            <button class="btn btn-primary btn-raised">
                                Comentar tu duda
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> -->


<!-- Nuestro equipo -->
    <section class="wrapper">
                    <div class="inner">

                        <header class="special">
                            <h2>Nuestro Equipo de Trabajo</h2>
                            <p>Floreria DIAMAT cuenta con un desarrollo completo</p>
                        </header>

                        <div class="testimonials">

                            <section>
                                <div class="content">
                                    <blockquote>
                                        <p>Desarrollador Web.</p>
                                    </blockquote>
                                    <div class="author">
                                        <div class="image">
                                            <img src="img/daniel.jpg" alt="" />
                                        </div>
                                        <p class="credit">- <strong>Ing. Daniel Alejandro Bautista Martinez </strong> <span>Floreria DIAMAT.</span></p>

                                    </div>
                                    <a href="#"><i class="icon fa-twitter"></i>Twitter</a>
                                    <a href="https://www.facebook.com/danyale.bautistamartinez"><i class="icon fa-facebook"></i>Facebook</a>
                                    <a href="#"><i class="icon fa-instagram"></i>Instagram</a>
                                    <!-- <a href="#"><i class="icon fa-github">Github</i></a> -->
                                    <!-- <a href="#"><i class="icon fa-wattsapp"></i>Github</a> -->
                                </div>
                            </section>


                            <section>
                                <div class="content">
                                    <blockquote>
                                        <p>Florista</p>
                                    </blockquote>
                                    <div class="author">
                                        <div class="image">
                                            <img src="img/avatar.jpg" alt="" />
                                        </div>
                                        <p class="credit">- <strong>L. Raquel Bautista Perez</strong> <span>Floreria DIAMAT.</span></p>
                                    </div>
                                    <a href="#"><i class="icon fa-twitter"></i>Twitter</a>
                                    <a href="https://www.facebook.com/raquel.bautista.7399"><i class="icon fa-facebook"></i>Facebook</a>
                                    <a href="#"><i class="icon fa-instagram"></i>Instagram</a>
                                </div>
                            </section>


                            <section>
                                <div class="content">
                                    <blockquote>
                                        <p>Administracion.</p>
                                    </blockquote>
                                    <div class="author">
                                        <div class="image">
                                            <img src="img/marc.jpg" alt="" />
                                        </div>
                                        <p class="credit">- <strong>LAE. Armando Ramirez</strong> <span>Floreria DIAMAT.</span></p>
                                    </div>
                                    <a href="#"><i class="icon fa-twitter"></i>Twitter</a>
                                    <a href="https://www.facebook.com/profile.php?id=1318512021"><i class="icon fa-facebook"></i>Facebook</a>
                                    <a href="#"><i class="icon fa-instagram"></i>Instagram</a>
                                </div>
                            </section>

                        </div>
                    </div>
    </section>

    <!-- <div class = "fb-comments" data-href = "https://developers.facebook.com/docs/plugins/comments#configurator" data-width = "" data-numposts = "5" > </div>  -->

    <div class = "fb-comments" data-href = "https://www.facebook.com/floreriadiamatmexico/" data-width = "" data-numposts = "5" > </div>  

    <div class="fb-page" data-href="https://www.facebook.com/floreriadiamatmexico" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/floreriadiamatmexico" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/floreriadiamatmexico">Diamat Floreria</a></blockquote></div>

    
    

    </div>

</div>

@include('includes.footerok')
@endsection
