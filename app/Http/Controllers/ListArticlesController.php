<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListArticlesController extends Controller
{
    public function __invoke()
    {
        return response()->json([]);
    }
}
