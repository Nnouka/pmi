<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
     /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // $product = Product::where('slug', $slug)->first();
        
        // return view('pages.product.detail', [
        //     'product' => $product,
        //     'manufacturer' => $manufacturer,
        //     'title' => $product->name,
        //     'description' => $product->description,
        // ]);
        return $slug;
    }
}
