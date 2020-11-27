@extends("../layouts.plantilla")

@section("cabecera")
Leer Registros

@endsection

@section("contenido")
    <table border="1">
    <tr>
    <td>Nombre Artículo</td>
    <td>Sección</td>
    <td>Precio</td>
    <td>Fecha</td>
    <td>País de Origen</td>
    </tr>

        @foreach($productos as $producto)
        <tr>
        <!-- &nbsp separación datos de la DB -->
            <!-- href genera vinculo a una pagina en especifico -->
            <td><a href="{{route('productos.edit',$producto->id)}}">{{$producto->NombreArticulo}}</a></td>
            <td>{{$producto->seccion}}</td>
            <td>{{$producto->Precio}}</td>
            <td>{{$producto->Fecha}}</td>
            <td>{{$producto->PaisOrigen}}</td>
        <!-- <td>{{$producto->NombreArticulo}}&nbsp;{{$producto->seccion}}&nbsp{{$producto->Precio}}&nbsp;{{$producto->Fecha}}&nbsp;{{$producto->Fecha}}&nbsp;{{$producto->PaisOrigen}}</td> -->
        </tr>
        @endforeach
    </table>

@endsection

@section("pie")

@endsection