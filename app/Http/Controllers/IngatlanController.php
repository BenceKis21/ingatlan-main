<?php

namespace App\Http\Controllers;
use App\Models\Ingatlan;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class IngatlanController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Ingatlan::getAllWithCategory(),200);
    }
}
