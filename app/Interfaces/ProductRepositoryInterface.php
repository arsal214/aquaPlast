<?php

namespace App\Interfaces;

interface ProductRepositoryInterface
{
    public function list();

    public function serviceByCategory($id);
    public function serviceBySubCategory($id);

    public function serviceByCategoryFilter($id);

    public function servicesList();

    public function limitServices();

    public function trendServices();

    public function featuresServices();

    public function activeList();

    public function activeListPaginate();

    public function storeOrUpdate(array $data, $id = null);

    public function findById($id);

    public function destroyById($id);
}
