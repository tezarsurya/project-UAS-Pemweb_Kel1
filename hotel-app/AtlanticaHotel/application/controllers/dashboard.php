<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data = array(
            'reservasi' => $this->m_hotel->count_data('reservasi'),
            'customer' => $this->m_hotel->count_data('customer'),
            'kamar' => $this->m_hotel->count_data('kamar'),
            'receptionist' => $this->m_hotel->count_data('receptionist'),
            'title' => 'Atlantica Hotel | Dashboard'
        );
        $this->layout->display('dashboard', $data);
    }
}
