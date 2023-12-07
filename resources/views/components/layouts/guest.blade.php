<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/system.css' )}}">
    @stack('css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title ?? ''}} - Grupo osorio</title>
    <meta name="description" content="Con más de 30 años de experiencia, Grupo Osorio se distingue como un referente en el sureste en la fabricación de inflables, inflables publicitarios y artículos POP. Nuestra dedicación a la excelencia se refleja en cada producto, respaldado por la innovación, la calidad y el compromiso. Confíe en nosotros para soluciones visuales impactantes que impulsen su marca al siguiente nivel.">
    <meta name="keywords" content="Fabrica de juegos inflables, fabricante de inflables, fabricante de brincolines, fabricante de banderolas, banderolas, renta de inflables, renta de brincolines en mérida, renta de brincolines a domicilio, fabricante de banderines publicitarios, impresión de lonas."/>
    <meta name="author" content="Agencia Vandu" />

</head>

<body>

    <x-layouts.nav />

    <main class="main">
        {{$slot}}
    </main>

    <div class="contacto">
        <x-layouts.contacto />
    </div>
    <footer>
        <x-layouts.footer />
    </footer>
    @stack('js')
    <script src="{{asset('./js/app.js')}}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>