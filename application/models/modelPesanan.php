<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelPesanan extends CI_Model {

    public function addPesanan($data)
    {
        $this->db->insert('pesanan', $data);
    }

    public function getAllPesanan()
    {
        $this->db->order_by('tanggalPesanan', 'DESC');
        return $this->db->get('pesanan')->result();
    }

    public function selesaikanPesanan($idPesanan, $data)
    {
        $this->db->where('idPesanan', $idPesanan);
        $this->db->update('pesanan', $data);
    }
}