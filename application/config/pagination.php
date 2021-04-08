<?php
defined('BASEPATH') or exit('No direct script access allowed');


//pembuka containernya
$config['full_tag_open'] = '<nav> <ul class="justify-content-center pagination">';
//penutup containernya
$config['full_tag_close'] = '</ul></nav>';

//pembuka untuk first page
$config['first_tag_open'] = '<li class="page-item">';
//penutup untuk first page
$config['first_tag_close'] = '</li>';

//pembuka untuk last page
$config['last_tag_open'] = '<li class="page-item">';
//penutup untuk last page
$config['last_tag_close'] = '</li>';

//next link
$config['next_link'] = '&raquo';
//pembuka untuk next-link
$config['next_tag_open'] = '<li class="page-item">';
//penutup untuk next-link
$config['next_tag_close'] = '</li>';

//previous link
$config['prev_link'] = '&laquo';
//pembuka untuk previos-link
$config['prev_tag_open'] = '<li class="page-item">';
//penutup untuk previos-link
$config['prev_tag_close'] = '</li>';

//pembuka untuk halaman saat ini
$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
//penutup untuk halaman saat ini
$config['cur_tag_close'] = '</a></li>';

//pembuka untuk nomor2nya
$config['num_tag_open'] = '<li class="page-item">';
//penutup untuk nomor2nya
$config['num_tag_close'] = '</li>';

// atribut tambahan untuk setiap anchornya.
$config['attributes'] = ['class' => 'page-link'];

$config['per_page'] = 4;