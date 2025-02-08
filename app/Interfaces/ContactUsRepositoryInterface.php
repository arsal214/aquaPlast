<?php

namespace App\Interfaces;

interface ContactUsRepositoryInterface
{
    public function list($id);

    public function storeOrUpdate(array $data, $id = null);

    public function findById($id);

    public function destroyById($id);
}
