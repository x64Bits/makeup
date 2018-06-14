<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; 
use App\SliderImage;
use Response;
use Exception;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function crudProduct()
    {
        return view('product.crud_product');
    }
    public function index()
    {
        //$products = Product::paginate(20);

        $products = DB::table('products')
            ->orderBy('id', 'desc')
            ->paginate(8);

        $slider_images = SliderImage::orderBy('position', 'asc')
            ->get();

        return view('product.index', compact('products', 'slider_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.form_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $product = new Product;

        $product->category = $req->category;

        $product->name = $req->name;

        $product->brand = $req->brand;

        $product->code = $req->code;

        $product->price = $req->price;

        if($req->hasFile('image_path'))
        {
            $product->image_path = $req->file('image_path')->store(
                'uploads',
                'public_uploads'
            );
        }
        try{
           $product->save();
        } 
        catch(\Exception $e){
           return Response::json( $e );
        }
        

        return Response::json(['code' => 201, 'msg' => 'Producto registrado con exito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->first();

        return view('product.show', compact('product'));
    }

    public function showByCode($code)
    {
        $product = Product::where('code', $code)->get();

        return Response::json($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        //Formulario
        return view('product.form_update', compact('product'));
        
    }

    public function showEditForm()
    {
        return view('product.form_update');
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
        $product = Product::findOrFail($id);

        if($request->hasFile('image_path'))
        {
            $product->image_path = $request->file('image_path')->store('public');
        }

        $product->update($request->except('image_path'));

        return Response::json(['code' => 201, 'msg' => 'Producto editado con exito', $request->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return Response::json($product);
    }

    public function catalogShow()
    {
    	return view('panel.options-panel');
    }

    public function showDeleteForm()
    {
        return view('product.form_delete');
    }

    public function showByCategory($category)
    {
        $products = DB::table('products')->where('category', $category)->paginate(15);

        return view('product.index', compact('products'));
    }

    public function searchProduct(Request $request)
    {

         if (!is_null($request->search)) {

            $results = DB::table('products')
                    ->where('name', 'LIKE', '%' . $request->search . '%')
                    ->paginate(15);
            if (!$results->first()) {
                $results = [
                    'code' => 404,
                    'msg' => 'Su busqueda no ha dado resultados...'
                ];

                return view('product.results', compact('results'));
            }

            return view('product.results', compact('results'));
        }else {
            $results = [
                'code' => 404,
                'msg' => 'Debe colocar un termino para realizar una busqueda'
            ];

            return view('product.results', compact('results'));
        }
        
    }
}
