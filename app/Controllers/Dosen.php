<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modeldosen;

class Dosen extends BaseController
{
    public function index()
    {
        $dosenModel = new Modeldosen();
        $tampildatadsn = $dosenModel->findAll();

        $data = [
            'datadosen' => $tampildatadsn
        ];

        return view('dosen/datadsnview', $data);
    }

    public function tambahdatadsn()
    {
        return view('dosen/tambahdsnview');
    }

    public function simpandatadsn()
    {
        $model = new Modeldosen();
        $data = [
            'dsnnim' => $this->request->getPost('dsnnim'),
            'dsnnama' => $this->request->getPost('dsnnama'),
            'dsntanggallahir' => $this->request->getPost('dsntanggallahir'),
            'dsnjeniskelamin' => $this->request->getPost('dsnjeniskelamin'),
            'dsntempatlahir' => $this->request->getPost('dsntempatlahir'),
            'dsnalamat' => $this->request->getPost('dsnalamat'),
            'dsntelp' => $this->request->getPost('dsntelp')
        ];

        $model->saveDosen($data);

        session()->setFlashdata('pesan', 'Sukses menambahkan data');
        return redirect()->to(base_url('dosen'));
    }

    public function editdsn($dsnnim = null)
    {
        if ($dsnnim === null) {
            // Handle ketika parameter $dsnnim tidak diberikan
            // Misalnya, tampilkan pesan error atau redirect ke halaman lain
        }
    
        $model = new Modeldosen();
        $selectdsn = $model->getDosen($dsnnim);
    
        if ($selectdsn !== null) {
            $data = [
                'dosen' => $selectdsn
            ];
    
            return view('dosen/editdatadosenview', $data);
        } else {
            echo '<script>
                alert("Data Dosen dengan NIM ' . $dsnnim . ' Tidak Ditemukan");
                window.location="' . base_url('dosen') . '"
                </script>';
        }
    }
    


    public function updatedsn()
    {
        $dosenModel = new Modeldosen();

        $data = [
            'dsnnama' => $this->request->getPost('dsnnama'),
            'dsntempatlahir' => $this->request->getPost('dsntempatlahir'),
            'dsntanggallahir' => $this->request->getPost('dsntanggallahir'),
            'dsnjeniskelamin' => $this->request->getPost('dsnjeniskelamin'),
            'dsnalamat' => $this->request->getPost('dsnalamat'),
            'dsntelp' => $this->request->getPost('dsntelp'),
        ];

        $dosenModel->editDosen($data, $this->request->getPost('dsnnim'));

        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to('/dosen/datadsn');
    }

    public function hapusdsn($dsnnim)
    {
        $model = new Modeldosen();
        $selectdsn = $model->getDosen($dsnnim);

        if ($selectdsn !== null) {
            $model->hapusDosen($dsnnim);
            session()->setFlashdata('pesan', 'Data berhasil dihapus');
        } else {
            session()->setFlashdata('pesan', 'Hapus gagal, Data Dosen dengan NIM ' . $dsnnim . ' tidak ditemukan');
        }

        return redirect()->to('dosen');
    }
}
