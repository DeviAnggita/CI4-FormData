<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function __construct()
    {
        $this->mhsModel = new MahasiswaModel();
        // $this->$table = new \CodeIgniter\view\Table();
        // helper(['form', 'url']);
    }

    public function index()
    {
        //$mhs = $this->mhsModel->findAll();
        $mhs = $this->mhsModel->getMhs();
        $data = ['mhs' => $mhs];
        echo view('Mahasiswa/listMhs', $data);
    }

    public function detail($username)
    {
        $mhs = $this->mhsModel->getMhs($username);
        $data['mhs']=$mhs;
        echo view('Mahasiswa/detailMahasiswa', $data);
    }

    public function add()
    {
        $data = array(
            'username'  => $this->request->getPost('username'),
            'password'  => $this->request->getPost('password'),
            'email'     => $this->request->getPost('email'),
            'kota'      => $this->request->getPost('kota')
        );
        $this->mhsModel->saveMhs($data);
        echo '<script>
                alert("Sukses Tambah data");
                window.location="' . base_url('Mahasiswa') . '"
              </script>';
    }

    public function input()
    {
        helper(['form', 'url']);

        $periksa = $this->validate(
            [
                'username' => ['label' => 'Username', 'rules' => 'required|max_length[10]'],
                'password' => ['label' => 'Password', 'rules' => 'required|min_length[3]'],
                'passconf' => ['label' => 'Passconf', 'rules' => 'required|matches[password]'],
                'email'    => ['label' => 'email', 'rules' => 'required|valid_email'],
            ],
            [
                'username' => ['required'    => 'Anda harus mengisi Username',],
                'email'    => ['valid_email' => 'Email anda tidak valid',],
            ]
        );

        if (!$periksa) {
            echo view('Mahasiswa/Signup', [
                'validation' => $this->validator,
            ]);
        } else {
            $this->add();
            echo view('Mahasiswa/Success');
        }
    }
}
