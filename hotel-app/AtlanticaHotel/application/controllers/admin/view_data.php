<?php
class View_data extends CI_Controller
{
    public function data_reservasi()
    {
        $data = array(
            'row_reservasi' => $this->m_hotel->fetch('view_reservasi_full'),
            'page' => 'Data Reservasi',
            'title' => 'Atlantica Hotel | Reservasi'
        );

        $this->layout->display('admin/view_data/reservasi', $data);
    }

    public function detail_reservasi()
    {
        $id = array(
            'id_reservasi' => $this->uri->segment(4)
        );
        $data = array(
            'row_reservasi' => $this->m_hotel->fetch_where('view_reservasi_full', $id),
            'page' => 'Detail Reservasi ',
            'title' => 'Atlantica Hotel | Detail Reservasi',
            'id' => $id['id_reservasi']
        );

        $this->layout->display('admin/view_data/detail_reservasi', $data);
    }
}
