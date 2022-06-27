<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dynamic_model extends CI_Model
{
    public function getDataProv()
    {
        return $this->db->get('wilayah_provinsi')->result_array();
    }

    public function getDatakabupaten($idprov)
    {
        return $this->db->get_where('wilayah_kabupaten', ['provinsi_id' => $idprov])->result();
    }

    public function getDatakecamatan($idkab)
    {
        return $this->db->get_where('wilayah_kecamatan', ['kabupaten_id' => $idkab])->result();
    }

    public function getDataDesa($idkec)
    {
        return $this->db->get_where('wilayah_desa', ['kecamatan_id' => $idkec])->result();
    }
}
