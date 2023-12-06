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
                    <p>Expertos en la creación de productos promocionales, destacando por la calidad y originalidad de nuestros productos. Ofrecemos soluciones personalizadas que potencian su marca, capturando la atención de su audiencia y generando impacto duradero en eventos, campañas y promociones.</p>
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
                    <h3>Fabricamos botargas y <br class="d-none d-sm-none d-md-block d-lg-block">backs publicitarios de primera calidad</h3>
                    <p>Nos especializamos en producir botargas y fondos publicitarios de excelencia. Destacamos por nuestra creatividad y durabilidad, brindando soluciones visuales impresionantes que potencian la presencia de su marca en eventos y promociones.</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class=" izquierda col-lg-6 col-md-12 col-sm-12 m-auto pt-3 ">
                    <h3>Somos fabricantes de Banderolas,<br class="d-none d-sm-none d-md-block d-lg-block">Banderines & Pendones publicitarios</h3>
                    <p>Somos líderes en la fabricación de vibrantes artículos pop que impulsan marcas. Desde coloridos carteles hasta llamativos banners, creamos productos únicos como Banderolas, banderines, gorras personalizadas, etc. Nuestra creatividad y calidad destacan, asegurando una presencia impactante y duradera en eventos y campañas publicitarias.</p>
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
            <div class="row pos">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4><span>Incluído</span><br>Bolsa de guardado.</h4>
                    <p>Comprometidos con la durabilidad del nuestros productos, incluímos una bolsa especial para aumentar su vida útil.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4><span>Incluído</span><br>Garantía de 2 años.</h4>
                    <p>Todos nuestros inflables incluyen hasta 2 años de garantía por defectos de fabrica a partir de la entrega del mismo.</p>
                </div>
            </div>
        </div>
    </section>



</x-layouts.guest>