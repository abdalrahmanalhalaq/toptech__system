@extends('cms.parent')
@section('style')
  <style>
    .action{
      display: flex;
      flex-direction: row;
      column-gap: 10px;
    }
    .delete-btn{
      /* border: none;*/
      color: red;
       outline-width: 0px;
       outline-color: white;
       border-width:0px;
       background-color: transparent;
       padding: 0px;
    }
  </style>
@endsection

@section('content')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <!-- /.row -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">All Courses</h3>

                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ( $courses as $course )
                            <tr>
                              <td>{{ $loop->index +1 }}</td>
                              {{-- <td>
                                <img class="img-circle img-bordered-sm" height="65px" width="65px"
                                src="{{ Storage::url($student->image) }}" alt="student image">
                              </td> --}}
                              <td>{{ $course->name }}</td>

                              <td>{{ $course->created_at ?? '--------'}}</td>
                              {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                              <td class="action">
                                <a href="{{ route('courses.edit', $course->id ) }}">Edit</a>
                                <form action="{{ route('courses.destroy', $course->id ) }}" method="POST">
                                   @method('DELETE')
                                   @csrf
                                  <button class="delete-btn" type="submit">Delete</button>
                                </form>


                                {{-- <a style="color: red; margin-left: 5px" href="#"></a> --}}
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
          <!-- /.content -->
@endsection
