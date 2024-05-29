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
                <div class="row mb-2">
                    <div class="col-md-12">
                        <form action="{{ route('searchProduit') }}" method="GET" class="form-inline float-right">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query" value="{{ request('query') }}">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
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
                                <h3 class="card-title">Liste des Produits</h3>
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addProduitModal">
                                    Add Produits
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
                                            <th>Nom Produit</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Prix</th>
                                            <th>Nom categories</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($Produits->isEmpty())
                                            <tr>
                                                <td colspan="7" class="text-center">No Produits found.</td>
                                            </tr>
                                        @else
                                            @foreach ($Produits as $index => $Produit)
                                                <tr id="categoryRow_{{ $index }}">
                                                    <td>{{ $Produit->id }}</td>
                                                    <td>{{ $Produit->Nom }}</td>
                                                    <td>{{ $Produit->Description }}</td>
                                                    <td><img src="{{ asset($Produit->Image) }}" alt="{{ $Produit->Nom }}" class="img-fluid rounded-circle" style="max-width: 60px; max-height: 60px;"></td>
                                                    <td>{{ $Produit->Prix }}</td>
                                                    <td>{{ $Produit->categorie->Nom }}</td>
                                                    <td>
                                                        <!-- Edit Button with Icon -->
                                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editCategoryModal_{{ $index }}">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        <!-- Delete Button with Icon -->
                                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteProduitModal_{{ $index }}">
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
                                {{ $Produits->links('vendor.pagination.bootstrap-4') }}
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Add Category Modal -->
    <div class="modal fade" id="addProduitModal" tabindex="-1" aria-labelledby="addProduitModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProduitModalLabel">Add Product</h5>
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

                    <!-- Form for adding a product -->
                    <form action="{{ route('storeProduit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="produitName">Product Name</label>
                            <input type="text" class="form-control" id="produitName" name="Nom" required>
                        </div>
                        <div class="form-group">
                            <label for="produitDescription">Description</label>
                            <textarea class="form-control" id="produitDescription" name="Description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="produitImage">Image</label>
                            <input type="file" class="form-control-file" id="produitImage" name="Image" required>
                        </div>
                        <div class="form-group">
                            <label for="produitPrix">Price</label>
                            <input type="number" class="form-control" id="produitPrix" name="Prix" required>
                        </div>
                        <div class="form-group">
                            <label for="produitCategorie">Category</label>
                            <select class="form-control" id="produitCategorie" name="categorie_id" required>
                                @foreach ($categorie as $category)
                                    <option value="{{ $category->id }}">{{ $category->Nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Category Modals -->
    @foreach ($Produits as $index => $category)
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
                        <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
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
                            <button type="button" class="btn btn-danger delete-button" onclick="updateCategory({{ $category->id }}, {{ $index }})">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Delete Category Modal -->
    @foreach ($Produits as $index => $produit)
        <div class="modal fade" id="deleteProduitModal_{{ $index }}" aria-labelledby="deleteProduitModal_Label_{{ $index }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteProduitModal_Label_{{ $index }}">Delete Produit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete the Produit "{{ $produit->Nom }}"?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <!-- Button to trigger the delete process -->
                        <button type="button" class="btn btn-danger delete-button" data-dismiss="modal" onclick="deleteProduit({{ $produit->id }}, {{ $index }})">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function deleteProduit(produitid, index) {
            fetch(`/Produits/${produitid}`, {
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
                showToast('success', data.message);
                updateTableContent();
                updatePagination();
                $('#deleteCategoryModal_' + index).modal('hide');
            })
            .catch(error => {
                showToast('error', 'An error occurred. Please try again later.');
                console.error('There was an error!', error);
            });
        }

        function updateTableContent() {
            fetch('{{ route('showPageProduit') }}')
            .then(response => response.text())
            .then(html => {
                $('#categoryTable').html($(html).find('#categoryTable').html());
            })
            .catch(error => {
                console.error('Error updating table content:', error);
            });
        }

        function updatePagination() {
            fetch('{{ route('showPageProduit') }}')
            .then(response => response.text())
            .then(html => {
                $('.pagination-container').html($(html).find('.pagination-container').html());
            })
            .catch(error => {
                console.error('Error updating pagination:', error);
            });
        }

        function showToast(type, message) {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                hideMethod: 'slideUp',
                timeOut: 5000,
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
