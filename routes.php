<?php

$router->get('', 'PagesController@home');
$router->get('about-us', 'PagesController@aboutUs');
$router->get('contact', 'PagesController@contact');
$router->get('products', 'PagesController@products');

$router->post('task/add', 'PagesController@storeTask');

$router->get('admin/login', "Authenticate@login");
$router->get('admin/signup', "Authenticate@signup");
$router->post('admin/createuser', "Authenticate@createuser");
$router->post('admin/validate', "Authenticate@validate");
$router->get('admin/logout', "Authenticate@logout", true);



$router->get('admin/products', "ProductsController@index", true);
$router->get('admin/products/create', "ProductsController@create", true);
$router->post('admin/products', "ProductsController@store", true);
$router->get('admin/products/show', "ProductsController@show", true);
$router->get('admin/products/edit', "ProductsController@edit", true);
$router->post('admin/products/update', "ProductsController@update", true);
$router->post('admin/products/destroy', "ProductsController@destroy", true);



