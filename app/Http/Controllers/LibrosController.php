<?php

namespace App\Http\Controllers;

use App\Models\libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('libros.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'idLibro' => 'required|string',
            'idUsuario' => 'required|string',
            'FechaReservacion' => 'required|string',
        ]);

        
        $user = Libros ::create($validate);


        return response()->json($user, 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(libros $libros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(libros $libros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, libros $libros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(libros $libros)
    {
        //
    }
}
