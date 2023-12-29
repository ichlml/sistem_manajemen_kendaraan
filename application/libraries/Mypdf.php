<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('assets/dompdf/autoload.inc.php');
use Dompdf\Dompdf;

class Mypdf
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function generate($view, $data = array(), $filename = 'Berita Acara', $paper = 'F4', $orentation='potrait')
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper($paper, $orentation);

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream($filename.".pdf", array("Attachment" => FALSE));
    }

    public function Kapem($view, $data = array(), $filename = 'Kartu Pemeliharaan Kendaraan', $paper = 'F4', $orentation='potrait')
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper($paper, $orentation);

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream($filename.".pdf", array("Attachment" => FALSE));
    }
    public function Pemeliharaan($view, $data = array(), $filename = 'Daftar Pemeliharaan Kendaraan Dinas', $paper = 'F4', $orentation='landscape')
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper($paper, $orentation);

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream($filename.".pdf", array("Attachment" => FALSE));
    }

    public function generate2($view, $data = array(), $filename = 'Daftar Kendaraan Dinas', $paper = 'F4', $orentation='landscape')
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper($paper, $orentation);

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream($filename.".pdf", array("Attachment" => FALSE));
    }

    public function generate3($view, $data = array(), $filename = 'Daftar Pajak Jatuh Tempo', $paper = 'F4', $orentation='landscape')
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper($paper, $orentation);

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream($filename.".pdf", array("Attachment" => FALSE));
    }
}