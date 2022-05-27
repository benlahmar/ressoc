
@extends('welcome')

@section('content')

<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Permission</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" 
              method="post" action="{{route('permissions.store')}}">
              @csrf  
              <div class="card-body">
                 
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Action</label>
                    <div class="col-sm-10">
                    <select class="custom-select" name="action">
                          <option>ajouter</option>
                          <option>modif</option>
                          <option>supp</option>
                          <option>consulte</option>
                          <option>option 5</option>
                        </select>                      
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Ressource</label>
                    <div class="col-sm-10">
                      <input type="text" name="ressource" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Sign in</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>

<div class="row">
    @foreach($ps as $p)

    <div class="col-md-3">
            <div class="card card-success" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
              <div class="card-header">
                <h3 class="card-title">{{$p->name}}</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false">
                    <i class="fas fa-sync-alt"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                The body of the card
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    @endforeach
</div>



@endsection