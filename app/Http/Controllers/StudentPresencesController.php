<?php

namespace App\Http\Controllers;

use DB;
use App\StudentPresence;
use Illuminate\Http\Request;

class StudentPresencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa/presensi/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('presences')->insert([
            'nama_siswa' => $request->nama_siswa,
            'status' => $request->status,
            'created_at'=>$request->created_at
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('materi/index')->with('status', 'Presensi Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentPresence  $studentPresence
     * @return \Illuminate\Http\Response
     */
    public function show(StudentPresence $studentPresence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentPresence  $studentPresence
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentPresence $studentPresence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentPresence  $studentPresence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentPresence $studentPresence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentPresence  $studentPresence
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentPresence $studentPresence)
    {
        //
    }
}
