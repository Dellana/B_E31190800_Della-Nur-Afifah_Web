<?php
class mahasiswa_model extends CI_Model {
  public function get_data(){
    $data_mahasiswa = [
        ['Nama'=>'Della','Prodi'=>'TIF'],
        ['Nama'=>'Nur','Prodi'=>'MIF'],
        ['Nama'=>'Afifah','Prodi'=>'TKK']
      ];
    return $data_mahasiswa;
  }
} 