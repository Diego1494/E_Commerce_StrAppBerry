<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorium;
use App\Models\Producto;

class AdminController extends Controller
{
    //
    public function index() {
        
        $producto = Producto::all();
        return view('admin.admin',compact('producto'));
    }

    public function create()
    {
        return view('admin.create');
    }

    function validateData(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
        ]);
    }

    public function store(Request $request)
    {
        $this->validateData($request);

        $imagenproducto = "";
        if ($request->hasFile('imagen')) {
            $foto = $request->file('imagen');
            $imagenproducto = $foto->getClientOriginalName();
        }

        $campos=[
                'nombre'           => $request->nombre,
                'precio'           => $request->precio,
                'categoria'        => $request->categoria,
                'descripcion'      => $request->descripcion,
                'imagen'           => $imagenproducto,
        ];
        if ($request->hasFile('imagen')) $foto->move(public_path('image'), $imagenproducto);
        
        
        $producto = Producto::create($campos);
        
        return redirect('admin');
    }

    public function edit($id)
    {
        $producto = Producto::find($id);
        return view ('admin.edit', compact('producto')); 
    }

    public function update(Request $request, $id)
    {
        $this->validateData($request);

        $imagenproducto = "";
        if ($request->hasFile('imagen')) {
            $foto = $request->file('imagen');
            $imagenproducto = $foto->getClientOriginalName();
        }

        $currentValue = Producto::find($id);
        
        if (empty($imagenproducto)) $imagenproducto = $currentValue->imagen;
        

        $campos=[
            'nombre'           => $request->nombre,
            'precio'           => $request->precio,
            'categoria'        => $request->categoria,
            'descripcion'      => $request->descripcion,
            'imagen'           => $imagenproducto,
           ];
         if ($request->hasFile('imagen')) $foto->move(public_path('image'), $imagenproducto);

         Producto::whereId($id)->update($campos);
         return redirect('admin')->with('success', 'Actualizado correctamente...');
        }

    public function destroy($id){

        $producto = Producto::find($id);
        $producto->delete();

        return redirect('admin');
    }
    }


