<?php

namespace App\Services;

use App\Http\Requests\ProductRequest;
use App\Models\MasterCategory;
use App\Models\Product;
use App\Models\Seo;

class ProductService
{
    /**
     * @var ImageService
     */
    private $imageService;

    /**
     * @var SeoService
     */
    private $seoService;

    public function __construct(ImageService $imageService, SeoService $seoService)
    {
        $this->imageService = $imageService;
        $this->seoService = $seoService;
    }

    public function getProductList()
    {
        return Product::where('language', app()->getLocale())->latest();
    }

    public function getCategoryList()
    {
        return MasterCategory::whereName('products')->first()->categoryList;
    }

    /**
     * Store Product
     *
     * @param ProductRequest $request
     */
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->except(array_merge(Seo::META_LIST, ['image', 'content'])));
        $this->save($product, $request);
    }

    /**
     * Update Product
     *
     * @param Product $product
     * @param ProductRequest $request
     */
    public function update(Product $product, ProductRequest $request)
    {
        $product->update($request->except(array_merge(Seo::META_LIST, ['image', 'content'])));
        $this->save($product, $request);
    }

    /**
     * Save Product
     *
     * @param Product $product
     * @param ProductRequest $request
     */
    private function save(Product $product, ProductRequest $request)
    {
        if ($request->file) {
            $product->image = $this->imageService->store($request->file, config('constants.folder.product') . $product->id);
        }
        $product->content = $this->imageService->transformAll($request['content'], config('constants.folder.product') . $product->id);
        $product->save();
        $product->category()->sync($request->category_id);
        $this->seoService->save($product, $request);
    }
}
