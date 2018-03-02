<!DOCTYPE html>
<html>
<head>
	
	<title>@yield('title')</title>

	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
 --}}
	<style type="text/css">
		.hovercover{
    display:inline-block;
    position:relative;
    overflow: hidden;
}
.hovercover1{
    display:inline-block;
    position:relative;
    overflow: hidden;
}
.hover-div{
    position: absolute;
    right: 1%;
    bottom: 1%;
}

#file-upload{
    display: none;
}
.custom-file-upload {
    
    display: inline-block;
    padding: 6px 12px;
    background-color: #c74d4e;
    cursor: pointer;
    color :#fff;
     
}

#bgimage {
height: 300px;
position: relative;
overflow: hidden;
background-color:#ffffff;
}

#adjimage {
height: 300px;
width:100%;
position: relative;
overflow: hidden;
background-color:#ffffff;
}



#timelineBackground {
height: 300px;
position: relative;
overflow: hidden;
background-color:#ffffff;
}
#timelineShade {
min-height: 95px;
position: absolute;
margin-top: -95px;
width: 100%;
}
.timelineUploadBG {
position: absolute;
margin-top: 50px;
margin-left: 813px;
height: 32px;
width: 32px;
}

.uploadFile input {
filter: alpha(opacity=0);
opacity: 0;
margin-left: -110px;
}
.custom-file-input {
height: 25px;
cursor: pointer;
}
#timelineBGload{
position: relative;
overflow: hidden;
background-color:#ffffff;
}
.headerimage{
    cursor: move;
}
.btn-save-drag{
    position: absolute;
    
    right: 1%;
    bottom: 1%;
}
	</style>

</head>
<body>
	<div class="container">
		@yield('content')	
	</div>
	

</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- [/] jquery -->
		@yield('js')
</html>