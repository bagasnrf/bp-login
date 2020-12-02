<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }


    public function index($id = 0)
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        switch ($this->input->post('type')) {
            case 'add':
                $this->form_validation->set_rules('menu', 'Menu', 'required');
                if ($this->form_validation->run()) {
                    $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
                    $this->session->set_flashdata('newmenu', 'New Menu');
                    redirect('menu');
                }

            case 'edit':
                $this->form_validation->set_rules('editMenu', 'Menu', 'required');
                if ($this->form_validation->run()) {
                    $datasssss = ['menu' => $this->input->post('editMenu')];
                    $this->db->where('id', $this->input->post('editMenuId'));
                    $this->db->update('user_menu', $datasssss);
                    $this->session->set_flashdata('editM', 'updated');
                    redirect('menu');
                }
            default:
                if ($id == 0) {
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('menu/index', $data);
                    $this->load->view('templates/footer');
                } else {
                    $this->db->where('id', $id);
                    $this->db->delete('user_menu');
                    $this->session->set_flashdata('deleteM', 'deleted');
                    redirect('menu');
                }
        }
    }

    public function submenu($id = 0)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Submenu Management';
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();


        switch ($this->input->post('type')) {
            case 'add':
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('menu', 'Menu', 'required');
                $this->form_validation->set_rules('url', 'URL', 'required');
                $this->form_validation->set_rules('icon', 'Icon', 'required');
                if ($this->form_validation->run()) {
                    $data = [
                        'title' => $this->input->post('title'),
                        'menu_id' => $this->input->post('menu'),
                        'icon' => $this->input->post('icon'),
                        'is_active' => $this->input->post('is_active')
                    ];
                    $this->db->insert('user_sub_menu', $data);
                    $this->session->set_flashdata('newSubMenu', 'New Sub Menu');
                    redirect('menu/submenu');
                }

            case 'edit':
                $this->form_validation->set_rules('editMenu', 'Menu', 'required');
                if ($this->form_validation->run()) {
                    $datasssss = ['menu' => $this->input->post('editMenu')];
                    $this->db->where('id', $this->input->post('editMenuId'));
                    $this->db->update('user_menu', $datasssss);
                    $this->session->set_flashdata('editM', 'updated');
                    redirect('menu');
                }
            default:
                if ($id == 0) {
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('menu/submenu', $data);
                    $this->load->view('templates/footer');
                } else {
                    $this->db->where('id', $id);
                    $this->db->delete('user_menu');
                    $this->session->set_flashdata('deleteM', 'deleted');
                    redirect('menu');
                }
        }
    }
}
