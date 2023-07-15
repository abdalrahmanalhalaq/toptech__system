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
                      <h3 class="card-title">Edit Company</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('companies.update', $company->id ) }}">
                        @method('PUT')
                        @csrf
                      <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                              <h5><i class="icon fas fa-ban"></i> Validation Error!</h5>
                              <ul>
                                  @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                            </div>
                        @endif


                        <div class="form-group">
                          <label for="company_name">Name</label>
                          <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter name" 
                          value="{{ old('company_name') ?? $company->name }}" >
                        </div>
                        <div class="form-group">
                          <label for="company_mobile">Mobile</label>
                          <input type="tel" class="form-control" id="company_mobile" name="company_mobile" placeholder="Enter mobile" 
                          value="{{ old('company_mobile') ?? $company->mobile }}" >
                        </div>
                        <div class="form-group">
                          <label for="company_note">Note</label>
                          <input type="text" class="form-control" id="company_note" name="company_note" placeholder="Enter Note" 
                          value="{{ old('company_note') ?? $company->note }}" >
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
