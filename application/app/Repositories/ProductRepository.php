<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends AbstractRepository
{
    protected static $model = Product::class;

    public static function allWithCategories(string $category = null): mixed
    {
        $query = self::loadModel()->with('category');
        
        if ($category) {
            $query = $query->whereHas('category', function($query) use ($category) {
                $query->where('name', $category);
            });
        }

        return $query->simplePaginate(10);
    }
}