<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GuruModel;

class Guru extends BaseController
{
    protected $guruModel;
    public function __construct()
    {
        $this->guruModel = new GuruModel();
    }

    public function index()
    {
        // $locale = $this->request->getLocale();

        $d = [
            'data' => 'Guru',
            'dataguru' => $this->guruModel->getGuru()
        ];
        // dd($d);
        return view('admin/data-guru', $d);
    }

    public function tambah()
    {

        $d = [
            'data' => 'Guru',
            //'dataguru' => $this->guruModel->getGuru()
        ];
        return view('admin/tambah-guru', $d);
    }

    public function simpan()
    {

        $d = [
            'data' => 'Guru',
            'simpanan' => $this->request->getPost()
        ];
        $this->guruModel->save([
            'nip' => $this->request->getPost('nip'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'hp' => $this->request->getPost('hp'),
            'gender' => $this->request->getPost('gender')

        ]);
        session()->setFlashdata('flash', 'ditambahkan');
        return redirect()->to('/admin/data-guru');
    }

    public function hapus($nip)
    {
        $this->guruModel->where('nip', $nip)->delete();
        session()->setFlashdata('flash', 'dihapus');

        return redirect()->to('/admin/data-guru');
    }

    public function detail($nip)
    {
        $d = [
            'data' => 'Guru',
            'dataguru' => $this->guruModel->getGuru($nip)
        ];

        return view('/admin/detail-guru', $d);
    }

    // public function cek($nip)
    // {
    //     //dd($this->request->getPost());
    //     $opsi = $this->request->getPost('opsi-guru');
    //     if ($opsi == "Hapus") {
    //         $this->guruModel->where('nip', $nip)->delete();
    //         session()->setFlashdata('flash', 'dihapus');

    //         return redirect()->to('/admin/data-guru');
    //     } else if ($opsi == "Detail") {
    //         echo "Menjalankan Fungsi Detail";
    //     }
    // }



    //--------------------------------------------------------------------

}
