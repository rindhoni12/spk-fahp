<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Perankingan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_login");
        $this->load->library('fahp_perhitungan');
    }

    // public function index()
    // {
    //     $data["tbl_nilai"] = $this->m_nilai->getAll();
        
    //     $this->load->view("admin/nilai/v_daftar", $data);
    // }

    public function nilai_akhir()
    {
        $data["tbl_bobot"] = $this->fahp_perhitungan->hitung_ternormalisasi();
        $data["tbl_nilaiakhir"] = $this->fahp_perhitungan->getAllNilai();

        
        
        
        
        
        // print_r($arr_nilai);
        // // echo "<br>";
        // //print_r($nil_w);
        
        // //print_r($kode_bobot);
        // print_r($kod_alt);
        // print_r($nb);
        // print_r(COUNT($arr_nilai[0]));

        


        // print_r($data["tbl_nilaiakhir"][0]);
        //print_r($data["tbl_nilaiakhir"]);

        //print_r($data["tbl_bobot"]);

        $this->load->view("operator/perankingan/v_nilaiakhir", $data);

        // $data['tbl_bobot'] = $this->fahp_perhitungan->hitung_ternormalisasi();
        // $data["tbl_nilai"] = $this->fahp_perhitungan->getAllAlternatif();


        // print_r($data['tbl_nilai']);
        // $this->load->view("admin/ranking/v_ranking", $data);
    }

    public function bobot_akhir()
    {
        $data["tbl_bobot"] = $this->fahp_perhitungan->hitung_ternormalisasi();
        $data["tbl_nilaiakhir"] = $this->fahp_perhitungan->getAllNilai();
        // $i=0;
        // foreach($data["tbl_nilaiakhir"] as $row)
        // { 
        //     $kode[$i] = $row->kode_alternatif;    
        //     $arr_nilai[$i] = (explode (',', $row->nilai));
        //     $i++;
        // }

        // $j=0;
        // foreach($data["tbl_bobot"] as $row)
        // { 
        //     $kode_w[$j] = $row->id_w; 
        //     $nil_w[$j] = $row->nilai_w;
        //     $j++;
        // }

        // $x=0;
        // while($x<COUNT($arr_nilai))
        // {
        //     // $kod_alt = "A'.$x.'";
        //     $y=0;
        //     while($y<COUNT($arr_nilai[0]))
        //     {
        //         // $kode_bobot = $x+1;
        //         $nb[$x] += $arr_nilai[$x][$y]*$nil_w[$y];
        //         $y++;
        //     }
        // $x++;
        // }
        $this->load->view("operator/perankingan/v_bobotakhir", $data);
    }

    public function hasil_ranking()
    {
        $data["tbl_bobot"] = $this->fahp_perhitungan->hitung_ternormalisasi();
        $data["tbl_nilaiakhir"] = $this->fahp_perhitungan->getAllNilai();
        $this->load->view("operator/perankingan/v_hasilranking", $data);
    }

}
