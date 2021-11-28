<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Http\Requests\StorePenilaianRequest;
use App\Http\Requests\UpdatePenilaianRequest;
use App\Models\Guru;
use App\Models\Murid;
use App\Models\Pengajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [
            'action' => route("admin.management-kelas.create-process"),
            'route' => "admin.management-kelas",
            'murids' => Murid::join('kelas', 'kelas.id', '=', 'murids.id_kelas')->join('jurusans', 'jurusans.id', '=', 'murids.id_jurusan')->get(),
            'penilaians' => Penilaian::all()
        ];

        return view('guru.management-penilaian.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Penilaian $penilaian)
    {
        $credentials = $request->validate([
            "id_murid" => ['required'],
            "nilai" => ['required']
        ]);

        $profile_guru = Auth::user()->profile_guru;

        $data_guru = Guru::where('id', $profile_guru)->first();

        $id_guru = $data_guru->id;

        $data_pengajaran = Pengajaran::where('id_guru', $id_guru)->first();

        $id_pengajaran = $data_pengajaran->id;

        $data = [
            "id_murid" => $credentials['id_murid'],
            "id_pengajaran" => $id_pengajaran,
            "nilai" => $credentials['nilai']
        ];

        $penilaian->create($data);

        return redirect()->route('guru.management-penilaian')->with('pesan', 'Berhasil Tambah Nilai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePenilaianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenilaianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function show(Penilaian $penilaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function edit(Penilaian $penilaian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenilaianRequest  $request
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenilaianRequest $request, Penilaian $penilaian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penilaian $penilaian)
    {
        //
    }
}
