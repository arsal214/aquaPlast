<?php

namespace App\Interfaces;

interface BriefRepositoryInterface
{
    public function list();

    public function captainId($captain_id);

    public function storeOrUpdate(array $data, $id = null);

    public function findById($id);

    public function destroyById($id);
}
