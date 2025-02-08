<?php

namespace App\Interfaces;

interface FaqRepositoryInterface
{
    public function list();

    public function activeList();


    public function storeOrUpdate(array $data, $id = null);

    public function findById($id);

    public function destroyById($id);

}
