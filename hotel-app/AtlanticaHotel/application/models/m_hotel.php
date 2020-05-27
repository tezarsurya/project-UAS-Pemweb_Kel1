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
}
