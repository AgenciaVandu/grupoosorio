<x-layouts.guest title="Inflables Osorio">
    @push('css')
    <link rel="stylesheet" href="{{asset('/css/obsa.css')}}">
    <link rel="stylesheet" href="{{asset ('/css/carrusel.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/galeria.css' )}}">
    @endpush
    @push('logo')
    <img src="{{asset('./img/grupo-osoriobco.svg')}}" class="logo-gposorio" height="auto" width="120" alt="Logo Grupo Osorio ">
    @endpush
    <header class="header__obsa">
        <div class="container">
            <div class="obsa-titular">
                <picture>
                    <img src="{{asset('./img/logoobsa.svg')}}" width="150" alt="Logo Obsa soluciones publicitarias">
                </picture>
                <h1><span>Fabricantes</span> de <br> artículos promocionales</h1>
                <div class="espacio">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis reprehenderit tenetur, neque quibusdam maiores quas voluptatum obcaecati nihil amet fugit consectetur dolore id porro nulla laborum, placeat minus iste quo?</p>
                </div>
            </div>

        </div>

    </header>
    <x-layouts.carrusel />
    <section class="productos-obsa minimo">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 text-center pt-3">
                    <div id="carousel1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('/img/webp/fotos/14-1.webp')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/img/webp/fotos/14.webp')}}" class="d-block w-100" alt="...">
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
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto pt-3">
                    <h3>Fabricamos inflables <br class="d-none d-sm-none d-md-block d-lg-block"> de la más alta calidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti labore aliquam, iure adipisci tempora possimus! Quos quae autem quas facere eos id ab, facilis porro iure dolores laudantium minus atque!</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class=" izquierda col-lg-6 col-md-12 col-sm-12 m-auto pt-3 ">
                    <h3>Fabricamos inflables<br class="d-none d-sm-none d-md-block d-lg-block"> de la más alta calidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti labore aliquam, iure adipisci tempora possimus! Quos quae autem quas facere eos id ab, facilis porro iure dolores laudantium minus atque!</p>
                </div>
                <div class=" derecha col-lg-6 col-md-12 col-sm-12 text-center pt-3 ">
                <div id="carousel2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('/img/webp/fotos/9.webp')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/img/webp/fotos/16.webp')}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carousel2" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carousel2" data-slide="next">
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
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h4>Lorem, ipsum dolor.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim id placeat ipsa tempore quas fuga. Consectetur eveniet ratione voluptatem pariatur.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h4>Lorem, ipsum dolor.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim id placeat ipsa tempore quas fuga. Consectetur eveniet ratione voluptatem pariatur.</p>
                </div>

            </div>
        </div>
    </section>



</x-layouts.guest>