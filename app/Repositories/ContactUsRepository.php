<?php

namespace App\Repositories;

use App\Interfaces\ContactUsRepositoryInterface;
use App\Models\ContactUs;
use Illuminate\Database\Eloquent\Collection;


class ContactUsRepository implements ContactUsRepositoryInterface
{

    /**
     * All  category list.
     */
    public function list(): Collection
    {
        return ContactUs::all();
    }



    /**
     * Create & save  Category.
     */
    public function storeOrUpdate(array $data, $id = null): ContactUs
    {
        $contactUs = ContactUs::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $contactUs;
    }

    /**
     * Find   by id.
     */
    public function findById($id): ContactUs
    {
        return ContactUs::find($id);
    }


    /**
     * Delete  category by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
