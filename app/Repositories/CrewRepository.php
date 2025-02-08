<?php

namespace App\Repositories;

use App\Interfaces\CrewRepositoryInterface;
use App\Models\Crew;
use Illuminate\Database\Eloquent\Collection;


class CrewRepository implements CrewRepositoryInterface
{

    /**
     * All  category list.
     */
    public function list($id): Collection
    {
        return Crew::with(['user'])->where('captain_id',$id)->latest()->get();
    }

     /**
     * Active  Crew list.
     */
    public function activeList($id): Collection
    {
        return Crew::with(['user'])->where('captain_id',$id)->where('status', 'Active')->get();
    }


    /**
     * Create & save  Crew.
     */
    public function storeOrUpdate(array $data, $id = null): Crew
    {
        $crew = Crew::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $crew;
    }

    /**
     * Find  Crew by id.
     */
    public function findById($id): ?Crew
    {
        return Crew::find($id);
    }


    /**
     * Delete Crew by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
