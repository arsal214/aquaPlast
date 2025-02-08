<?php

namespace App\Interfaces;

interface TermConditionRepositoryInterface
{

    public function list();

    public function storeOrUpdate(array $data, $id = null);

    public function findById($id);

    public function destroyById($id);
}
