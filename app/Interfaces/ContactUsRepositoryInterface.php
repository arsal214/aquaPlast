<?php

namespace App\Interfaces;

interface ContactUsRepositoryInterface
{
    public function list();

    public function storeOrUpdate(array $data, $id = null);

    public function findById($id);

    public function destroyById($id);
}
