<?php

namespace App\Repositories;

use App\Interfaces\PrivacyPolicyRepositoryInterface;
use App\Models\PrivacyPolicy;
use Illuminate\Database\Eloquent\Collection;


class PrivacyPolicyRepository implements PrivacyPolicyRepositoryInterface
{
    /**
     * All Plans list.
     */
    public function list(): Collection
    {
        return PrivacyPolicy::latest()->get();
    }


    /**
     * Create or update plan.
     */
    public function storeOrUpdate(array $data, $id = null): PrivacyPolicy
    {
        $plan = PrivacyPolicy::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $plan;
    }

    /**
     * Find plan by id.
     */
    public function findById($id): PrivacyPolicy
    {
        return PrivacyPolicy::find($id);
    }

    /**
     * Delete plan by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
