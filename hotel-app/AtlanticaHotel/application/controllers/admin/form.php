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
        $data = array(
            'page' => 'Tambah Data Kamar',
            'title' => $this->title . 'Form Kamar',
            'root' => $this->main_data['root']
        );
        $this->layout->display('admin/form/formKamar', $data);
    }
}
