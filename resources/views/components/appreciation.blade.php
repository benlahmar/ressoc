<div>
<button id="like" class="btn btn-default btn-sm">
  likeajax <span id="likes"></span>{{$alpha}}
</button>
</div>
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
	$("#like").click( function(e){
			e.preventDefault();
			$.ajax({
			    url: '/consultations/{{$idc}}/like2',
			    type: "GET", 
			    success: function(data){
			    	$('#likes').html(data);	
            console.log(data);		
			    },
			    error: function(data){
            console.log(data);
			    },
			});
		});
	</script>