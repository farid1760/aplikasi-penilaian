<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'action' => route("admin.management-guru.create-process"),
            'gurus' => User::join('gurus', 'gurus.id', '=', 'users.profile_guru')->where('role', 'guru')->get(),
            'route' => "admin.management-guru"
        ];

        return view('admin.management-guru.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Guru $guru, User $user)
    {
        $credentials = $request->validate([
            "nip" => ["required", "unique:gurus,nip"],
            "nama" => ["required"],

        ]);

        $guru->create($credentials);

        $nip = $guru->where("nip", $credentials["nip"])->first();
        $id = $nip->id;

        $data = $request->validate([
            "email" => ['required', 'unique:users,email'],
            "password" => ['required', 'unique:users,password'],
        ]);

        $data["password"] = Hash::make($data["password"]);

        $data = [
            "email" => $data['email'],
            "password" => $data['password'],
            "role" => 'guru',
            "profile_guru" => $id
        ];

        $user->create($data);

        return redirect()->route("admin.management-guru")->with("pesan", "Data berhasil Ditambahkan");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGuruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGuruRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuruRequest  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuruRequest $request, Guru $guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        //
    }
}
