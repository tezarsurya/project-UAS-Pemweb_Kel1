<?php
class Form extends CI_Controller
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

    public function form_kamar()
    {
        $this->form_validation->set_rules('no_kamar', 'Nomor Kamar', 'trim|required');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => $this->title . 'Form Kamar',
                'root' => $this->main_data['root']
            );

            if ($this->uri->segment(4) !== NULL) {
                $id = array(
                    'no_kamar' => $this->uri->segment(4)
                );

                $data['page'] = 'Edit Data Kamar ';
                $data['row_kamar'] = $this->m_hotel->fetch_where('kamar', $id);
                $data['id'] = $id['no_kamar'];
                $this->layout->display('admin/form/formKamar', $data);
            } else {
                $data['page'] = 'Tambah Data Kamar';
                $this->layout->display('admin/form/formKamar', $data);
            }
        } else {
            $data = array(
                'lantai' => $_POST['lantai'],
                'no_kamar' => $_POST['no_kamar'],
                'tipe_bed' => $_POST['tipe_bed'],
                'tipe_kamar' => $_POST['tipe_kamar'],
                'harga' => $_POST['harga']
            );

            if ($this->uri->segment(4) !== NULL) {
                $data['id'] = $this->uri->segment(4);
                $this->m_hotel->update_kamar($data);
                redirect(base_url('admin/view_data/data_kamar'));
            } else {
                $this->m_hotel->insert_kamar($data);
                redirect(base_url('admin/view_data/data_kamar'));
            }
        }
    }

    public function form_recept()
    {
        $this->form_validation->set_rules('kode_recept', 'Kode Resepsionis', 'trim|required');
        $this->form_validation->set_rules('nama_recept', 'Nama Resepsionis', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => $this->title . "Form Resepsionis",
                'root' => $this->main_data['root']
            );

            if ($this->uri->segment(4) !== NULL) {
                $id = array(
                    'kode_recept' => $this->uri->segment(4)
                );

                $data['page'] = 'Edit Data Resepsionis ';
                $data['row_recept'] = $this->m_hotel->fetch_where('receptionist', $id);
                $data['anchor'] = base_url('admin/view_data/detail_recept/' . $id['kode_recept']);
                $data['id'] = $id['kode_recept'];
                $this->layout->display('admin/form/formRecept', $data);
            } else {
                $data['page'] = 'Tambah Data Resepsionis ';
                $this->layout->display('admin/form/formRecept', $data);
            }
        } else {

            if ($this->uri->segment(4) !== NULL) {
                $data = array(
                    'username' => $_POST['username'],
                    'password' => base64_encode($_POST['password']),
                    'nama_recept' => $_POST['nama_recept'],
                    'tmp_lahir' => $_POST['tmp_lahir'],
                    'tgl_lahir' => $_POST['tgl_lahir'],
                    'jenis_kelamin' => $_POST['jenis_kelamin'],
                    'alamat' => $_POST['alamat'],
                    'no_telp' => $_POST['no_telp']
                );
                $id = array(
                    'kode_recept' => $this->uri->segment(4)
                );
                $this->m_hotel->update('receptionist', $data, $id);
                redirect(base_url('admin/view_data/detail_recept/' . $id['kode_recept']));
            } else {
                $data = array(
                    'id_recept' => '""',
                    'username' => $_POST['username'],
                    'password' => base64_encode($_POST['password']),
                    'kode_recept' => $_POST['kode_recept'],
                    'nama_recept' => $_POST['nama_recept'],
                    'tmp_lahir' => $_POST['tmp_lahir'],
                    'tgl_lahir' => $_POST['tgl_lahir'],
                    'jenis_kelamin' => $_POST['jenis_kelamin'],
                    'alamat' => $_POST['alamat'],
                    'no_telp' => $_POST['no_telp']
                );
                $this->m_hotel->insert('receptionist', $data);
                redirect(base_url('admin/view_data/data_recept'));
            }
        }
    }
}
