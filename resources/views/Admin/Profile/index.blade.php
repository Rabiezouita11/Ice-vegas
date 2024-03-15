@extends('Admin.layouts.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if (session('success'))
        <div class="alert alert-success text-center">
        {{session('success')}}

        </div>
        @endif
        @if (session('errorpassword'))
        <div class="alert alert-danger text-center">
        {{session('errorpassword')}}

        </div>
        @endif
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="/AdminPublic/page admin.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

                <p class="text-muted text-center">Administrateur</p>

             

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">À propos de moi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-user mr-1"></i> Nom</strong>

                <p class="text-muted">
                {{ auth()->user()->name }}
                </p>

                <hr>

                <i class="fas fa-envelope mr-1"></i><strong>Email</strong>

                <p class="text-muted">  {{ auth()->user()->email }}</p>

                <hr>


                <i class="fas fa-user-tag mr-1"></i><strong>Role</strong>

                <p class="text-muted">  {{ auth()->user()->role }}</p>

                <hr>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link{{ !$errors->any() && !session('errorpassword') ? ' active' : '' }}" href="#ModifierProfile" data-toggle="tab">Modifier Profile</a></li>
    <li class="nav-item"><a class="nav-link{{ $errors->any() || session('errorpassword') ? ' active' : '' }}" href="#changermotdepasse" data-toggle="tab">Changer mot de passe</a></li>
</ul>
                  <!-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> -->
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                <div class="tab-pane{{ !$errors->any() && !session('errorpassword') ? ' active' : '' }}" id="ModifierProfile">
                
                  <form class="form-horizontal" action="{{route('ModifierProfileAdmin')}}" method="post">
                  <input type="hidden" name="_token" value="{{ Session::token() }}">
                  <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" name="name" value="{{ auth()->user()->name }}" required></br>

                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" value="{{ auth()->user()->email }}" required></br>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                        <input class="form-control" type="text" name="role" value="{{ auth()->user()->role }}" readonly></br>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Enregistrer</button>
                        </div>
                      </div>
                    </form>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane{{ $errors->any() || session('errorpassword') ? ' active' : '' }}" id="changermotdepasse">
                    <!-- The timeline -->
                    <form class="form-horizontal" action="{{route('update_password')}}" id="change_password_form" method="post">
                    @csrf

                    <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Ancien mot de passe</label>
    <div class="col-sm-10 input-group">
        <input type="password" name="old_password" class="form-control" id="old_password">
        <span class="input-group-text" id="toggle_old_password">
            <i class="fas fa-eye"></i>
        </span>
    </div>
    @if($errors->any('old_password'))
        <span class="col-sm-10 offset-sm-2 text-danger">{{$errors->first('old_password')}}</span>
    @endif
</div>

<div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Nouveau mot de passe</label>
    <div class="col-sm-10 input-group">
        <input type="password" name="new_password" class="form-control" id="new_password">
        <span class="input-group-text" id="toggle_new_password">
            <i class="fas fa-eye"></i>
        </span>
    </div>
    @if($errors->any('new_password'))
        <span class="col-sm-10 offset-sm-2 text-danger">{{$errors->first('new_password')}}</span>
    @endif
</div>

<div class="form-group row">
    <label for="inputName2" class="col-sm-2 col-form-label">Confirmer mot de passe</label>
    <div class="col-sm-10 input-group">
        <input type="password" name="confirm_password" class="form-control" id="confirm_password">
        <span class="input-group-text" id="toggle_confirm_password">
            <i class="fas fa-eye"></i>
        </span>
    </div>
    @if($errors->any('confirm_password'))
        <span class="col-sm-10 offset-sm-2 text-danger">{{$errors->first('confirm_password')}}</span>
    @endif
</div>

                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Changer mot de passe</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
          

                  <!-- <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div> -->
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
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
  <script>
    document.getElementById('toggle_old_password').addEventListener('click', function() {
        var oldPasswordInput = document.getElementById('old_password');
        if (oldPasswordInput.type === "password") {
            oldPasswordInput.type = "text";
        } else {
            oldPasswordInput.type = "password";
        }
    });

    document.getElementById('toggle_new_password').addEventListener('click', function() {
        var newPasswordInput = document.getElementById('new_password');
        if (newPasswordInput.type === "password") {
            newPasswordInput.type = "text";
        } else {
            newPasswordInput.type = "password";
        }
    });

    document.getElementById('toggle_confirm_password').addEventListener('click', function() {
        var confirmPasswordInput = document.getElementById('confirm_password');
        if (confirmPasswordInput.type === "password") {
            confirmPasswordInput.type = "text";
        } else {
            confirmPasswordInput.type = "password";
        }
    });
</script>

  @endsection