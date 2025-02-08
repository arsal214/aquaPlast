<?php

namespace App\Repositories;

use App\Interfaces\HomepageRepositoryInterface;
use App\Models\HomePage;
use Illuminate\Database\Eloquent\Collection;


class HomepageRepository implements HomepageRepositoryInterface
{
    /**
     * All Plans list.
     */
    public function list(): Collection
    {
        return HomePage::latest()->get();
    }


    /**
     * Create or update plan.
     */
    public function storeOrUpdate(array $data, $id = null): HomePage
    {
        $plan = HomePage::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $plan;
    }

    /**
     * Find plan by id.
     */
    public function findById($id): HomePage
    {
        return HomePage::find($id);
    }

    /**
     * Delete plan by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
