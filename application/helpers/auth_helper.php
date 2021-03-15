<?php
function logged_in()
{
    $ci = get_instance();
    if ($ci->session->userdata('id')) {
        return true;
    } else {
        return false;
    }
}
