<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['username'])) {
            redirect('login/loginForm');
        }
    }
    public function index()
    {
        $data = array(
            'reservasi' => $this->m_hotel->count_data('reservasi'),
            'customer' => $this->m_hotel->count_data('customer'),
            'kamar' => $this->m_hotel->count_data('kamar'),
            'receptionist' => $this->m_hotel->count_data('receptionist'),
            'title' => 'Atlantica Hotel | Dashboard'
        );

        if ($_SESSION['role'] == 'admin') {
            $data['root'] = 'admin';
        } else {
            $data['root'] = 'receptionist';
        }
        $this->layout->display('dashboard', $data);
    }
}
