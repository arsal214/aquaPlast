<?php

namespace App\Repositories;

use App\Interfaces\BoatRepositoryInterface;
use App\Models\Boat;
use Illuminate\Database\Eloquent\Collection;


class BoatRepository implements BoatRepositoryInterface
{

    /**
     * All  category list.
     */
    public function list($id): Collection
    {
        return Boat::with(['boatImages','departments'])->where('captain_id', $id)->latest()->get();
    }


    /**
     * Active  category list.
     */
    public function activeList($id): Collection
    {
        return Boat::with(['boatImages','departments'])->where('captain_id', $id)->where('status', 'Active')->get();
    }

    /**
     * Create & save  Category.
     */
    public function storeOrUpdate(array $data, $id = null): Boat
    {
        $dep = Boat::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $dep;
    }

    /**
     * Find   by id.
     */
    public function findById($id): Boat
    {
        return Boat::find($id);
    }


    /**
     * Delete  category by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
