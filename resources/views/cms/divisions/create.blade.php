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
                            <h3 class="card-title">Create divisions</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('divisions.store') }}" enctype="multipart/form-data">
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
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter name" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="price">price</label>
                                    <input type="price" class="form-control" id="price" name="price"
                                        placeholder="Enter price" value="{{ old('price') }}">
                                </div>
                                <div class="form-group">
                                    <label for="hours">hours</label>
                                    <input type="number" class="form-control" id="hours" name="hours"
                                        placeholder="Enter hours" value="{{ old('hours') }}">
                                </div>
                                <div class="form-group">
                                    <label for="min_student_to_open">min_student_to_open</label>
                                    <input type="number" class="form-control" id="min_student_to_open" name="min_student_to_open"
                                        placeholder="Enter number" value="{{ old('min_student_to_open') }}">
                                </div>
                                <div class="form-group">
                                    <label for="finished_at">finished_at</label>
                                    <input type="date" class="form-control" id="finished_at" name="finished_at"
                                        placeholder="Enter number" value="{{ old('finished_at') }}">
                                </div>

                                <div class="form-group">
                                    <label for="status">Choice the type of division status</label>
                                    <select class="custom-select" name="status" id="status">
                                        <option value="pending_progressing">pending_progressing</option>
                                        <option value="information_meeting">information_meeting</option>
                                        <option value="in_progress">in_progress</option>
                                        <option value="finished">finished</option>
                                        <option value="closed">closed</option>
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

