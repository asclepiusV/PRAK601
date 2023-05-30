<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class MahasiswaModel extends Model
{
    protected $nama = "Muhammad Ravi Himawan";
    protected $nim = "2110817310011";
    public function getnama()
    {
        return $this->nama;
    }
    public function getnim()
    {
        return $this->nim;
    }
}