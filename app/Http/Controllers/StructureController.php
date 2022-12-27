<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(request('search'));
        $structures = Structure::paginate(5);

        return view('admin.structure.index', compact('structures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.structure.create');
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
            'name' => 'required',
            'jabatan' => 'required',
            'bidang' => 'required',
            'angkatan' => 'required',
            'jurusan' => 'required',
            'image' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            // $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('image'), $imageName);
            $input['image'] = $imageName;
        }

        Structure::create($input);

        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect('/admin/structures');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function show(Structure $structure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function edit(Structure $structure)
    {

        return view('admin.structure.edit', compact('structure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Structure $structure)
    {
        $request->validate([
            'name' => 'required',
            'jabatan' => 'required',
            'bidang' => 'required',
            'angkatan' => 'required',
            'jurusan' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            // $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('image'), $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $structure->update($input);

        Alert::success('Berhasil', 'Data Berhasil Diedit');
        return redirect('/admin/structures');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Structure $structure)
    {
        $structure->delete();

        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect('/admin/structures');
    }
}
