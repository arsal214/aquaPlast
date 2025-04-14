<?php

namespace App\Repositories;

use App\Interfaces\TeamRepositoryInterface;
use App\Models\Team;
use Illuminate\Database\Eloquent\Collection;


class TeamRepository implements TeamRepositoryInterface
{

    /**
     * All  category list.
     */
    public function list()
    {
        return Team::latest();
    }


     /**
     * Active  Team list.
     */
    public function activeList(): Collection
    {
        return Team::where('status', 'Active')->get();
    }

    

    /**
     * Create & save  Team.
     */
    public function storeOrUpdate(array $data, $id = null): Team
    {
        $team = Team::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $team;
    }

    /**
     * Find  Team by id.
     */
    public function findById($id): ?Team
    {
        return Team::find($id);
    }


    /**
     * Delete Team by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
