<?php
class M_hotel extends CI_Model
{
    public function fetch($table)
    {
        return $this->db->get($table);
    }

    public function fetch_where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function count_data($table)
    {
        return $this->db->get($table)->num_rows();
    }

    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function fetch_kamar($where)
    {
        return $this->db->query("SELECT * FROM kamar WHERE no_kamar LIKE '$where[no_kamar]%'");
    }

    public function delete($table, $where)
    {
        return $this->db->delete($table, $where);
    }

    public function update($table, $data, $where)
    {
        return $this->db->update($table, $data, $where);
    }

    public function insert_kamar($data)
    {
        return $this->db->query("INSERT INTO kamar VALUES ('','$data[lantai]" . "$data[no_kamar]','$data[tipe_bed]','$data[tipe_kamar]','False','$data[harga]')");
    }

    public function update_kamar($data)
    {
        return $this->db->query("UPDATE kamar SET `tipe_bed` = '$data[tipe_bed]', `tipe_kamar` = '$data[tipe_kamar]', `harga` = $data[harga] WHERE `no_kamar` = '$data[id]'");
    }
}
