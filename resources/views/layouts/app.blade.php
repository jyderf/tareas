<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>
    <style>
     .nav,.nav ul 
    {
    	margin:0px;
    	padding :0px;
    	list-style :none outside none;
    	height:30px;
    	
    	
    }
    .nav li
    {
    	float :left;
    	width:150px;
    	position:relative;
    	height:50px;
         background:#cc101c;
        display:block;
      box-shadow:10px 0px 10px 0px;
      margin-left:2px;
        
     }
    .nav a
    {
    	text-decoration :none;
    	height:50px;
    	display:block ;
    	text-align :center ;
    	color:white;
    	  padding-top:10px;
    }
  
    .sub
    {
    	left:-9999px;
    	position :absolute ;
    	top:-9999px;
    	z-index :2;
    	
    	
    }
    
    .nav li:hover .sub
    {
    	visibility:visible ;
    	
    	
    }
    .nav
    {
    	font-family :Calibri;
    	font-size :20px;
    	height:50px;
    	font-weight:bold;
    	margin:40px auto;
    	text-shadow :0 -1px 3px #ffcc00;
    	border-radius:4px;
    	
    	
    }
    .nav li:first-child
    {
    	border-left :0 none;
    	margin-left :5px;
    	
    	
    }
   
   .nav li a
   {
   	color:White ;
   	display :block;
   	line-height :24px;
   	text-decoration :none;
   	}
   	@keyframes ss
   	{
   		0%
   		{
   		transform:scale(1);
   	}
   		30%
   		{
   			transform:scale(1.3);
   		}
   		100%
   		{
   			transform:scale(1);
   		}
   	}
    .nav li >a:hover
    {
    	animation:ss 0.7s linear infinite forwards;
    	
    	
    }
    .nav li:hover>a
    {
    	z-index:4;
    	
    }
    .nav li:hover .sub
    {
    left:0;
    top:50px;
    width:150px;
    }
    .nav ul li
    {
    	background :none repeat scroll 0 0 #ff6565;
    	box-shadow:5px 5px 5px rgb(0,0,0,0.5);
    	opacity:0.3;
    	width :100%;
    	
    }
    	
    .nav li:hover ul li 
    {
    animation:ss1 0.3s linear 1 forwards;	
    	
    }
    @keyframes ss1
    {
    	0%
    {
     margin-left :300px;top:900px;transform:rotate(90deg);
    }
    100%
    {
    	
    margin-left :0px;top:0px;transform:rotate(360deg);
    opacity:1;
    	
    }
    	}
    	
    	.nav li:hover ul li:nth-child(3)
    	{
    		animation-delay:0;
    	}
    		
    	.nav li:hover ul li:nth-child(2)
    	{
    		animation-delay:0.1s;
    	}
    	
    		
    	.nav li:hover ul li:nth-child(1)
    	{
    		animation-delay:0.2s;
    	}
    	
    
  
    </style>
  </head>
  <body>
  <div class="container" >
    

  <div class="container">
	<div class="row">
	 <div>
  <ul class="nav">
  <li><a href="{{ url('tareas') }}">INICIO</a></li> 
  
  
  <li><a href="{{ url('tareas') }}">Tareas</a>
   <ul class ="sub">
   <li><a href="{{ url('tareas') }}">Ir a tareas</a></li> 
    <li><a href="{{ url('tareas/create') }}">Crear tarea</a></li>
    
    </ul>
  </li>
  
   
  <li><a href="{{ url('categorias') }}">Categorías</a>
  <ul class ="sub">
  <li><a href="{{ url('categorias') }}">Ir a categorías</a></li> 
    <li><a href="{{ url('categorias/create') }}">Crear categorías</a></li>
    
 </ul>
  </li> 
  
  
  
  </ul>
    </div>
	</div>
</div>


      @yield('content')
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>