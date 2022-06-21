<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Services\ProductService;
use Exception;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $productList = $this->productService->getProductList()->get();
        return view('admin.product.index', compact('productList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categoryList = $this->productService->getCategoryList();
        return view('admin.product.create', compact('categoryList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @param ProductService $productService
     * @return Response
     */
    public function store(ProductRequest $request, ProductService $productService)
    {
        $productService->store($request);
        return back()->with('success', trans('Saved successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return void
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function edit(Product $product)
    {
        $categoryList = $this->productService->getCategoryList();
        $seo = $product->seo;
        return view('admin.product.edit', compact('product', 'categoryList', 'seo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param Product $product
     * @param ProductService $productService
     * @return Response
     */
    public function update(ProductRequest $request, Product $product, ProductService $productService)
    {
        $productService->update($product, $request);
        return redirect()->route('product.index')->with('success', trans('Updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return Response
     * @throws Exception
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success', trans('Deleted successfully'));
    }
}
