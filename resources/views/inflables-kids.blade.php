<x-layouts.guest title="Inflables Osorio">
    @push('css')
    <link rel="stylesheet" href="{{ asset('/css/kids.css' )}}">
    @endpush
    @push('logo')
    <img src="{{asset('./img/grupo-osoriobco.svg')}}" class="logo-gposorio" height="auto" width="120" alt="Logo Grupo Osorio ">
    @endpush
    <header class="header__inflables">
        <div class="container">
            <div class="pt-5 row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="titulo">
                        <picture>
                            <img src="{{asset ('./img/kids.svg')}}" height="auto" width="150" alt="Logo Inflables Osorio kids">
                        </picture>
                        <div class="espacio">
                            <h1>Renta de<br> inflables interactivos <br>para niños & + 18</h1>
                        </div>
                    </div>
                    <div class="titulo-res">
                        <picture>
                            <img src="{{asset ('./img/kids.svg')}}" height="auto" width="150" alt="Logo Inflables Osorio kids">
                        </picture>
                        <div class="espacio">
                            <h1>Renta de<br> inflables interactivos <br>para niños & + 18</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <picture>
                        <img src="{{asset('./img/webp/acuainflable.webp')}}" class="acuatico" alt="Producto inflables osorio">
                    </picture>
                </div>
            </div>
        </div>

    </header>

    <section class="titular pb-5">
        <div class="container text-center">
            <h2>Variedad de modelos de inflables & juegos en renta</h2>
            <p>
                Descubre nuestra amplia gama de inflables y juegos en alquiler, perfectos para animar cualquier evento.
                Potencia tu evento con nuestro variado catálogo de alquiler de inflables y juegos. Desde castillos inflables hasta desafíos emocionantes, ofrecemos diversión garantizada para todas las edades. ¡Haz de tu evento un éxito con nuestra exclusiva selección de opciones de entretenimiento para alquilar!</p>
        </div>
    </section>

    <section class="productos minimo">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 text-center ">
                    <picture>
                        <img src="{{asset('./img/balloon.png')}}" class="img-fluid globo" alt="Globo">
                        <img src="{{asset('./img/webp/fotos/8.webp')}}" class="img-fluid image" alt="Producto inflables osorio">
                    </picture>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto pt-3">
                    <h3>Diversión para <br class="d-none d-sm-none d-md-block d-lg-block"> chicos & grandes</h3>
                    <p>Transforma tu evento en una experiencia inolvidable con nuestros inflables de alquiler por horas. Celebra con risas y alegría, elige entre nuestra variedad de opciones para todas las edades. Asegura un día mágico, lleno de momentos especiales que todos recordarán con una sonrisa. ¡Reserva ahora y crea recuerdos inolvidables!</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="izquierda col-lg-6 col-md-12 col-sm-12 m-auto txt pt-3">
                    <h3>Rentamos inflables de aventura<br class="d-none d-sm-none d-md-block d-lg-block"> & juegos de mesa</h3>
                    <p>Sumérgete en la diversión con nuestro servicio de alquiler de inflables de aventura y juegos de mesa, como futbolitos y mesas de hockey. Añade emoción a tu evento con opciones que satisfacen todos los gustos. ¡Crea momentos inolvidables con la mezcla perfecta de adrenalina y competencia!</p>
                </div>
                <div class="derecha col-lg-6 col-md-12 col-sm-12 text-center pt-3">
                    <picture>
                        <img src="{{asset('./img/webp/fotos/17.webp')}}" class="img-fluid" alt="Producto inflables osorio">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="caracteristicas text-center pb-5">
        <div class="container">
            <div class="row pos">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4><span>Incluído</span><br>Varios modelos disponibles.</h4>
                    <p>Ofrecemos inflables emocionantes, desde castillos hasta obstáculos, adaptados a todas las edades. Garantizamos diversión y emoción para todos en tu evento.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4><span>Incluído</span><br>Seguridad garantizada.</h4>
                    <p>Garantizamos seguridad con inflables de alta calidad y rigurosos estándares de mantenimiento, brindando total tranquilidad a nuestros clientes.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4><span>Incluído</span><br>Flexibilidad y conveniencia.</h4>
                    <p>Alquiler flexible por horas, adaptado a las necesidades del cliente. Reserva fácil y entrega puntual para una experiencia cómoda y flexible en su evento.</p>
                </div>
            </div>
        </div>
    </section>

</x-layouts.guest>