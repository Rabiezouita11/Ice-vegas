@extends('Admin.layouts.index')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Jouer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('jouers.index') }}">Jouers</a></li>
                        <li class="breadcrumb-item active">Edit Jouer</li>
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
                        <div class="card-body">
                            <form action="{{ route('jouers.update', $jouer->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $jouer->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="Image">Image</label>
                                    <input type="file" class="form-control" id="Image" name="Image" value="{{ $jouer->Image }}">
                                </div>
                                <div class="form-group">
                                    <label for="Reponse1">Reponse1</label>
                                    <input type="text" class="form-control" id="Reponse1" name="Reponse1" value="{{ $jouer->Reponse1 }}">
                                </div>
                                <div class="form-group">
                                    <label for="Reponse2">Reponse2</label>
                                    <input type="text" class="form-control" id="Reponse2" name="Reponse2" value="{{ $jouer->Reponse2 }}">
                                </div>
                                <div class="form-group">
                                    <label for="Reponse3">Reponse3</label>
                                    <input type="text" class="form-control" id="Reponse3" name="Reponse3" value="{{ $jouer->Reponse3 }}">
                                </div>
                                <div class="form-group">
                                    <label for="ReponseCorrect">Reponse Correct</label>
                                    <input type="text" class="form-control" id="ReponseCorrect" name="ReponseCorrect" value="{{ $jouer->ReponseCorrect }}">
                                </div>
                                <div class="form-group">
                                    <label for="points_gained">Points Gained</label>
                                    <input type="number" class="form-control" id="points_gained" name="points_gained" value="{{ $jouer->points_gained }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
