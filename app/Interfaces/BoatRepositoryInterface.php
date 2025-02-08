<?php

namespace App\Interfaces;

interface BoatRepositoryInterface
{
    public function list($id);

    public function activeList($id);

    public function storeOrUpdate(array $data, $id = null);

    public function findById($id);

    public function destroyById($id);
}
