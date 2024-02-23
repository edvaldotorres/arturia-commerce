<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

interface RepositoryInterface
{
    public static function all(): Paginator;

    public static function create(array $data): ?Model;

    public static function find(int $id): ?Model;

    public static function update(array $data, int $id): ?Model;

    public static function delete(int $id): int;

    public static function loadModel(): Model;
}
