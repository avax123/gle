<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view(
            'admin.products.show-products',
            [
                'products' => Products::orderBy('id', 'DESC')->paginate(5),
            ]
        );
    }
    //penis

    /**
     * Show the form for creating a new resource.
     *ssssssss dildo
     */
    public function create()
    {
        return view(
            'admin.products.create-products',
            [
                'product'  => [],
                'products' => Category::with('children')->where('parent_id', 0)
                                      ->get(),
            ]
        );
    }
//huisos
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Products::create($request->all());

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy()
    {
    }
}
