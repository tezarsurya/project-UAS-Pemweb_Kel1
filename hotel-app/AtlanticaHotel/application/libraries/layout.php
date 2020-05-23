<?php
class Layout
{
    protected $_ci;

    function __construct()
    {
        $this->_ci = &get_instance();
    }

    function display($layout, $data = null)
    {
        $data['_content'] = $this->_ci->load->view($layout, $data, true);
        $this->_ci->load->view('template/layout', $data);
    }
}
