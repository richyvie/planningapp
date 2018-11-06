<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Jobrole;

class JobroleController extends Controller
{
    public function index()
    {
        return Jobrole::all();
    }
 
    public function show($id)
    {
        return Jobrole::find($id);
    }

    public function store(Request $request)
    {
        return Jobrole::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $jobrole = Jobrole::findOrFail($id);
        $jobrole->update($request->all());

        return $jobrole;
    }

    public function delete(Request $request, $id)
    {
        $jobrole = Jobrole::findOrFail($id);
        $jobrole->delete();

        return 204;
    }
}
