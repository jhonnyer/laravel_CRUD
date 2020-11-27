<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Página1</title>
<!-- <link href="../public/assets/css/bootstrap.min.css" rel="stylesheet"> -->
<style>
    .ImagenCabecera{
        float:right;
        padding-right:150px;
        width:150px;
    }

    .cabecera{
        text-align:center;
        font-size:x-large;
        font-family:Tahoma, Genova, Sans-serifi;
        margin-bottom:100px;
        color:#090;
    }    
    .contenido form, table{
        width:500px;
        margin: 0 auto;
    }
    .pie{
        position:fixed;
        bottom:0px;
        width:100%;
        font-size:0.7em;
||      margin-bottom=15px
    }
</style>
</head>

<body>

<div class="cabecera">
    @yield("cabecera")
    <img src="/images/laravel.png" class="ImagenCabecera"/>
</div>

<div class="contenido">
    @yield("contenido")
</div>

<div class="pie">
    @yield("pie")
    Curso informatica
</div>

</body>
</html>