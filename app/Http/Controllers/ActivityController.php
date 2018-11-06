<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Http\Resources\Activity\ActivityResource;

class ActivityController extends Controller
{
    public function index()
    {
        return Activity::all();
    }
 
    public function show($id)
    {
        return Activity::find($id);

    }

    public function store(Request $request)
    {
        return Activity::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $activity = Activity::findOrFail($id);
        $activity->update($request->all());

        return $activity;
    }

    public function delete(Request $request, $id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return 204;
    }
}
