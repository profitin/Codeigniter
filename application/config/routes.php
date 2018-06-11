<?php
defined('BASEPATH') OR exit('No direct script access allowed');

# CREATE
$route['news/create'] = 'news/create';


# NEWS
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';

# PAGES
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
