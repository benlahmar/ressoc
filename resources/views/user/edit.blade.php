
@extends('welcome')

@section('content')
<form class="form-horizontal" 
              method="post" action="{{route('users.update',$u)}}">
              @csrf    
        
                 <h1>{{$u->name}}</h1>
        
              <div class="card card-info">

              <div class="card-header">
                  
                <h3 class="card-title">Add Role</h3>
                <div class="card-tools">
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
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-10">
                                <select name="role" class="form-control">
                                    <option selected  value="{{$u->role->id}}">
                                   {{$u->role->name}}
                                    </option>
                                    @foreach($rs as $r)
                                        @if($u->role->id !== $r->id)
                                        <option value="{{$r->id}}" >
                                            {{$r->name}}
                                        </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    
                    <div class="form-group row"> 
                    <div class="col-sm-12">          
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Permission</h3>
                                <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                
                                <div class="">
                                    <div class="form-group">
                                    
                                    <select class="duallistbox" multiple="multiple" name="permissions[]">
                                    @foreach($u->role->permissions as $p) 
                                    <option value="{{$p->id}}">{{$p->name}}</option>
                                    @endforeach
                                    </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                               
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer" style="display: block;">
                            
                            </div>
                        </div>  
                    
                    </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Valider</button>
                  <button type="reset" class="btn btn-default float-right">Annuler</button>
                </div>
                <!-- /.card-footer -->
        
    </div>
</form>

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>


<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<script>
//Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

</script>
@endsection