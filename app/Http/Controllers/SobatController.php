<?php

namespace App\Http\Controllers;
use App\Models\Konselor;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SobatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landing'); 
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function konselor()
    {
        $konselors = Konselor::all(); // Pastikan model Konselor sudah diimport
        return view('konselor', compact('konselors'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            // Ambil data konselor berdasarkan id
            $konselor = Konselor::findOrFail($id);
            
            // Cek tipe data specializations
            $specializations = $konselor->specializations;
            if (is_string($specializations)) {
                $specializations = json_decode($specializations, true) ?? [];
            }
    
            // Return view dengan data konselor
            return view('dkonselor', [
                'konselor' => $konselor,
                'specializations' => $specializations,
                'name' => $konselor->name,
                'profile_image' => $konselor->profile_image,
                'bio' => $konselor->bio,
                'about_me' => $konselor->about_me,
                'handled_cases' => $konselor->handled_cases,
                'clinical_approaches' => $konselor->clinical_approaches
            ]);
            
        } catch (ModelNotFoundException $e) {
            // Handle jika konselor tidak ditemukan
            return redirect()->route('konselor.index')
                ->with('error', 'Konselor tidak ditemukan');
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
