<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Http\Requests\CRUD\School\Store;
use App\Http\Requests\CRUD\School\Update;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SchoolController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return \App\Http\Resources\CRUD\School::collection(School::all());
    }

    public function store(Store $request) {
        return \App\Http\Resources\CRUD\School::make(School::create($request->validated()));
    }

    public function show(School $school) {
        return \App\Http\Resources\CRUD\School::make($school);
    }

    public function update(School $school, Update $request) {
        $school->update($request->validated());
        $school->save();

        return \App\Http\Resources\CRUD\School::make($school);
    }

    public function destroy(School $school) {
        $school->delete();
    }
}
