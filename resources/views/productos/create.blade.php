@extends("../layouts.plantilla")

@section("cabecera")
Insertar Registros

@endsection

@section("contenido")
    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    <!-- FORMULACIO CON METODO Tradicional metodo 1 -->
    <!-- <form method="post" action="/productos"> -->

    <!-- <table>
    <tr>
    <td>Nombre: </td>
    <td>
        <input type="text" name="NombreArticulo">
        {{csrf_field()}}
        </td></tr>
        <tr>
            <td>Sección: </td>
        <td>
            <input type="text" name="seccion">
        </td></tr>
        <tr>
            <td>Precio: </td>
        <td>
            <input type="text" name="Precio">
        </td></tr>
        <tr>
            <td>Fecha: </td>
        <td>
            <input type="text" name="Fecha">
        </td></tr>
        <tr>
            <td>Pais de Origen: </td>
        <td>
            <input type="text" name="PaisOrigen">
        </td></tr>
        
        <tr>
        <td>
        Boton enviar que ocupe dos columnas y este centradp  -->
        <!-- <td colspan="2" align="center">
        <input type="submit" name="enviar" value="enviar">
        </td>
        <td>
            <input type="reset" name="borrar" value="borrar">
        </td>
        </tr>
    </table>  -->
    <!-- </form> -->
    <!-- {!!Form::close()!!} -->


    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    <!-- FORMULARIO CON LARAVEL COLLECTIVE -->
    <!-- 'files'=>true PErmite enviar imagenes a la DB -->
    {!!Form::open(['url'=>'/productos','method'=>'post','files'=>true])!!}
    <table>
    <tr>
    <td>
    {!!Form::file('file')!!}
    </td>
    </tr>
    </table>

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
    <!-- </form> -->
    {!!Form::close()!!}

    @if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    <ul>
    @endif

@endsection


@section("pie")

@endsection