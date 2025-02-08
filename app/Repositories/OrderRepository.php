<?php

namespace App\Repositories;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;


class OrderRepository implements OrderRepositoryInterface
{
    /**
     * All  list.
     */
    public function list()
    {
        return Order::query()->latest();
    }

    public function captainList($captainId): Collection
    {
        return Order::where('captain_id', $captainId)->latest()->get();
    }


    public function supplierList($supplierId): Collection
    {
        return Order::where('supplier_id', $supplierId)->latest()->get();
    }

    /**
     * Create or update plan.
     */
    public function storeOrUpdate(array $data, $id = null): Order
    {
        $plan = Order::updateOrCreate(
            ['id' => $id],
            $data
        );
        return $plan;
    }

    /**
     * Find plan by id.
     */
    public function findById($id): Order
    {
        $order = Order::find($id);
        return $order;
    }

    /**
     * Delete plan by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
