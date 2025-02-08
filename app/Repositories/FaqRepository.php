<?php

namespace App\Repositories;

use App\Interfaces\FaqRepositoryInterface;
use App\Models\FAQ;
use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Collection;


class FaqRepository implements FaqRepositoryInterface
{

    /**
     * All  Testimonial list.
     */
    public function list()
    {
        return FAQ::latest();
    }

     /**
     * Active  Testimonial list.
     */
    public function activeList(): Collection
    {
        return FAQ::where('status', 'Active')->get();
    }


    /**
     * Create & save  Testimonial.
     */
    public function storeOrUpdate(array $data, $id = null): FAQ
    {
        $cat = FAQ::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $cat;
    }

    /**
     * Find  Testimonial by id.
     */
    public function findById($id): FAQ
    {
        return FAQ::find($id);
    }


    /**
     * Delete Testimonial by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
