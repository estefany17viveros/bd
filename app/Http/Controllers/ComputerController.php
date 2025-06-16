<?php

namespace App\Http\Controllers;


use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {

        $computers = Computer::all();
        return response()->json($computers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Si estás usando vistas Blade
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $computer = Computer::create($request->all());

        return response()->json($computer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computer = Computer::findOrFail($id);
        // $computer = Computer::with(['posts.user'])->findOrFail($id);
        // $computer = Computer::with(['posts'])->findOrFail($id);
        return response()->json($computer);
    }
}

