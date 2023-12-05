<x-layouts.guest title="Inflables Osorio">
    @push('css')
    <link rel="stylesheet" href="{{ asset('/css/inflables.css' )}}">
    <link rel="stylesheet" href="{{ asset('/css/carrusel.css' )}}">
    @endpush
    @push('logo')
    <img src="{{asset('./img/grupo-osoriobco.svg')}}" class="logo-gposorio" height="auto" width="120" alt="Logo Grupo Osorio ">
    @endpush
    <header class="header__inflables">
        <div class="container">
            <div class="titular">
                <div class="text-center">
                    <picture>
                        <img src="{{asset ('./img/inflables-bco.svg')}}" width="150" alt="Logo Inflables Osorio">
                    </picture>
                    <h1 class="pt-3 text-white">Fabricantes de inflables <br class="d-none d-sm-none d-md-block d-lg-block"> interactivos y publicitarios</h1>
                </div>
            </div>
            </section>
        </div>
        <section class="inflables-img">
            <div class="container-fluid">
               <div class="d-none d-sm-none d-md-none d-lg-block">
               <picture>
                    <img src="{{asset('./img/webp/inflables-osorio.webp')}}" class="img-fluid" alt="Inflables interactivos">
                </picture>
               </div>
               <div class="d-block d-sm-block d-md-block d-lg-none">
               <picture>
                    <img src="{{asset('./img/webp/fotos/inflable.webp')}}" class="img-fluid" alt="Inflables interactivos">
                </picture>
               </div>
            </div>
        </section>
    </header>

    <section class="titular">
        <div class="container text-center">
            <h2>Lorem ipsum dolor sit.</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, rem totam aliquid mollitia debitis itaque amet quae sunt excepturi a necessitatibus corrupti nam minima quas cum voluptatum dolore cupiditate nesciunt?</p>
        </div>
    </section>

    <x-layouts.carrusel />

    <section class="productos minimo">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 text-center pt-3">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('/img/webp/fotos/1.webp')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/img/webp/fotos/3.webp')}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto pt-3">
                    <h3>Fabricamos inflables <br class="d-none d-sm-none d-md-block d-lg-block"> de la más alta calidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti labore aliquam, iure adipisci tempora possimus! Quos quae autem quas facere eos id ab, facilis porro iure dolores laudantium minus atque!</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="izquierda col-lg-6 col-md-12 col-sm-12 m-auto pt-3">
                    <h3>Fabricamos inflables<br class="d-none d-sm-none d-md-block d-lg-block"> de la más alta calidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti labore aliquam, iure adipisci tempora possimus! Quos quae autem quas facere eos id ab, facilis porro iure dolores laudantium minus atque!</p>
                </div>
                <div class="derecha col-lg-6 col-md-12 col-sm-12 text-center pt-3">
                    <div id="carousel1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('/img/webp/fotos/10.webp')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/img/webp/fotos/11.webp')}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carousel1" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carousel1" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="caracteristicas text-center pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4>Lorem, ipsum dolor.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim id placeat ipsa tempore quas fuga. Consectetur eveniet ratione voluptatem pariatur.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4>Lorem, ipsum dolor.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim id placeat ipsa tempore quas fuga. Consectetur eveniet ratione voluptatem pariatur.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4>Lorem, ipsum dolor.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim id placeat ipsa tempore quas fuga. Consectetur eveniet ratione voluptatem pariatur.</p>
                </div>
            </div>
        </div>
    </section>



</x-layouts.guest>