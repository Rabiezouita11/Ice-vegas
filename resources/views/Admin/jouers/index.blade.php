@extends('Admin.layouts.index')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jouers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Jouers</li>
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
                            <h3 class="card-title">List of Jouers</h3>
                            <a href="{{ route('jouers.create') }}" class="btn btn-primary float-right">Add Jouer</a>
                        </div>
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Image</th>
                                        <th>Reponse1</th>
                                        <th>Reponse2</th>
                                        <th>Reponse3</th>
                                        <th>Reponse Correct</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jouers as $jouer)
                                    <tr>
                                        <td>{{ $jouer->id }}</td>
                                        <td>{{ $jouer->name }}</td>
                                        <td><img src="{{ asset($jouer->Image) }}" alt="Jouer Image" width="100"></td>
                                        <td>{{ $jouer->Reponse1 }}</td>
                                        <td>{{ $jouer->Reponse2 }}</td>
                                        <td>{{ $jouer->Reponse3 }}</td>
                                        <td>{{ $jouer->ReponseCorrect }}</td>
                                        <td>
                                            <a href="{{ route('jouers.edit', $jouer->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('jouers.destroy', $jouer->id) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this jouer?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
