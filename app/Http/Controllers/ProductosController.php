<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Requests\Create_Productos_Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "Estas en la página de inicio";
        $productos=Producto::all();
        return view("productos.index",compact("productos"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("productos.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create_Productos_Request $request)
    {   
        // $this->validate($request,['seccion'=>'required','PaisOrigen'=>'required','NombreArticulo'=>'required']);
        // return view("productos.insert");
        // $producto=new Producto;
        // $producto->NombreArticulo=$request->NombreArticulo;
        // $producto->seccion=$request->seccion;
        // $producto->Precio=$request->Precio;
        // $producto->Fecha=$request->Fecha;
        // $producto->PaisOrigen=$request->PaisOrigen;
        // $producto->save();
        //
        // SEGUNDA OPCION
        $entrada=$request->all();
        // file nombre archivo a enviar en el formulario
        if($archivo=$request->file('file')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images',$nombre);
            $entrada['ruta']=$nombre;
        }
        Producto::create($entrada);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto=Producto::findOrFail($id);
        return view("productos.show",compact("producto"));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=Producto::findOrFail($id);
        return view("productos.edit",compact("producto"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto=Producto::findOrFail($id);
        $producto->update($request->all());
        return redirect("/productos");
        // return view("productos.update");

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto=Producto::findOrFail($id);
        $producto->delete();
        return redirect("/productos");
        // return view("productos.delete");
        //
    }
}
