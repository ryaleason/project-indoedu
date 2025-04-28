<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materials = Material::paginate(10); // Change from all() to paginate()
        return view('admin.materials.index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.materials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content' => [
                'required',
                'string',
                'regex:/^(https?\:\/\/)?(www\.)?(youtube\.com|youtu\.be)\/.+$/'
            ],
        ], [
            'content.regex' => 'Konten harus berupa link YouTube yang valid.',
        ]);

        Material::create($request->only('title', 'description', 'content'));

        return redirect()->route('materials.index')
            ->with('success', 'Materi berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        return view('admin.materials.show', compact('material'));
    }

    public function showuser(Material $material)
    {
        return view('admin.materials.user', compact('material'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        return view('admin.materials.edit', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material $material)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content' => 'required|string',
        ]);

        $material->update($request->all());

        return redirect()->route('materials.index')
            ->with('success', 'Materi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        $material->delete();

        return redirect()->route('materials.index')
            ->with('success', 'Materi berhasil dihapus!');
    }
}
