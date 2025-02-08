<?php

namespace App\Repositories;

use App\Interfaces\PortfolioRepositoryInterface;
use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Collection;


class PortfolioRepository implements PortfolioRepositoryInterface
{

    /**
     *  list.
     */
    public function list($id):Collection
    {
        $portfolio =  Portfolio::with(['images','category','subCategory','supplier'])->where('supplier_id',$id)->get();
        return $portfolio;
    }

    /**
     * Active list.
     */
    public function activeList($id):Collection
    {
        $portfolio =  Portfolio::with(['images','category','subCategory','supplier'])->where('supplier_id',$id)->where('status','Active')->get();
        return $portfolio;
    }

    /**
     * Create & save Product.
     */
    public function storeOrUpdate(array $data, $id = null): Portfolio
    {
        $portfolio = Portfolio::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $portfolio;
    }

    /**
     * Find Product by id.
     */
    public function findById($id): Portfolio
    {
        return Portfolio::find($id);
    }
    /**
     * Delete Product by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
