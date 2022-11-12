<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function createCategoryGet()
    {
        return view('admin.create-category');
    }

    public function createCategoryPost(Request $req)
    {
        $data =[
            'name' => $req->input('name'),
            'slug' => $req->input('slug'),
            'enabled' => $req->input('enabled')
        ];
        $categories = new Category();
        $categories::create($data);

        return redirect('/admin/categories/create');
    }
}
