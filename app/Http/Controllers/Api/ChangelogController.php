<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ChangelogResource;
use App\Models\Changelog;

class ChangelogController extends Controller
{
    public function index()
    {
        return ChangelogResource::collection(Changelog::latest()->limit(10)->get());
    }

    public function show(Changelog $changelog)
    {
        return new ChangelogResource($changelog);
    }
}
