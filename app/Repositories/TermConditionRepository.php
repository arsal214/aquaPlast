<?php

namespace App\Repositories;

use App\Interfaces\TermConditionRepositoryInterface;

use App\Models\TermCondition;
use Illuminate\Database\Eloquent\Collection;


class TermConditionRepository implements TermConditionRepositoryInterface
{
    /**
     * All Plans list.
     */
    public function list(): Collection
    {
        return TermCondition::latest()->get();
    }


    /**
     * Create or update plan.
     */
    public function storeOrUpdate(array $data, $id = null): TermCondition
    {
        $plan = TermCondition::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $plan;
    }

    /**
     * Find plan by id.
     */
    public function findById($id): TermCondition
    {
        return TermCondition::find($id);
    }

    /**
     * Delete plan by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
