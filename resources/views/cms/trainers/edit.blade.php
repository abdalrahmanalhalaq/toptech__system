@extends('cms.parent')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Trainer</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('trainers.update', $trainer->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-ban"></i> Validation Error!</h5>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                <div class="form-group">
                                    <label for="trainer_name">Name</label>
                                    <input type="text" class="form-control" id="trainer_name" name="trainer_name"
                                        placeholder="Enter name" value="{{ old('trainer_name') ?? $trainer->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="trainer_email">Email address</label>
                                    <input type="email" class="form-control" id="trainer_email" name="trainer_email"
                                        placeholder="Enter email" value="{{ old('trainer_email') ?? $trainer->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="trainer_mobile">Mobile</label>
                                    <input type="tel" class="form-control" id="trainer_mobile" name="trainer_mobile"
                                        placeholder="Enter mobile" value="{{ old('trainer_mobile') ?? $trainer->mobile }}">
                                </div>
                                <div class="form-group">
                                    <label for="trainer_address">Address</label>
                                    <input type="text" class="form-control" id="trainer_address" name="trainer_address"
                                        placeholder="Enter Address"
                                        value="{{ old('trainer_address') ?? $trainer->address }}">
                                </div>

                                <div class="form-group">
                                    <label for="trainer_gender">Choice the gender Type Of your trainer</label>
                                    <select class="custom-select" name="trainer_gender" id="trainer_gender">
                                        <option value="male">Male</option>
                                        <option value="female" @selected($trainer->gender == "female")>Female</option>
                                    </select>
                                </div>

                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
