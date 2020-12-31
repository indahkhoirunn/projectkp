<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
    	'nama_pengguna', 'tanggallahir_pengguna', 'email_pengguna', 'alamat_pengguna', 'password' , 'id_status'
    ];
}
