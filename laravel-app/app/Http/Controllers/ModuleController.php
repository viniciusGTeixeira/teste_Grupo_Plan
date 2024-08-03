<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{
    public function index()
    {
        return Module::all();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'training_id' => 'required|exists:trainings,id'
        ]);

        $module = Module::create($request->all());

        return response()->json($module, 201);
    }

    public function show(Module $module)
    {
        return response()->json($module);
    }

    public function update(Request $request, Module $module)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        $module->update($request->all());

        return response()->json($module);
    }

    public function destroy(Module $module)
    {
        $module->delete();

        return response()->json(null, 204);
    }
}
