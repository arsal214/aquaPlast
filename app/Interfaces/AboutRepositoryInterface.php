<?php

namespace App\Interfaces;

interface AboutRepositoryInterface
{

    public function list();

    public function detail();

    public function storeOrUpdate(array $data, $id = null);

    public function findById($id);

    public function destroyById($id);
}
