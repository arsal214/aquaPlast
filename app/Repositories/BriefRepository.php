<?php

namespace App\Repositories;

use App\Interfaces\BriefRepositoryInterface;
use App\Models\Brief;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class BriefRepository implements BriefRepositoryInterface
{

    /**
     *  list.
     */
    public function list(): Collection
    {
        $briefs = Brief::with(['category', 'subCategory','images'])->get();
        return $briefs;
    }

    /**
     *  list.
     */
    public function captainId($captain_id)
    {
        $perPage = request()->get('per_page', 10);
        $briefs = Brief::with(['images','category', 'subCategory'])->where('captain_id', $captain_id)->latest()
            ->paginate($perPage);
        return $briefs;
    }




    /**
     * Create & save Product.
     */
    public function storeOrUpdate(array $data, $id = null): Brief
    {
        $brief = Brief::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $brief;
    }

    /**
     * Find Product by id.
     */
    public function findById($id): Brief
    {
        return Brief::find($id);
    }

    /**
     * Delete Product by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
