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
                      <h3 class="card-title">All Student</h3>

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
                            {{-- <th>Image</th> --}}
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Gender</th>
                            <th>Address</th>
                            {{-- <th>Categories Count</th> --}}
                            {{-- <th>Created At</th> --}}
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ( $students as $student )
                            <tr>
                              <td>{{ $loop->index +1 }}</td>
                              {{-- <td>
                                <img class="img-circle img-bordered-sm" height="65px" width="65px"
                                src="{{ Storage::url($student->image) }}" alt="student image">
                              </td> --}}
                              <td>{{ $student->name }}</td>
                              {{-- <td>{{ $student->email }}</td> --}}
                              <td>
                                @if (!is_null($student->email))
                                <span style="font-weight: bold">{{ $student->email}}</span>
                                @else
                                <span style="color: red; font-weight: bold">NO Email</span>
                                @endif
                              </td>
                              <td>{{ $student->fullMobile }}</td>
                              <td>{{ $student->gender }}</td>
                              <td>
                                @if (!is_null($student->address))
                                <span style="font-weight: bold">{{ $student->address}}</span>
                                @else
                                <span style="color: red; font-weight: bold">NO Address</span>
                                @endif
                              </td>
                              {{-- <td>
                                {{ $student->categories_count }}
                              </td> --}}
                              {{-- <td>{{ $student->created_at ?? '--------'}}</td> --}}

                              {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                              <td class="action">
                                <a href="{{ route('students.edit', $student->id ) }}">Edit</a>
                                <form action="{{ route('students.destroy', $student->id ) }}" method="POST">
                                   @method('DELETE')
                                   @csrf
                                    <button class="delete-btn"   onclick="return confirm('Are you sure you want to delete this item?');" type="submit">Delete</button>
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

@section('scripts')
{{-- <script>
     function sureToDelete()
    {
      return alert('are you sure to delete this data !!')
    }
</script> --}}
@endsection
