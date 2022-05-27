@extends('welcome')

@section('content')

<div class="row">
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nom</th>
                      <th>Email</th>
                      <th style="width: 40px">Role</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($users as $u)
                    <tr>
                      <td>{{$u->id}}</td>
                      <td>{{$u->name}}</td>
                      
                      <td>{{$u->email}}</td>
                     
                      <td>
                         <span class="badge bg-danger">{{$u->role->name}}</span>
                         
                        </td>
                        <td>
                        <button type="button" class="btn btn-block btn-info btn-xs"   data-toggle="modal" data-target="#modal-default">Show</button>
                        <a type="button" class="btn btn-block btn-warning btn-xs" href="{{route('users.edit',$u)}}"  >Edit</a>
                        <button type="button" class="btn btn-block  btn-danger btn-xs">Delete</button>
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

<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


@endsection