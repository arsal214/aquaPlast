<?php

namespace App\Repositories;

use App\Interfaces\WishlistRepositoryInterface;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Collection;


class WishlistRepository implements WishlistRepositoryInterface
{
    /**
     * All Plans list.
     */
    public function list($captain_id): Collection
    {
         $wishList = Wishlist::where('captain_id', $captain_id)
            ->with([
                'service' => function ($query) {
                    $query->withCount('reviews')->withAvg('reviews', 'stars')
                        ->with(['reviews', 'images', 'supplier.user']);
                }
            ])
            ->get();
         return $wishList;
    }


    /**
     * Create or update plan.
     */
    public function storeOrUpdate(array $data, $id = null): Wishlist
    {
        $plan = Wishlist::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $plan;
    }

    /**
     * Find plan by id.
     */
    public function findById($id): Wishlist
    {
        return Wishlist::find($id);
    }

    /**
     * Delete plan by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
