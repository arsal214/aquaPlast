<?php

namespace App\Repositories;

use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class ProductRepository implements ProductRepositoryInterface
{

    /**
     *  list.
     */
    public function list(): Collection
    {
        $products = Product::with(['images', 'faqs','category'])
            ->get();
        return $products;
    }

    /**
     * Active list.
     */
    public function activeList()
    {
            return Product::with(['images', 'faqs','category'])
                ->where('status', 'Active')
                ->get();


    }

    /**
     * Active list.
     */
    public function serviceByCategory($id): Collection
    {
        $services = Product::with(['images', 'faqs', 'tags', 'supplier.user', 'reviews'])->where('category_id', $id)->where('status', 'Active')
            ->withCount('reviews')
            ->withAvg('reviews', 'stars')
            ->get();
        return $services;
    }

    public function serviceBySubCategory($id): Collection
    {
        $services = Product::with(['images', 'faqs', 'tags', 'supplier.user', 'reviews'])->where('subcategory_id', $id)->where('status', 'Active')
            ->withCount('reviews')
            ->withAvg('reviews', 'stars')
            ->get();
        return $services;
    }

    /**
     * Active list.
     */
    public function serviceByCategoryFilter($id): LengthAwarePaginator
    {
        $perPage = request()->get('per_page', 24);
        $services = Product::with(['images', 'faqs', 'tags', 'supplier.user', 'reviews'])
            ->where('category_id', $id)->where('status', 'Active')
            ->withCount('reviews')
            ->withAvg('reviews', 'stars')
            ->paginate($perPage);
        return $services;
    }

    /**
     * Active list.
     */
    public function servicesList(): LengthAwarePaginator
    {
        $perPage = request()->get('per_page', 10);
        $subCatID = request()->get('subcatID');
        $parentCatID = request()->get('parentCatID');
        $search = request()->get('title');

        $services = Product::with([
            'images',
            'supplier.user',
            'wishlists',
            'category',
            'subCategory',
            'reviews'
        ])
            ->withCount('reviews') // Reviews ka total count
            ->withAvg('reviews', 'stars') // Reviews ka average rating
            ->where('status', 'Active');

        if ($parentCatID || $subCatID) {
            $services = $services->where(function ($query) use ($parentCatID, $subCatID) {
                if ($parentCatID) {
                    $query->whereIn('category_id', explode(',', $parentCatID));
                }
                if ($subCatID) {
                    $query->orWhereIn('subcategory_id', explode(',', $subCatID));
                }
            });
        }

        if ($search) {
            $services = $services->where('name', 'like', '%' . $search . '%');
        }

        return $services->paginate($perPage);
    }


    /**
     * Active list.
     */
    public function limitServices()
    {
        $services = Product::with(['images', 'faqs', 'tags', 'supplier.user', 'wishlists', 'category', 'subCategory', 'reviews'])
            ->where('status', 'Active')
            ->withCount('reviews')
            ->withAvg('reviews', 'stars')->limit(8)->get();
        return $services;
    }

    /**
     * Active list.
     */
    public function trendServices()
    {
        $products = Product::with(['images', 'faqs','category'])
            ->where('status', 'Active')
            ->where('is_featured', 'Active')
            ->get();
        return $products;
    }


    public function featuresServices()
    {
        $products = Product::with(['images', 'faqs','category'])
            ->where('status', 'Active')
            ->where('is_popular', 'Active')->latest()
            ->limit(8)->get();
        return $products;
    }


    /**
     * Create & save Product.
     */
    public function storeOrUpdate(array $data, $id = null): Product
    {
        $service = Product::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $service;
    }

    /**
     * Find Product by id.
     */
    public function findById($id): Product
    {
        return Product::find($id);
    }

    /**
     * Delete Product by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
