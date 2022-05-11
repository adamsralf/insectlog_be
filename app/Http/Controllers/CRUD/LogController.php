<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Http\Requests\CRUD\Log\Store;
use App\Http\Requests\CRUD\Log\Update;
use App\Models\Log;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class LogController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return \App\Http\Resources\CRUD\Log::collection(Log::all());
    }

    public function store(Store $request) {
        return \App\Http\Resources\CRUD\Log::make(Log::create($request->validated()));
    }

    public function show(Log $log) {
        return \App\Http\Resources\CRUD\Log::make($log);
    }

    public function update(Log $log, Update $request) {
        $log->update($request->validated());
        $log->save();

        return \App\Http\Resources\CRUD\Log::make($log);
    }

    public function destroy(Log $log) {
        $log->delete();
    }
}
