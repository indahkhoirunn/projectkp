<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::latest()->paginate(5);
        return view('users.index',compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'nama_pengguna' => 'required',
            'tanggallahir_pengguna' => 'required',
            'email_pengguna' => 'required',
            'alamat_pengguna' => 'required',
            'password' => 'required',
            'id_status' 
        ]);
        $users = new users([
            'nama_pengguna' => $request->get('nama_pengguna'),
            'tanggallahir_pengguna' => $request->get('tanggallahir_pengguna'),
            'email_pengguna' => $request->get('email_pengguna'),
            'alamat_pengguna' => $request->get('alamat_pengguna'),
            'password' => $request->get('password'),
            'id_status' => $request->get('id_status')
        ]);
        $users->save();
        return redirect()->route('users.index')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //return view('users.show',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = users::find($id);
        return view('users.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pengguna' => 'required',
            'tanggallahir_pengguna' => 'required',
            'email_pengguna' => 'required',
            'alamat_pengguna' => 'required',
            'password' => 'required',
            'id_status' => 'required',
            
        ]);
        $users = users::find($id);
        $users->nama_pengguna =  $request->get('nama_pengguna');
        $users->tanggallahir_pengguna =  $request->get('tanggallahir_pengguna');
        $users->email_pengguna =  $request->get('email_pengguna');
        $users->alamat_pengguna =  $request->get('alamat_pengguna');
        $users->password =  $request->get('password');
        $users->id_status =  $request->get('id_status');
        $users->save();

        return redirect()->route('users.index')->with('success','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = users::find($id);
        $users->delete();
        return redirect()->route('users.index')->with('success','data berhasil dihapus');
    }
}
