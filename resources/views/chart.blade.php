<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="/css/app.css">
<style type"text/css">


#outer{
	width:940px;
	margin:auto;
	min-height:600px;
	border:1px solid #000;	
	position:relative;
	z-index:2;
}
#ad-container{
	width:940px;
	margin:auto;
	position:fixed;
	top:20px;
	left:0;
	right:0;	
}
.ad-left{
	float:left;
	width:160px;
	height:600px;
	background:red;
	margin-left:-170px;
}
.ad-right{
	float:right;
	width:160px;
	height:600px;
	background:red;
	margin-right:-170px;
}
.container {
  position: relative;
  width: 100%;
}

/* Make the image responsive */
.container img {
  width: 100%;
  height: auto;
}


/* Style the button and place it in the middle of the container/image */
.container .btn {
  position: absolute;
  top: 50%;
  left: 25%; */
   transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  display: inline-block;
  background-color:  #ffff66;
  color: black;
  font-size: 18px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.container .btn:hover {
  background-color: pink;
}
</style>
</head>

<body>
<div id="outer">
<!-- <div class="nav navbar-nav">
<li class="dropdown">
<a data-toggle="dropdown" class="dropdown-toggle" a href="{{ url('vehicles') }}">Vehicle Management <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="{{ url('vrequests') }}">Vehicle Requests</a></li>
 <li><a href="#">Create a New Service</a></li> 
</ul>
</li>
 <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" a href="#">Ticket <b class="caret"></b></a> 
<ul class="dropdown-menu"> 
<li><a href="#">My Ticket</a></li> 
<li><a href="#">Create a New Ticket</a></li> 
</ul> 
</li>
</div> -->


<body>

    
    
<div class="container">
  <img  src="/storage/cards/is.jpg" alt="Snow"
  >
  <a href="{{ url('admin') }}" style="margin-left: -200px;" class="btn" > Student Details</a>&nbsp;
  <a  href="{{ url('vehicles') }}" style="margin-left: 10px;" class="btn">Vehicle Management</a>
  <a  href="{{ url('vrequests') }}" style="margin-left: 280px;" class="btn">Vehicle Requests</a> 
  <a href="{{ url('complain') }}" style="margin-left: 500px;" class="btn btn-primary">complains</a>
  <a href="{{ url('cards') }}" style="margin-top: 100px; margin-left: -10px;" class="btn btn-primary">Licence</a>
  <a href="{{ url('learn') }}" style="margin-left: 150px; margin-top: 100px;" class="btn btn-primary">Materials</a>
  {{-- <a href="/complain" class="btn btn-danger">See complain list </a> --}}
 
</div> 
<h1><b><span style="color:#FF0000;text-align:center;">USER REGISTRATION</span></b></h1>
<div id="container"></div>
</body>
  
</div>
<div id="ad-container">
		<div class="ad-left"> </div>
		<div class="ad-right"> </div>
</div>
</body>
</html>