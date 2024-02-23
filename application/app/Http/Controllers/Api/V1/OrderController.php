<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\OrderRequest;
use App\Http\Resources\Api\V1\OrderResource;
use App\Repositories\OrderRepository;

class OrderController extends Controller
{
    public function __construct(private OrderRepository $repository)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = $this->repository->findWithProductsUser();
        return OrderResource::collection($order);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        $order = $this->repository->createWithProductsUser($request->all());
        return OrderResource::make($order);
    }
}
