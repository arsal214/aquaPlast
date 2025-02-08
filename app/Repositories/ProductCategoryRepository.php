<?php

namespace App\Repositories;

use App\Interfaces\ProductCategoryRepositoryInterface;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;


class ProductCategoryRepository implements ProductCategoryRepositoryInterface
{

    /**
     * All  category list.
     */
    public function list()
    {
        return Category::orderBy('name', 'asc')->get();
    }

    /**
     * All  category list.
     */
    public function parentCategory(): Collection
    {
        return Category::with('children')
            ->whereNull('parent_id')
            ->orderBy('name', 'asc')
            ->get();
        // return Category::with(['children'])->where('parent_id','=',null)->latest()->get();
    }

     /**
     * Active  category list.
     */
    public function activeList()
    {
        return Category::whereNull('parent_id')->where('status', 1)->orderBy('name', 'asc')->get();
    }

    /**
     * Active category list.
     */
    public function activeCategory()
    {
        return Category::where('status', 1)->orderBy('name', 'asc')->get();
    }

    /**
     * Popular  category list.
     */
    public function isPopular(): Collection
    {
        return Category::where('is_popular','Yes')->where('status', 1)->orderBy('name', 'asc')->get();
    }

    /**
     * Create & save  Category.
     */
    public function storeOrUpdate(array $data, $id = null): Category
    {
        $cat = Category::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $cat;
    }

    /**
     * Find   by id.
     */
    public function findById($id): Category
    {
        return Category::find($id);
    }

    /**
     * Find   by id.
     */
    public function nestedCategory($id): Category
    {
        return  Category::with(['children','children.children'])->findOrFail($id);
    }

    /**
     * all categories.
     */
    public function nestedCategories(): Collection
    {
        return  Category::with(['children','children.children'])->whereNull('parent_id')->get();
    }


    /**
     * Find  category by id.
     */
    public function subCategory($id)
    {

        $cat =  Category::where('parent_id',$id)->where('status', 1)->where('is_popular','=','Yes')->orderBy('name', 'asc')->get();
        return $cat;
    }

    /**
     * Delete  category by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
