@extends("../layouts.plantilla")

@section("cabecera")
Editar Registros

@endsection

@section("contenido")

    <!-- FORMULARIO ACTUALIZAR ESTANDAR  -->
    <!-- <form method="post" action="/productos/{{$producto->id}}">
    <table>
    <tr>
    <td>Nombre: </td>
    <td>
        <input type="text" name="NombreArticulo" value="{{$producto->NombreArticulo}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        </td></tr>
        <tr>
            <td>Sección: </td>
        <td>
            <input type="text" name="seccion" value="{{$producto->seccion}}">
        </td></tr>
        <tr>
            <td>Precio: </td>
        <td>
            <input type="text" name="Precio" value="{{$producto->Precio}}">
        </td></tr>
        <tr>
            <td>Fecha: </td>
        <td>
            <input type="text" name="Fecha" value="{{$producto->Fecha}}">
        </td></tr>
        <tr>
            <td>Pais de Origen: </td>
        <td>
            <input type="text" name="PaisOrigen" value="{{$producto->PaisOrigen}}">
        </td></tr>
        
        <tr>
        <td>
        Boton enviar que ocupe dos columnas y este centradp  -->
        <!-- <td colspan="2" align="center">
        <input type="submit" name="enviar" value="Actualizar">
        </td>
        <td>
            <input type="reset" name="borrar" value="borrar">
        </td>
        </tr>
    </table>
    </form> -->
    <!-- FORMULARIO CON LARAVEL COLLECTIVE -->
    {!!Form::model($producto,['method'=>'PUT','action'=>['App\Http\Controllers\ProductosController@update',$producto->id]])!!}
    <table>
    <tr>
    <td>{!!Form::label('nombre','Nombre')!!} </td>
    <td>
        {!!Form::text('NombreArticulo')!!}
        {{csrf_field()}}
        </td></tr>
        <tr>
            <td>{!!Form::label('seccion','Sección')!!} </td>
        <td>
        {!!Form::text('seccion')!!}
        </td></tr>
        <tr>
            <td>{!!Form::label('precio','Precio')!!} </td>
        <td>
        {!!Form::text('Precio')!!}
        </td></tr>
        <tr>
            <td>{!!Form::label('fecha','Fecha')!!} </td>
        <td>
        {!!Form::text('Fecha')!!}
        </td></tr>
        <tr>
            <td>{!!Form::label('PaisOrigen','País de Origen')!!} </td>
        <td>
        {!!Form::text('PaisOrigen')!!}
        </td></tr>
        
        <tr>
        <td>
        {!!Form::submit('Enviar')!!}
        </td>
        <td>
        {!!form::reset('Borrar')!!}
        </td>
        </tr>
    </table>
    {!!Form::close()!!}

    <!-- ELIMINAR REGISTROS LARAVEL COLLECTIVE -->
    <!-- <form method="post" action="/productos/{{$producto->id}}"> -->
    {!!Form::open(['method'=>'DELETE','action'=>['App\Http\Controllers\ProductosController@destroy',$producto->id]])!!}
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        {!!Form::submit('Eliminar Registro')!!}
        <!-- <input type="submit" value="Eliminar Registro"> -->
    <!-- </form> -->
    {!!Form::close()!!}
@endsection

@section("pie")

@endsection