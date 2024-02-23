<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Order;

class OrderRepository extends AbstractRepository
{
    protected static $model = Order::class;

    public static function createWithProductsUser(array $data): ?Order
    {
        $data['user_id'] = env('USER_AUTH_ID');
        $order = self::create($data);
        $order->products()->attach($data['products']);
        return $order;
    }

    public static function findWithProductsUser(): mixed
    {
        return self::all()->load('products')
            ->where('user_id', env('USER_AUTH_ID'));
    }
}
