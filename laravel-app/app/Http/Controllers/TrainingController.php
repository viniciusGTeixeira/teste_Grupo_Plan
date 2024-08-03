<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\EmployeeTraining;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;


class TrainingController extends Controller
{
    public function index()
    {
        return Training::all();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'video_url' => 'required'
        ]);

        $training = Training::create([
            'title' => $request->title,
            'description' => $request->description,
            'video_url' => $request->video_url,
            'created_by' => Auth::id()
        ]);

        return response()->json($training, 201);
    }

    public function show(Training $training)
    {
        return response()->json($training);
    }

    public function update(Request $request, Training $training)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'video_url' => 'required'
        ]);

        $training->update($request->all());

        return response()->json($training);
    }

    public function destroy(Training $training)
    {
        $training->delete();

        return response()->json(null, 204);
    }

    public function startTraining(Request $request, Training $training)
    {
        $employeeTraining = EmployeeTraining::create([
            'user_id' => Auth::id(),
            'training_id' => $training->id,
            'started_at' => now()
        ]);

        return response()->json($employeeTraining, 201);
    }

    public function completeTraining(Request $request, Training $training)
    {
        $employeeTraining = EmployeeTraining::where('user_id', Auth::id())
                                            ->where('training_id', $training->id)
                                            ->first();

        $employeeTraining->completed_at = now();
        $employeeTraining->save();

        $pdf = PDF::loadView('certificate', compact('employeeTraining'));
        return $pdf->download('certificate.pdf');
    }
}
