<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Murid;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreMuridRequest;
use App\Http\Requests\UpdateMuridRequest;
use Symfony\Component\HttpFoundation\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'action' => route("admin.management-murid.create-process"),
            'route' => "admin.management-murid",
            'jurusans' => Jurusan::all(),
            'kelas' => Kelas::all(),
            'murids' => User::join('murids', 'murids.id', '=', 'users.profile_murid')->join('jurusans', 'jurusans.id', '=', 'murids.id_jurusan')->join('kelas', 'kelas.id', '=', 'murids.id_kelas')->where('role', 'murid')->get()
        ];

        return view('admin.management-murid.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Murid $murid, User $user, Request $request)
    {
        $credentials = $request->validate([
            "nis" => ["required", "unique:murids,nis"],
            "nama" => ["required"],
            "id_jurusan" => ["required"],
            "id_kelas" => ["required"],

        ]);

        $murid->create($credentials);

        $nis = $murid->where("nis", $credentials["nis"])->first();
        $id = $nis->id;

        $data = $request->validate([
            "email" => ['required', 'unique:users,email'],
            "password" => ['required', 'unique:users,password'],
        ]);

        $data["password"] = Hash::make($data["password"]);

        $data = [
            "email" => $data['email'],
            "password" => $data['password'],
            "role" => 'murid',
            "profile_murid" => $id
        ];

        $user->create($data);

        return redirect()->route("admin.management-murid")->with("pesan", "Data berhasil Ditambahkan");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMuridRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMuridRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function show(Murid $murid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function edit(Murid $murid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMuridRequest  $request
     * @param  \App\Models\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMuridRequest $request, Murid $murid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Murid $murid)
    {
        //
    }
}
