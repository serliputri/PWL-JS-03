<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Mahasiswa extends Model //Definisi Model
{
    protected $table="mahasiswas"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas 
    public $timestamps= false;
    protected $primaryKey = 'nim'; // Memanggil isi DB Dengan primarykey

        /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
    'nim',
    'nama',
    'tanggal_lahir',
    'kelas',
    'jurusan',
    'email',
    'noHp',
    ];
};
