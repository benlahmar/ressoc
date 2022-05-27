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
                        <button type="button" class="btn btn-block btn-info btn-xs">Show</button>
                        <button type="button" class="btn btn-block btn-warning btn-xs   data-toggle="modal" data-target="#modal-default"">Edit</button>
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




@endsection