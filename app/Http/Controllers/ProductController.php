<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Manufacturer;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function certifications()
    {
        $products = Product::all();
        if ($products != null) {
            $len = count($products);
            for($i = 0; $i < $len; $i++) {
                $products[$i]->images = \explode("|", $products[$i]->images);
                $products[$i]->description_lines = \explode("|", $products[$i]->description);
                $products[$i]->infos = \explode("|", $products[$i]->info);
            }
        }
        return view('pages.certifications.index', [
            'products' => $products,
            'title' => 'Certifications',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $manufacturer = null;
        if ($product != null) {
            $product->images = \explode("|", $product->images);
            $product->description_lines = \explode("|", $product->description);
            $product->infos = \explode("|", $product->info);
            $product->composition_lines = \explode("|", $product->composition);
            $product->packaging_lines = \explode("|", $product->packaging);
            $product->intended_use_lines = \explode("|", $product->intended_use);
            $manufacturer = Manufacturer::find($product->manufacturer_id);
        }
        return view('pages.product.detail', [
            'product' => $product,
            'manufacturer' => $manufacturer,
            'title' => $product->name,
            'description' => $product->description,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        //
    }
}
