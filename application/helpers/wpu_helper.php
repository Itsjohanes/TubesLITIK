<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('Auth');

        //kalau g ada sessionnya
    } else {
        //kalau ada sessionnya
        $role = $ci->session->userdata('role');
        if ($role == 0) {
            $menu =  $_SERVER['REQUEST_URI'];
            $menu = substr($menu, 7);
            //    echo "$menu";
            $queryMenu = $ci->db->get_where('user_menu', ['role' => $role, 'menu' => $menu])->row_array();
            if ($queryMenu == null) {
                redirect('Auth/blocked');
            }
        }
    }
}
