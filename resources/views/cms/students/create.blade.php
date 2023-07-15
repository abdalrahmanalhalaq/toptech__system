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
                            <h3 class="card-title">Create Student</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
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
                                    <label for="student_name">Name</label>
                                    <input type="text" class="form-control" id="student_name" name="student_name"
                                        placeholder="Enter name" value="{{ old('student_name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="student_email">Email address</label>
                                    <input type="email" class="form-control" id="student_email" name="student_email"
                                        placeholder="Enter email" value="{{ old('student_email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="student_mobile">Mobile</label>
                                    <input type="tel" class="form-control" id="student_mobile" name="student_mobile"
                                        placeholder="Enter mobile" value="{{ old('student_mobile') }}">
                                </div>
                                <div class="form-group">
                                    <label for="student_address">Address</label>
                                    <input type="text" class="form-control" id="student_address" name="student_address"
                                        placeholder="Enter Address" value="{{ old('student_address') }}">
                                </div>

                                <div class="form-group">
                                    <label for="student_gender">Choice the gender Type Of your student</label>
                                    <select class="custom-select" name="student_gender" id="student_gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>

                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit"  class="btn btn-primary">Submit</button>
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

@section('scripts')

    <script src="{{ asset('folderasset/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>


@endsection
