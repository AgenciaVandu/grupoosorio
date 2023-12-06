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
                            <h1>Fabricantes de<br> inflables interactivos <br>y publicitarios</h1>
                        </div>
                    </div>
                    <div class="titulo-res">
                        <picture>
                            <img src="{{asset ('./img/kids.svg')}}" height="auto" width="150" alt="Logo Inflables Osorio kids">
                        </picture>
                        <div class="espacio">
                            <h1>Fabricantes de<br> inflables interactivos <br>y publicitarios</h1>
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

    <section class="titular">
        <div class="container text-center">
            <h2>Lorem ipsum dolor sit.</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, rem totam aliquid mollitia debitis itaque amet quae sunt excepturi a necessitatibus corrupti nam minima quas cum voluptatum dolore cupiditate nesciunt?</p>
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
                    <h3>Fabricamos inflables <br class="d-none d-sm-none d-md-block d-lg-block"> de la más alta calidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti labore aliquam, iure adipisci tempora possimus! Quos quae autem quas facere eos id ab, facilis porro iure dolores laudantium minus atque!</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="izquierda col-lg-6 col-md-12 col-sm-12 m-auto txt pt-3">
                    <h3>Fabricamos inflables<br class="d-none d-sm-none d-md-block d-lg-block"> de la más alta calidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti labore aliquam, iure adipisci tempora possimus! Quos quae autem quas facere eos id ab, facilis porro iure dolores laudantium minus atque!</p>
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
                    <h4><span>Incluído</span><br>Bolsa de guardado.</h4>
                    <p>Comprometidos con la durabilidad del nuestros productos, incluímos una bolsa especial para aumentar su vida útil.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4><span>Incluído</span><br>Garantía de 2 años.</h4>
                    <p>Todos nuestros inflables incluyen hasta 2 años de garantía por defectos de fabrica a partir de la entrega del mismo.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4><span>Incluído</span><br>Garantía de 2 años.</h4>
                    <p>Todos nuestros inflables incluyen hasta 2 años de garantía por defectos de fabrica a partir de la entrega del mismo.</p>
                </div>
            </div>
        </div>
    </section>

</x-layouts.guest>