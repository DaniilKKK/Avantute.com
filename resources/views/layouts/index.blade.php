<!doctype html>

<html lang="ru">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
   <title>Туристическое агентство - Avanture</title>
    <link rel="shortcut icon" href="{{ asset('stat/images/tours/label.jpg') }}" type="image/png">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    

   <style>
       
	   body 
        {
          margin: 0;
          background: 	#F5F5F5;
        }
	  
         header 
        {
          position: relative;
          width: 100%;
          text-align: center;
          color: white;
          transition: .4s;
        }
		
		.navbar-brand {
			font-family: "Mistral";
			font-size:30px;
			
		}
   
   .nav-link {
	   font-family: "Times New Roman";
	   font-size:20px;
	   
   }
   
    .nav-link-a {
		  color: white;
		  font-family: "Times New Roman";
	   font-size:20px;
		  margin-right: 3rem;
	}
   
        .carousel {
    margin-bottom: 4rem;
  }

  .carousel-item {
    height: 40rem;
  }
  .carousel-item > img {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    height: 45rem;
  }
  
  #beach {
    height: 40rem;
  }

  #romantic {
    height: 40rem;
  }
  
  #adv {
	  height: 40rem;
	  
  }
  .carousel-caption{
    font-family: "Times New Roman";
  }
   
     
	 
	
	p{
	 font-family: "Times New Roman";
     text-align: center;
	 font-size:20px;
	 
	}
	
	.container-fluid {
    position: relative;
    text-align: center;
    color: rgba(255, 255, 255,.7);
	font-size:30px;
	font-weight: 600;
	 font-family: "Times New Roman";
	 
	

}
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#action_form{
    background-color: #4682B4;
    text-align: center; 
    height: 100%;
	 margin-bottom:50px;
    font-family: "Times New Roman";
    font-size: 20px;
   color: rgba(0,0,0,0.5);
   height: 100px;
   weight: 500px;
  }
  
  h2{
	  font-family: "Mistral";
	  font-size: 50px;
  }
   
    h3{
	  font-family: "Times New Roman";
	  font-size: 25px;
  }
  
  
   .footer-bs {
    background-color: #A9A9A9;
    padding: 60px 40px;
    color: rgba(255,255,255,1.00);
    margin-bottom: 20px;
    border-bottom-right-radius: 6px;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 6px;
  }
  .footer-bs .footer-brand, .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { padding:10px 25px; }
  .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { border-color: transparent; }
  .footer-bs .footer-brand h2 { margin:0px 0px 10px; }
  .footer-bs .footer-brand p { font-size:12px; color:rgba(255,255,255,0.70); }
  
  .footer-bs .footer-nav ul.pages { list-style:none; padding:0px; }
  .footer-bs .footer-nav ul.pages li { padding:5px 0px;}
  .footer-bs .footer-nav ul.pages a { color:rgba(255,255,255,1.00); font-weight:bold; text-transform:uppercase; }
  .footer-bs .footer-nav ul.pages a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }
  .footer-bs .footer-nav h4 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom:10px;
  }
  
  .footer-bs .footer-nav ul.list { list-style:none; padding:0px; }
  .footer-bs .footer-nav ul.list li { padding:5px 0px;}
  .footer-bs .footer-nav ul.list a { color:rgba(255,255,255,0.80); }
  .footer-bs .footer-nav ul.list a:hover { color:rgba(255,255,255,0.60); text-decoration:none; }
  
  .footer-bs .footer-social ul { list-style:none; padding:0px; }
  .footer-bs .footer-social h4 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 3px;
  }
  .footer-bs .footer-social li { padding:5px 4px;}
  .footer-bs .footer-social a { color:rgba(255,255,255,1.00);}
  .footer-bs .footer-social a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }
  
  .footer-bs .footer-ns h4 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom:10px;
    font-family: "Times New Roman";
  }
  .footer-bs .footer-ns p { font-size:12px; color:rgba(255,255,255,0.70); }
  
  @media (min-width: 768px) {
    .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { border-left:solid 1px rgba(255,255,255,0.10); }
  }
  
   </style>
   
</head>


<body>
<!--Верхнее меню сайта-->
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  
  <a class="navbar-brand" href="#">
   <img id="brand" src="http://images.std-1054.ist.mospolytech.ru/images/ярлык.jpg" width="45" height="45" class="d-inline-block align-top" alt="" loading="lazy">
  Avanture</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  
  <a class="navbar-brand" href="#">
   <img id="brand" src="http://images.std-1054.ist.mospolytech.ru/images/ярлык.jpg" width="45" height="45" class="d-inline-block align-top" alt="" loading="lazy">
  Avanture</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catalog
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Beach holidays</a>
                        <a class="dropdown-item" href="#">Romantic trip</a>
                        <a class="dropdown-item" href="#">Active recreation</a>
                    </div>
                </li>
       
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Сontacts</a>
      </li>
    </ul>
	
    @guest
        <li class="nav-item">
            <a class="nav-link-a" href="{{ route('login') }}">{{ __('Вход') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link-a" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->login }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/account') }}">
                    Account
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
    @auth
      @if (Auth::user()->role_id == 3 || Auth::user()->role_id == 4)
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <form class="form-inline mt-2 mt-md-0">
                  <a class="btn btn btn-outline-danger my-2 my-sm-0" href="/admin/orders" role="button">Admin &raquo;</a>
              </form>
        </div>
        @endif
    @endauth

</nav>
</header>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">        
      <img id="beach" src="http://images.std-1054.ist.mospolytech.ru/images/пляж.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="romantic" src="http://images.std-1054.ist.mospolytech.ru/images/романтика.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="adv" src="http://images.std-1054.ist.mospolytech.ru/images/активный%20отдых.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  

@yield('content')

	 <div class="container">
    <section style="height:80px;"></section>
    <div class="row" style="text-align:center;">
        <!----------- Footer ------------>
        <footer class="footer-bs">
            <div class="row">
                <div class="col-md-3 col-sm-12 footer-brand animated fadeInLeft">
                    <h2>Avanture</h2>
                    <img src="http://images.std-1054.ist.mospolytech.ru/images/ярлык.jpg" width="210" height="200">
                </div>
                <div class="col-md-4 col-sm-12 footer-nav animated fadeInUp">
                    <h3>О сайте</h3>
                   <p>Туристическое агентство "Avanture" поможет выбрать для Вас идеальный отдых, сделает Ваше приключение незыбаваемым. 
				   Сотрудники нашей компании желают Вам отличного отдыха и надеются, что вы получите море эмоций и обратитесь в "Avanture" снова.</p>
                </div>

                <div class="col-md-2 col-sm-12 footer-social animated fadeInDown">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="https://vk.com/kobra_black">VK</a></li>
                        <li><a href="https://www.instagram.com/_anastassss/">Instagram</a></li>
                        <li><a href="mailto:anastasheva10@yandex.ru">E-mail</a></li>
                    </ul>
                </div>
               <div class="col-md-3 col-sm-12 footer-brand animated fadeInLeft">
                    <h2>Avanture</h2>
                    <img src="http://images.std-1054.ist.mospolytech.ru/images/ярлык.jpg" width="210" height="200">
                </div>
            </div>
        </footer>
        <section style="text-align:center; margin:10px auto;"><p>Designed by <a href="/">Malysheva Anastasia</a>
            <p>© 2020, All rights reserved</p></p></section>

    </div>


</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>