<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planning;

class PlanningController extends Controller
{
    public function index()
    {
        return Planning::all();
    }
 
    public function show($id)
    {
        return Planning::find($id);
    }

    public function store(Request $request)
    {
        return Planning::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $planning = Planning::findOrFail($id);
        $planning->update($request->all());

        return $planning;
    }

    public function delete(Request $request, $id)
    {
        $planning = Planning::findOrFail($id);
        $planning->delete();

        return 204;
    }
}
