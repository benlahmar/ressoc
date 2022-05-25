
@extends('welcome')

@section('content')

<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
            <!-- Box Comment -->
            <div class="card card-widget">
              <div class="card-header">
                <div class="user-block">
                  <img class="img-circle" src="{{asset('assets/dist/img/user1-128x128.jpg')}}" alt="User Image">
                  <span class="username"><a href="#">{{$ct->titre}}</a></span>
                  <span class="description">Publié par xxxxx - {{$ct->created_at->format('Y-m-d: h:M');}}</span>
                </div>
                <!-- /.user-block -->
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" title="Mark as read">
                    <i class="far fa-circle"></i>
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
                <img class="img-fluid pad" src="{{asset('assets/dist/img/photo2.png')}}" alt="Photo">

                <p>{{$ct->descript}}</p>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                <a href="/like?idpost={{$ct->id}}&type=like" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</a>
                <button id="like" class="btn btn-default btn-sm">likeajax <span id="likes"></span></button>
                <span class="float-right text-muted">{{count($ct->likes)}} likes - {{count($ct->likes)}} comments</span>
              </div>
              <!-- /.card-body -->
              <div class="card-footer card-comments">
                <div class="card-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="{{asset('assets/dist/img/user3-128x128.jpg')}}" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      Maria Gonzales
                      <span class="text-muted float-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.card-comment -->
                <div class="card-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      Luna Stark
                      <span class="text-muted float-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.card-comment -->
              </div>
              <!-- /.card-footer -->
              <div class="card-footer">
                <form action="#" method="post">
                  <img class="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                  <!-- .img-push is used to add margin to elements next to floating images -->
                  <div class="img-push">
                    <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                  </div>
                </form>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>

          </div>

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
	$("#like").click( function(e){
			e.preventDefault();
			$.ajax({
			    url: '/consultations/{{$ct->id}}/like2',
			    type: "GET", 
			    success: function(data){
            console.log('hhhh');
			    	$('#likes').html(data);	
            console.log(data);		
			    },
			    error: function(data){
            console.log(data);
			    },
			});
		});
	</script>

@endsection