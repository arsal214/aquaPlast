<?php

namespace App\Repositories;

use App\Interfaces\ReviewRepositoryInterface;
use App\Models\Review;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class ReviewRepository implements ReviewRepositoryInterface
{

    /**
     *  list.
     */
    public function list():Collection
    {
        $reviews =  Review::all();
        return $reviews;
    }

    /**
     * Create & save Product.
     */
    public function storeOrUpdate(array $data, $id = null): Review
    {
        $review = Review::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $review;
    }

    /**
     * Find Product by id.
     */
    public function findById($id): Review
    {
        return Review::find($id);
    }
    /**
     * Delete Product by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
