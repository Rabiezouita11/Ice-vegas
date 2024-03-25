@extends('Admin.layouts.index')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              <h3 class="card-title">Liste des catégories</h3>
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addCategoryModal">
            Add Categorie
        </button>
              </div>
              <!-- /.card-header -->
              @if(session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif
              <div class="card-body">
                
              <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom catégorie</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($categories->isEmpty())
            <tr>
            <td colspan="4" class="text-center">No categories found.</td>
            </tr>
        @else
        @foreach($categories as $index => $category)
                    <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->Nom }}</td>
                <td><img src="{{ asset($category->Image) }}" alt="{{ $category->Nom }}" class="img-fluid rounded-circle" style="max-width: 60px ; max-height: 60px;"></td>

                <td>
    <!-- Edit Button with Icon -->
    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editCategoryModal_{{ $index }}">
        <i class="fas fa-edit"></i>
    </button>
    <!-- Delete Button with Icon -->
    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteCategoryModal_{{ $index }}">
        <i class="fas fa-trash"></i>
    </button>
</td>

            </tr>
            @endforeach
        @endif
    </tbody>
</table>


              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
        {{ $categories->links('vendor.pagination.bootstrap-4') }}
          </div>
            </div>
            <!-- /.card -->

          
            <!-- /.card -->
          </div>
          <!-- /.col -->
         
          <!-- /.col -->
        </div>
        <!-- /.row -->
       
        <!-- /.row -->
    
        <!-- /.row -->
       
        <!-- /.row -->
       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Add Category Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Display validation errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form for adding a category -->
                <form action="{{ route('storeCategorie') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="categoryName">Nom catégorie</label>
                        <input type="text" class="form-control" id="categoryName" name="Nom" required>
                    </div>
                    <div class="form-group">
                        <label for="categoryImage">Image</label>
                        <input type="file" class="form-control-file" id="categoryImage" name="Image" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Category Modal -->
<!-- Edit Category Modals -->
@foreach($categories as $index => $category)
<div class="modal fade" id="editCategoryModal_{{ $index }}" aria-labelledby="editCategoryModalLabel_{{ $index }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCategoryModalLabel_{{ $index }}">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for editing a category -->
                <form action="{{ route('categories.update', $category->id) }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="editCategoryName">Nom catégorie</label>
                        <input type="text" class="form-control" id="editCategoryName" name="Nom" value="{{ $category->Nom }}" required>
                    </div>
                    <div class="form-group">
                        <label for="editCategoryImage">Image</label>
                        <input type="file" class="form-control-file" id="editCategoryImage" name="Image">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@foreach($categories as $index => $category)

<!-- Delete Category Modal -->
<div class="modal fade" id="deleteCategoryModal_{{ $index }}"  aria-labelledby="deleteCategoryModalLabel_{{ $index }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCategoryModalLabel">Delete Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <p>Are you sure you want to delete the category "{{ $category->Nom }}"?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <!-- Form for deleting a category -->
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach




@endsection