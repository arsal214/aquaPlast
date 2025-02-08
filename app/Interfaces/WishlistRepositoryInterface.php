<?php

namespace App\Interfaces;

interface WishlistRepositoryInterface
{

    public function list($captain_id);

    public function storeOrUpdate(array $data, $id = null);

    public function findById($id);

    public function destroyById($id);
}
