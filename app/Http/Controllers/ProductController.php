<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        if($request){
            $query = trim($request->get('search'));
    
            $products = Product::where('pro_name', 'LIKE', '%' .$query. '%')
            ->orderBy('id', 'asc')
            ->paginate(5);
    
            return view('productos.product', ['products' => $products, 'search' => $query ] );
        }

        //$products = Product::all()->paginate(5);
        //return view('productos.product', ['products'=>$products]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $products = new Product();
        $products->pro_name = request('name');
        $products->pro_descripcion = request('descripcion');
        $products->stock = request('cantidd');
        $products->pro_image = request('imagen');
        $products->pro_price = request('precio');
        
        $products->save();

        return redirect('product')->with('flash', 'Elemento Guardado con exito');
    }

    public function show($id)
    {
        return view('productos.show', ['product' => Product::findOrfail($id)]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);

        $products->pro_name = $request->get('name');
        $products->pro_descripcion = $request->get('descripcion');
        $products->stock = $request->get('cantidad');
        $products->pro_price = $request->get('precio');
        $products->pro_image = $request->get('imagen');

        $products->update();

        return redirect('/product')->with('flash', 'Elemento Actualizado con exito');
    }

    public function destroy($id)
    {
        $products = Product::findOrFail($id);

        $products->delete();
    
        return redirect('/product')->with('flash', 'Elemento eliminado con exito');
    }
}
