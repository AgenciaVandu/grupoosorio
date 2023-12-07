<x-layouts.guest title="Fabrica de inflables publicitarios y brincolines">
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
            <h2>Innovación inflable de la más alta calidad</h2>
            <p>
                Bienvenidos a la innovación inflable de la más alta calidad. Somos líderes en la fabricación de inflables publicitarios, interactivos e infantiles. Cautivamos audiencias con creatividad y durabilidad excepcionales. ¡Descubre el mundo inflable con nosotros!</p>
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
                    <h3>Trabajamos proyectos<br class="d-none d-sm-none d-md-block d-lg-block">de alto impacto</h3>
                    <p>Somos expertos en inflables publicitarios. No importa la complejidad del proyecto, con nosotros siempre es posible. Transformamos ideas en impactantes inflables que destacan y generan atención sin límites.</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="izquierda col-lg-6 col-md-12 col-sm-12 m-auto pt-3">
                    <h3>Especialistas en fabricación<br class="d-none d-sm-none d-md-block d-lg-block"> de inflables a medida</h3>
                    <p>Somos profesionales altamente capacitados y dedicados, estamos especializados en la creación de inflables personalizados para una variedad de propósitos. Nuestro equipo de expertos tienen experiencia en el diseño, ingeniería y la producción de inflables que se adaptan a las necesidades específicas de todos nuestros clientes.</p>
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
                    <h4><span>Incluído</span><br>Motor.</h4>
                    <p>Cada uno de nuestros equipos fabricados incluye un motor con la capacidad necesaria para mantener la calidad de nuestro producto.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4><span>Incluído</span><br>Bolsa de guardado.</h4>
                    <p>Comprometidos con la durabilidad de tu inflable, incluímos una bolsa especial que mantiene lo mantiene seguro.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4><span>Incluído</span><br>Garantía de 2 años.</h4>
                    <p>Todos nuestros inflables incluyen hasta 2 años de garantía por defectos de fabrica a partir de la entrega del mismo.</p>
                </div>
            </div>
        </div>
    </section>



</x-layouts.guest>