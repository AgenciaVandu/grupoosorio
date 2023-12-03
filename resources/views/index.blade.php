<x-layouts.guest title='Grupo Osorio - Los mejores productos para puntos de venta y eventos'>
    @push('css')
    <link rel="stylesheet" href="{{ asset('/css/style.css' )}}">
    <link rel="stylesheet" href="{{asset ('/css/carrusel.css')}}">
    @endpush
    @push('logo')
    <img src="{{asset('./img/grupo-osorio.svg')}}" class="logo-gposorio" height="auto" width="120" alt="Logo Grupo Osorio ">
    @endpush
    <header class="header">
        <div class="container">
            <div class="contenido__cabecera">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <h1>Lorem <span>ipsum</span> <br> dolor sit.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quidem laboriosam, repellendus corporis vitae sit consequuntur doloremque consequatur dolorum quo similique cumque suscipit voluptas distinctio et itaque, esse perferendis necessitatibus!</p>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                        <picture>
                            <img src="{{asset('./img/header.png')}}" class="img-fluid" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <x-layouts.carrusel />

    <section class="titular">
        <div class="container text-center">
            <h2>MÁS DE <span>30 AÑOS</span> DE EXPERIENCIA</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, corrupti molestiae suscipit amet consequatur, in id fugiat aspernatur maiores eaque quos pariatur commodi quibusdam soluta doloribus sit natus necessitatibus, ipsam ipsum.</p>
        </div>
    </section>

    <section class="inflables-osorio minimo">
        <div class="container">
            <div class="row">
                <div class=" col-lg-6 col-md-12 col-sm-12">
                    <picture>
                        <img src="{{asset ('./img/Inflatable.png')}}" class="img-fluid" alt="Juego Inflable">
                    </picture>
                </div>
                <div class=" col-lg-6 col-md-12 col-sm-12 m-auto">
                    <span>Inflables Osorio</span>
                    <h3>Fabricamos inflables <br class="d-none d-sm-none d-md-none d-lg-block"> de la más alta calidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores esse minima quo nulla reiciendis placeat corrupti, porro expedita harum nobis debitis pariatur odio id molestias quisquam magni! Soluta, amet porro!</p>
                    <div class="cta">
                        <a class="btn btn-primary">Ver más</a>
                        <img src="{{asset ('./img/inflables-logo.svg')}}" width="60" alt="Logo Inflables Osorio">
                    </div>
                    <div class="rrss">
                        <a href="">
                            <img src="{{asset ('./img/facebook.svg')}}" width="35" alt="Logo Facebook">
                        </a>
                        <a href=""><img src="{{asset ('./img/instagram.svg')}}" width="30" alt="Logo Instagram"></a>
                    </div>
                </div>
            </div>
    </section>
    <section class="inflables-osorio-kids minimo">
        <div class="container">
            <div class="row">
                <div class="izquierda col-lg-6 col-md-12 col-sm-12 m-auto">
                    <span>OBSA soluciones publicitarias</span>
                    <h3>Fabricamos artículos <br class="d-none d-sm-none d-md-none d-lg-block"> POP duraderos y resistentes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores esse minima quo nulla reiciendis placeat corrupti, porro expedita harum nobis debitis pariatur odio id molestias quisquam magni! Soluta, amet porro!</p>
                    <div class="cta">
                        <a class="btn btn-primary">Ver más</a>
                        <img src="{{asset ('./img/logoobsa.svg')}}" width="50" alt="Logo OBSA ">
                    </div>

                    <div class="rrss">
                        <a href="">
                            <img src="{{asset ('./img/facebook.svg')}}" width="35" alt="Logo Facebook">
                        </a>
                        <a href=""><img src="{{asset ('./img/instagram.svg')}}" width="30" alt="Logo Instagram"></a>
                    </div>
                </div>
                <div class="derecha col-lg-6 col-md-12 col-sm-12" style="transform: scaleX(-1);">
                    <picture>
                        <img src="{{asset ('./img/banderolas.png')}}" class="img-fluid" alt="Banderolas ">
                    </picture>

                </div>
            </div>
        </div>
    </section>

    <section class="obsa minimo">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12" style="transform: scaleX(-1);">
                    <picture>
                        <img src="{{asset ('./img/inflable1.png')}}" class="img-fluid" alt="Juego Inflable">
                    </picture>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                    <span>Inflables Osorio Kids</span>
                    <h3>Rentamos inflables <br class="d-none d-sm-none d-md-none d-lg-block"> para fiestas infantiles & +18</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores esse minima quo nulla reiciendis placeat corrupti, porro expedita harum nobis debitis pariatur odio id molestias quisquam magni! Soluta, amet porro!</p>
                    <div class="cta">
                        <a class="btn btn-primary">Ver más</a>
                        <img src="{{asset ('./img/kids.svg')}}" width="60" alt="Logo Inflables Osorio kids">
                    </div>
                    <div class="rrss">
                        <a href="">
                            <img src="{{asset ('./img/facebook.svg')}}" width="35" alt="Logo Facebook">
                        </a>
                        <a href=""><img src="{{asset ('./img/instagram.svg')}}" width="30" alt="Logo Instagram"></a>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

</x-layouts.guest>