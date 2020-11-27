@extends("../layouts.plantilla")

@section("cabecera")
Insertar Registros

@endsection

@section("contenido")

    <form method="post" action="/productos">
    <table>
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
        <!-- Boton enviar que ocupe dos columnas y este centradp  -->
        <!-- <td colspan="2" align="center"> -->
        <input type="submit" name="enviar" value="enviar">
        </td>
        <td>
            <input type="reset" name="borrar" value="borrar">
        </td>
        </tr>
    </table>
    </form>

@endsection

@section("pie")

@endsection