<?php

namespace App\Http\Controllers;
use App\Models\Training_Center;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainingCenters = Training_Center::all();
        return response()->json($trainingCenters);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Si estás usando vistas Blade
        return view('trainingcenters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'location' => 'required|max:255',
        ]);

        $trainingCenter = Training_Center::create($request->all());

        return response()->json($trainingCenter);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $trainingCenter = Training_Center::findOrFail($id);
        return response()->json($trainingCenter);
    }
}
