<?php

namespace App\Repositories;

use App\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

abstract class AbstractRepository implements RepositoryInterface
{
    protected static $model;

    public static function all(): Paginator
    {
        return self::loadModel()->simplePaginate(10);
    }

    public static function create(array $data): ?Model
    {
        return self::loadModel()::query()->create($data);
    }

    public static function find(int $id): ?Model
    {
        return self::loadModel()->findOrFail($id);
    }

    public static function update(array $data, int $id): ?Model
    {
        $model = self::find($id);
        if ($model) {
            $model->update($data);
        }
        return $model;
    }

    public static function delete(int $id): int
    {
        $model = self::find($id);
        return $model ? $model->delete() : 0;
    }

    public static function loadModel(): Model
    {
        return app(static::$model);
    }
}
