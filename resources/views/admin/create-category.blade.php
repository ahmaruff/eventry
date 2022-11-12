@extends('layout.adminlayout')

@section('title')
    Create New Category
@endsection

@section('content')
    <div class="container-fluid mt-5 px-lg-5 px-md-3">
        <h1>Create New Category</h1>
        <form method="POST" action="/admin/categories/create">
            <div class="mb-3">
              <label for="categoryName" class="form-label">Category Name</label>
              <input type="text" class="form-control" id="categoryName" name="name">
            </div>
            <div class="mb-3">
                <label for="categorySlug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="categorySlug" name="slug">
            </div>
            <div class="mb-3">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="enabled" value="1">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Enabled?</label>
                </div> 
            </div>
            
            <button class="btn btn-primary" type="submit">Submit</button>
          </form>
    </div>
@endsection