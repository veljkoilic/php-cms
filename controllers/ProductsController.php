<?php

namespace App\Controllers;

use App\Core\App;

class ProductsController
{
    public function index()
    {
        $products = App::get('database')->getAll("products");

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = App::get('database')->getAll("categories");
        return view('products.create', compact('categories'));
    }

    public function store()
    {
        $this->handleUpload();
        App::get('database')->addNew('products', $_POST);
        return redirect('/admin/products');
    }

    public function show()
    {
        $product = App::get('database')->getOne('products', $_GET['id']);
        $categories = App::get('database')->getAll("categories");

        return view('products.show', compact('product', 'categories'));
    }

    public function edit()
    {
        $categories = App::get('database')->getAll("categories");
        $product = App::get('database')->getOne('products', $_GET['id']);
        return view('products.create', compact('product', 'categories'));
    }

    public function update()
    {
        $this->handleUpload();
        App::get('database')->update('products', $_POST);
        return redirect('/admin/products');
    }

    public function destroy()
    {
        App::get('database')->destroy('products', $_POST['id']);
        return redirect('/admin/products');
    }

    private function handleUpload()
    {
        if($_FILES['image']['error'] != 4) {
            $newName = "images/".time()."_".$_FILES['image']['name'];
            $_POST['image'] = $newName;
            move_uploaded_file($_FILES['image']['tmp_name'], getcwd()."/storage/".$newName);
        }
    }
}