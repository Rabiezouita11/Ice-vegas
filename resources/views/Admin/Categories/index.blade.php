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
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
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
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                    data-target="#addCategoryModal">
                                    Add Categorie
                                </button>
                            </div>
                            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                            <div class="card-body categoryTableContainer">

                                <table id="categoryTable" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom catégorie</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($categories->isEmpty())
                                            <tr>
                                                <td colspan="4" class="text-center">No categories found.</td>
                                            </tr>
                                        @else
                                            @foreach ($categories as $index => $category)
                                                <tr id="categoryRow_{{ $index }}">
                                                    <td>{{ $category->id }}</td>
                                                    <td>{{ $category->Nom }}</td>
                                                    <td><img src="{{ asset($category->Image) }}" alt="{{ $category->Nom }}"
                                                            class="img-fluid rounded-circle"
                                                            style="max-width: 60px ; max-height: 60px;"></td>
                                                    <td>
                                                        <!-- Edit Button with Icon -->
                                                        <button type="button" class="btn btn-sm btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#editCategoryModal_{{ $index }}">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        <!-- Delete Button with Icon -->
                                                        <button type="button" class="btn btn-sm btn-danger"
                                                            data-toggle="modal"
                                                            data-target="#deleteCategoryModal_{{ $index }}">
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
                            <div class="card-footer clearfix pagination-container">
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
    @foreach ($categories as $index => $category)
        <div class="modal fade" id="editCategoryModal_{{ $index }}"
            aria-labelledby="editCategoryModalLabel_{{ $index }}" aria-hidden="true">
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
                        <form action="{{ route('categories.update', $category->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="editCategoryName">Nom catégorie</label>
                                <input type="text" class="form-control" id="editCategoryName" name="Nom"
                                    value="{{ $category->Nom }}" required>
                            </div>
                            <div class="form-group">
                                <label for="editCategoryImage">Image</label>
                                <input type="file" class="form-control-file" id="editCategoryImage" name="Image">
                            </div>
                            <button type="button" class="btn btn-danger delete-button"
                                onclick="updateCategory({{ $category->id }}, {{ $index }})">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



    <!-- Delete Category Modal -->
    @foreach ($categories as $index => $category)
        <div class="modal fade" id="deleteCategoryModal_{{ $index }}"
            aria-labelledby="deleteCategoryModalLabel_{{ $index }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteCategoryModalLabel_{{ $index }}">Delete Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete the category "{{ $category->Nom }}"?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <!-- Button to trigger the delete process -->
                        <button type="button" class="btn btn-danger delete-button"
                            onclick="deleteCategory({{ $category->id }}, {{ $index }})">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
          function updateCategory(categoryId, index) {
    // Get form data
    let formData = new FormData();
    formData.append('Nom', $('#editCategoryName').val());
    formData.append('Image', $('#editCategoryImage')[0].files[0]); // Get the first file from input

    fetch(`/categories/${categoryId}`, { // Correct the URL to point to the correct route
        method: 'PUT',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        // Show success toast
        showToast('success', data.message);

     
        // Hide the modal after update (optional)
        $('#editCategoryModal_' + index).modal('hide');
    })
    .catch(error => {
        // Show error toast or handle error
        showToast('error', 'An error occurred. Please try again later.');
        console.error('There was an error!', error);
    });
}

    </script>
    <script>
        function deleteCategory(categoryId, index) {
            // This function will be called when the delete button inside the modal is clicked
            fetch(`/categories/${categoryId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Show success toast
                    showToast('success', data.message);

                    updateTableContent();

                    updatePagination();
                    // Remove the deleted category row from the table
                    // Hide the modal after deletion (optional)
                    $('#deleteCategoryModal_' + index).modal('hide');

                })
                .catch(error => {
                    // Show error toast or handle error
                    showToast('error', 'An error occurred. Please try again later.');
                    console.error('There was an error!', error);
                });
        }

      




        function updateTableContent() {
            // Fetch the updated table content from the server
            fetch('{{ route('showPageCategories') }}')
                .then(response => response.text())
                .then(html => {
                    // Replace the current table content with the updated one
                    $('#categoryTable').html($(html).find('#categoryTable').html());
                })
                .catch(error => {
                    console.error('Error updating table content:', error);
                });
        }

        function updatePagination() {
            // Fetch the updated pagination HTML from the server
            fetch('{{ route('showPageCategories') }}')
                .then(response => response.text())
                .then(html => {
                    // Replace the current pagination HTML with the updated one
                    $('.pagination-container').html($(html).find('.pagination-container').html());
                })
                .catch(error => {
                    console.error('Error updating pagination:', error);
                });
        }
        // Function to display toast notifications
        function showToast(type, message) {
            toastr.options = {
                closeButton: true, // Add a close button
                progressBar: true, // Show a progress bar
                showMethod: 'slideDown', // Animation in
                hideMethod: 'slideUp', // Animation out
                timeOut: 5000, // Time before auto-dismiss
            };

            switch (type) {
                case 'info':
                    toastr.info(message);
                    break;
                case 'success':
                    toastr.success(message);
                    break;
                case 'warning':
                    toastr.warning(message);
                    break;
                case 'error':
                    toastr.error(message);
                    break;
            }
        }
    </script>


@endsection
