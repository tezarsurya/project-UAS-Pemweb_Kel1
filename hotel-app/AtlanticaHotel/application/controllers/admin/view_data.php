<?php
class View_data extends CI_Controller
{
    public $main_data;
    public $title = 'Atlantica Hotel | ';
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['username'])) {
            redirect(base_url('login/loginForm'));
        } elseif ($_SESSION['role'] != 'admin') {
            redirect(base_url('dashboard'));
        }

        if ($_SESSION['role'] == 'admin') {
            $this->main_data['root'] = 'admin';
        } else {
            $this->main_data['root'] = 'receptionist';
        }
    }
    public function data_reservasi()
    {
        $data = array(
            'row_reservasi' => $this->m_hotel->fetch('view_reservasi_full'),
            'page' => 'Data Reservasi',
            'title' => $this->title . 'Reservasi',
            'root' => $this->main_data['root']
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
            'title' => $this->title . 'Detail Reservasi',
            'id' => $id['id_reservasi'],
            'root' => $this->main_data['root']
        );

        $this->layout->display('admin/view_data/detail_reservasi', $data);
    }

    public function riwayat_reservasi()
    {
        $data = array(
            'row_reservasi' => $this->m_hotel->fetch('history_reservasi'),
            'page' => 'Riwayat Reservasi',
            'title' => $this->title . 'Riwayat Reservasi',
            'root' => $this->main_data['root']
        );

        $this->layout->display('admin/view_data/riwayat_reservasi', $data);
    }

    public function data_customer()
    {
        $data = array(
            'row_customer' => $this->m_hotel->fetch('customer'),
            'page' => 'Data Pengunjung',
            'title' => $this->title . 'Pengunjung',
            'root' => $this->main_data['root']
        );

        $this->layout->display('admin/view_data/customer', $data);
    }

    public function detail_customer()
    {
        $id = array(
            'kode_customer' => $this->uri->segment(4)
        );

        $data = array(
            'row_customer' => $this->m_hotel->fetch_where('customer', $id),
            'row_reservasi' => $this->m_hotel->fetch_where('view_reservasi_full', $id),
            'page' => 'Detail Pengunjung ',
            'title' => $this->title . 'Detail Pengunjung',
            'id' => $id['kode_customer'],
            'root' => $this->main_data['root']
        );

        $this->layout->display('admin/view_data/detail_customer', $data);
    }

    public function data_kamar()
    {
        if ($this->uri->segment(4) !== NULL) {
            $id = array(
                'no_kamar' => $this->uri->segment(4)
            );

            $data = array(
                'row_kamar' => $this->m_hotel->fetch_kamar($id),
                'page' => 'Data Kamar ',
                'title' => $this->title . 'Kamar',
                'root' => $this->main_data['root'],
                'id' => $id['no_kamar']
            );

            if ($this->uri->segment(5) == 'delete_failed') {
                $data['pesan_kamar'] = TRUE;
            }

            $this->layout->display('admin/view_data/kamar', $data);
        } else {
            $data = array(
                'row_kamar' => $this->m_hotel->fetch('kamar'),
                'page' => 'Data Kamar ',
                'title' => $this->title . 'Kamar',
                'root' => $this->main_data['root']
            );

            $this->layout->display('admin/view_data/kamar', $data);
        }
    }

    public function data_recept()
    {
        $data = array(
            'row_recept' => $this->m_hotel->fetch('receptionist'),
            'page' => 'Data Resepsionis',
            'title' => $this->title . 'Resepsionis',
            'root' => $this->main_data['root']
        );

        $this->layout->display('admin/view_data/receptionist', $data);
    }

    public function detail_recept()
    {
        $id = array(
            'kode_recept' => $this->uri->segment(4)
        );

        $data = array(
            'row_recept' => $this->m_hotel->fetch_where('receptionist', $id),
            'page' => 'Detail Resepsionis ',
            'title' => $this->title . 'Detail Resepsionis',
            'root' => $this->main_data['root'],
            'id' => $id['kode_recept']
        );

        if ($this->uri->segment(5) !== NULL) {
            $data['pesan_recept'] = TRUE;
        }

        $this->layout->display('admin/view_data/detail_recept', $data);
    }

    public function delete_recept()
    {
        $data = array(
            'status_reservasi' => 'Aktif',
            'kode_recept' => $this->uri->segment(4)
        );

        $id = array(
            'kode_recept' => $this->uri->segment(4)
        );

        $cek_recept = $this->m_hotel->fetch_where('view_reservasi_full', $data)->num_rows();

        if ($cek_recept > 0) {
            redirect(base_url('admin/view_data/detail_recept/' . $data['kode_recept'] . '/delete_failed'));
        } else {
            $this->m_hotel->delete('receptionist', $id);
            redirect(base_url('admin/view_data/data_recept'));
        }
    }

    public function delete_kamar()
    {
        $data = array(
            'status_reservasi' => 'Aktif',
            'no_kamar' => $this->uri->segment(4)
        );

        $id = array(
            'no_kamar' => $this->uri->segment(4)
        );

        $cek_kamar = $this->m_hotel->fetch_where('view_reservasi_full', $data)->num_rows();

        if ($cek_kamar > 0) {
            redirect(base_url('admin/view_data/data_kamar/' . substr($data['no_kamar'], 0, 1) . '/delete_failed'));
        } else {
            $this->m_hotel->delete('kamar', $id);
            redirect(base_url('admin/view_data/data_kamar'));
        }
    }
}
