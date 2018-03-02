@extends('layouts.main')
@section('title','Portada')
@section('content')
<div class="hovercover text-center" id="bgimage">

	<img src="{{asset('img').'/'.$image->imagen}}" class="img-responsive"    style="margin-top: {{$image->position}}">
	<div class="hover-div"  >
		<form method="post" id="hoverform" action="{{url('/portada')}}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<label for="file-upload" class="custom-file-upload" title="Change Cover Image">
				<i class="fa fa-file-image-o"></i>&nbsp; Change Cover
			</label>



			<input id="file-upload" name="file" type="file" />
		</form>
	</div>
</div>

<div class="hovercover1 text-center" id="adjimage" style="display: none;">

</div>
</div>
@endsection
@section('js')
		<script type="text/javascript" >
	 

	     // submit the form soon after change image
	     $('#file-upload').on('change',function(){
	        
	        $("#hoverform").ajaxForm({target: '#adjimage',
	            success:function(){
	            $(".hover-div").hide();
	                
	                $("#bgimage").hide();
	                $("#adjimage").show();
	                
	                
	            }}).submit();
	     });
	    
	   
	     
	  $('.hovercove').each(function() {
	    //set size
	    var th = $(this).height(),//box height
	        tw = $(this).width(),//box width
	        im = $(this).children('img'),//image
	        ih = im.height(),//inital image height
	        iw = im.width();//initial image width
	    if (ih>iw) {//if portrait
	        im.addClass('ww').removeClass('wh');//set width 100%
	    } else {//if landscape
	        im.addClass('wh').removeClass('ww');//set height 100%
	    }
	    //set offset
	    var nh = im.height(),//new image height
	        nw = im.width(),//new image width
	        hd = (nh-th)/2,//half dif img/box height
	        wd = (nw-tw)/2;//half dif img/box width
	    if (nh<nw) {//if portrait
	        im.css({marginLeft: '-'+wd+'px', marginTop: 0});//offset left
	    } else {//if landscape
	        im.css({marginTop: '-'+hd+'px', marginLeft: 0});//offset top
	    }
	});
	</script>
	<script type="text/javascript" src="{{asset('js/js_for_cover/jquery-ui.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/js_for_cover/jquery.wallform.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/js_for_cover/jwincrop.js')}}"></script>

@endsection