<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class mProduk extends CI_Model
{
    function produk()
    {
        $data = $this->db->order_by('nama_produk', 'asc');
        $data = $this->db->get('produk');
        return $data->result();
    }

    function checkNamaProdukExist($nama_produk)
    {
        $this->db->where('nama_produk', $nama_produk);
        $this->db->from('produk');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function input_data($data, $produk)
    {
        $this->db->insert($produk, $data);
    }

    function delete($where, $produk)
    {
        $this->db->where($where);
        $this->db->delete($produk);
    }
    function updateProduk($where, $produk)
    {
        return $this->db->get_where($produk, $where);
    }
    function saveUpdate($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
