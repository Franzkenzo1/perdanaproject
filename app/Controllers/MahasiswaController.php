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

        return view('templates/header', $data)
            . view('mahasiswa/list', $data)
            . view('templates/footer');
    }
    public function create()
    {
        $mahasiswa_model = new Mahasiswa();
        $mahasiswa = $mahasiswa_model->findall();

        $data = ['title' => "Mahasiswa", 'mahasiswa' => $mahasiswa];

        return view('templates/header', $data)
            . view('mahasiswa/create', $data)
            . view('templates/footer');
    }
    
    public function store()
    {
        if(!$this->validate([
            'NPM' => 'required|numeric',
            'Nama' => 'required',
            'Alamat' => 'required',
        ])){
            return redirect()->to('/create');
        }
        $mahasiswa_model = new Mahasiswa();
        $data = [
            'npm' => $this->request->getPost('NPM'),
            'nama' => $this->request->getPost('Nama'),
            'alamat' => $this->request->getPost('Alamat'),
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
            'title' => 'Edit Mahasiswa'
        ];

        return view('templates/header', $data)
              .view('mahasiswa/edit', $mahasiswa)
              .view('templates/footer');
    }

    public function update($id)
    {
        if(!$this->validate([
            'npm' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
        ])){
            return redirect()->to('/edit/'.$id);
        }
        $mahasiswa_model = new Mahasiswa();
        $data = [
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
        ];
        $mahasiswa_model->update($id, $data);

        return redirect()->to('/mahasiswa');
    }
}
    

