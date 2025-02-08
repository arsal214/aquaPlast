<?php

namespace App\Repositories;

use App\Interfaces\DepartmentRepositoryInterface;
use App\Models\Category;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;


class DepartmentRepository implements DepartmentRepositoryInterface
{

    /**
     * All  category list.
     */
    public function list($id): Collection
    {
        return Department::with(['captain','captain.user'])->where('captain_id',$id)->latest()->get();
    }


    /**
     * Active  category list.
     */
    public function activeList($id): Collection
    {
        return Department::with(['captain','captain.user'])->where('captain_id',$id)->where('status', 'Active')->get();
    }

    /**
     * Create & save  Category.
     */
    public function storeOrUpdate(array $data, $id = null): Department
    {
        $dep = Department::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $dep;
    }

    /**
     * Find   by id.
     */
    public function findById($id): Department
    {
        return Department::find($id);
    }


    /**
     * Delete  category by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
