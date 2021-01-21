<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SiswaModel;

class Siswa extends BaseController
{
    protected $siswaModel;
    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
    }
    public function index()
    {
        $d = [
            'data' => 'Siswa',
            'datasiswa' => $this->siswaModel->getSiswa()
        ];
        // dd($d);
        return view('admin/data-siswa', $d);
    }

    public function print()
    {
        $d = [
            'data' => 'Siswa',
            'datasiswa' => $this->siswaModel->getSiswa()
        ];

        //TCPDF
        $tcpdf = new \TCPDF('L', PDF_UNIT, 'A5', true, 'UTF-8', false);

        $tcpdf->SetCreator(PDF_CREATOR);
        $tcpdf->SetAuthor('Wahyu Widodo');
        $tcpdf->SetTitle('Data Siswa');
        $tcpdf->SetSubject('Contoh data siswa');

        $tcpdf->setPrintHeader(false);
        $tcpdf->setPrintFooter(false);

        $tcpdf->addPage();

        $html = view('admin/print-siswa', $d);

        // Ambil data print
        $tcpdf->writeHTML($html, true, false, true, false, '');
        // Tipe file
        $this->response->setContentType('application/pdf');
        // Nama file
        $tcpdf->Output('data-siswax.pdf', 'I');

        //Simple DomPDF
        // $dompdf = new \Dompdf\Dompdf();
        // $dompdf->loadHtml(view('admin/print-siswa', $d));
        // $dompdf->setPaper('A4', 'Landscape');
        // $dompdf->render();
        // $dompdf->stream();

        // dd($d);
        // return view('admin/data-siswa', $d);
    }

    //--------------------------------------------------------------------

}
