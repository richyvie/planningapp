<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collaborator;

class CollaboratorController extends Controller
{
    public function index()
    {
        return Collaborator::all();
    }
 
    public function show($id)
    {
        return Collaborator::find($id);
    }

    public function store(Request $request)
    {
        return Collaborator::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $collaborator = Collaborator::findOrFail($id);
        $collaborator->update($request->all());

        return $collaborator;
    }

    public function delete(Request $request, $id)
    {
        $collaborator = Collaborator::findOrFail($id);
        $collaborator->delete();

        return 204;
    }
}
