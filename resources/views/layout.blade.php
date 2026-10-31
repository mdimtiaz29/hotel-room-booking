<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
<x-commonlinks></x-commonlinks>
  <style>
    body {
      padding-top: 80px;
    }
          .h-font {
            font-family: "Libre Baskerville", serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        .text-font {
            font-family: "Roboto", sans-serif;

        }

        .script {
            font-family: "Nova Script", system-ui;
            font-weight: 400;
            font-style: normal;
            
        }

        .btn-color {
            box-sizing: border-box;
            border: 2px solid rgb(251, 247, 247);
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .btn-color:hover {
            box-sizing: border-box;
            border: 2px solid rgb(63, 55, 108);
            background-color: rgb(63, 55, 108);

            color: #ffffff;
        }

        .input-color {
            background-color: #131515;
            color: #ffffff;
            width: 100%;
            border: none;
            padding: 5px;

        }
        /* .input-color:hover{

                        font-weight: lighter;
        } */
        input[type="date"] {
    color-scheme: dark;
}
.form-format{
    margin-top: -50px;
    z-index:2;
    position: relative;
}

.social:hover{
    box-sizing: border-box;
    border: 1px solid white;
     background-color: rgb(228, 227, 227);
   
}
.links:hover{
    text-decoration: underline !important;
}   
    </style>
  </head>
  <body>
    @section('main')
    @show
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>