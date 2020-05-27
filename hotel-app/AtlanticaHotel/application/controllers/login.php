<?php
class Login extends CI_Controller
{
    public function loginForm()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('loginForm');
        } else {
            $data = array(
                'username' => $_POST['username'],
                'password' => md5($_POST['password'])
            );
            if (isset($_POST['cekAdmin'])) {
                $cek = $this->m_hotel->fetch_where('super_admin', $data);
                if ($cek->num_rows() > 0) {
                    foreach ($cek->result() as $row) {
                        $_SESSION['username'] = $row->username;
                        $_SESSION['nama'] = $row->nama_admin;
                        $_SESSION['role'] = 'admin';
                    }
                    redirect(base_url('dashboard'));
                } else {
                    redirect(base_url('login/loginForm'));
                }
            } else {
                $cek = $this->m_hotel->fetch_where('receptionist', $data);
                if ($cek->num_rows() > 0) {
                    foreach ($cek->result() as $row) {
                        $_SESSION['username'] = $row->username;
                        $_SESSION['nama'] = $row->nama_recept;
                        $_SESSION['role'] = 'receptionist';
                    }
                    redirect(base_url('dashboard'));
                } else {
                    redirect(base_url('login/loginForm'));
                }
            }
        }
    }

    public function logout()
    {
        session_destroy();
        redirect(base_url('dashboard'));
    }
}
