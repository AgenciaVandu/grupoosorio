<link rel="stylesheet" href="{{ asset('/css/galeria.css' )}}">

<section class="otros-productos">
        <div class="container">
            <h4 class="text-center text-uppercase">fabricamos mucho más que inflables</h4>
        </div>
        <button id="btn-left" class="btn-left"> < </button>
                <div class="cont-galeria">
                    <div class="galeria">
                        <img name="Imagen" src="{{asset('/img/imagenes/pininflable.webp')}}" class="imagen">
                        <img name="Imagen" src="{{asset('/img/imagenes/pininflable.webp')}}" class="imagen">
                        <img name="Imagen" src="{{asset('/img/imagenes/pininflable.webp')}}" class="imagen">
                        <img src="{{asset('/img/imagenes/pininflable.webp')}}" class="imagen">
                        <img name="Imagen" src="{{asset('/img/imagenes/pininflable.webp')}}" class="imagen">

                        

                    </div>
                </div>
        <button id="btn-right" class="btn-right"> > </button>
    </section>
   @push ('js')
   <script src="{{asset('/js/carrusel.js')}}" type="text/javascript"></script>
   @endpush