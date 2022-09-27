<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $mahasiswa_model = new Mahasiswa();
        $mahasiswa = $mahasiswa_model->findall();

        $data = ['title' => "Mahasiswa", 'mahasiswa' => $mahasiswa];

        return view('mahasiswa/list', $data);
    }
    public function create()
    {
        $mahasiswa_model = new Mahasiswa();
        $mahasiswa = $mahasiswa_model->findall();

        $data = ['title' => "Mahasiswa", 'mahasiswa' => $mahasiswa];

        return view('mahasiswa/create');
    }
    public function store()<<<<<<< HEAD
    public function store()
    {
        if(!$this->validate([
            'npm' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required'9a85c2ac5d5a6765cb4c1acced5
            return redirect()->to('/create');
        }
        $mahasiswa_model = new Mahasiswa();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];
        $mahasiswa_model->save($data);
    
        return redirect()->to('/mahasiswa');
    }
    public function delete($id)
    {
        $mahasiswa_model = new Mahasiswa();
        $mahasiswa_model->delete($id);
    
        return redirect()->to('/mahasiswa');
    }
    public function edit($id)
    {
        $mahasiswa_model = new Mahasiswa();
        $mahasiswa = $mahasiswa_model->find($id);

        $data = [
            'mahasiswa' => $mahasiswa_model->find($id),
            'title' => 'Edit Mahasiswa'
        ];

        return view('templates/header', $data)
              .view('mahasiswa/edit', $mahasiswa)
              .view('templates/footer');
        return view('mahasiswa/edit', $data);
    }
    public function update($id)
    {
        if(!$this->validate([
            'npm' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
        ])){
            return redirect()->to('/mahasiswa/edit/'.$id);
        }
        $mahasiswa_model = new Mahasiswa();
        $data = [
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ];
        $mahasiswa_model->update($id, $data);

        return redirect()->to('/mahasiswa');
    }
}
