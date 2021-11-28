<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Pengajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'action' => route("guru.management-pengajaran.create-process"),
            'mapels' => Mapel::all(),
            'kelas' => Kelas::all(),
            'pengajarans' => Pengajaran::join('kelas', 'kelas.id', '=', 'pengajarans.id_kelas')->join('mapels', 'mapels.id', '=', 'pengajarans.id_mapel')->where('id_guru', Auth::user()->profile_guru)->get(),
        ];

        return view('guru.management-pengajaran.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Pengajaran $pengajaran)
    {
        $credentials = $request->validate([
            "id_kelas" => ['required'],
            "id_mapel" => ['required']
        ]);

        $validate = $pengajaran->where('id_kelas', '=', $credentials['id_kelas'])->where('id_mapel', '=', $credentials['id_mapel'])->first();

        if ($validate != null) {
            return redirect()->route('guru.management-pengajaran')->with('error', 'Sudah Ada Yang Mengajar!!!');
        }

            $data = [
                "id_kelas" => $credentials['id_kelas'],
                "id_mapel" => $credentials['id_mapel'],
                "id_guru" => Auth::user()->profile_guru,
            ];

            $pengajaran->create($data);

        return redirect()->route('guru.management-pengajaran')->with('pesan', "Berhasil Menambah Data");

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
