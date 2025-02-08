<?php

namespace App\Interfaces;

interface OrderRepositoryInterface
{

    public function list();

    public function captainList($captainId);

    public function supplierList($supplierId);

    public function storeOrUpdate(array $data, $id = null);

    public function findById($id);

    public function destroyById($id);
}
