<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Http\Requests\StoreMapelRequest;
use App\Http\Requests\UpdateMapelRequest;
use App\Models\Jurusan;
use Symfony\Component\HttpFoundation\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'action' => route("admin.management-mapel.create-process"),
            'mapels' => Mapel::all(),
            'jurusans' => Jurusan::all(),
            'route' => "admin.management-kelas"
        ];
        return view('admin.management-mapel.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Mapel $mapel)
    {
        $credentials = $request->validate([
            "mapel" => ["required"],
            "id_jurusan" => ["required"],
        ]);

        $mapel->create($credentials);

        return redirect()->route("admin.management-mapel")->with("pesan", "Data Berhasil Ditambahkan");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMapelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMapelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit(Mapel $mapel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMapelRequest  $request
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMapelRequest $request, Mapel $mapel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapel $mapel)
    {
        //
    }
}
