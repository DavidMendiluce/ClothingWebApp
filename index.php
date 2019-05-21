<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<head>
<!--Bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--Angular.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular-route.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
<title>Le Rousse</title>
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./public1/style.css" >
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>


<body>


  <nav class="navbar-light navbar-expand-sm">
    <h1 class="text-center">Le Rousse</h1>
    <div class="navWrapper bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-support="navbarSupportedContent" aria-expanded="false" aria-label="toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
      <div class="collapse navbar-collapse bg-light" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a onclick="myFunction()" class="nav-link" href="#">Le Rousse</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="#">Ultima Semana</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Coleccion</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Calzado</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Bolsos</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Accesorios</a>
            </li>
      </ul>
     </div>

     <div class="wrapper">
     <form class="form-inline my-2 my-lg-0 ml-auto">
       <img id="navigation" class="float-right" src="img/navigation.png" width="35vh" height="35vh">
       <img id="user" class="float-right" src="img/user.png" width="35vh" height="35vh">
       <img id="cart" class="float-right" src="img/cart.png" width="35vh" height="35vh">
          <span class="fa fa-search"></span>
          <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <div class="nav-line"></div>
        </form>
      </div>
  </nav>

<div class="container-fluid">

  <div id="parisRow" class="row">
    <img id="paris1" class="rounded mx-auto dblock" src="img/friends.jpg">
    <div class="loginRow hide">
      <p>You are a user?</p>
      <a class="btn btn-secondary" href="login.php" role="button">Acceder</a>
      <div class="loginLine"></div>
      <p class="noUser">Not a user?</p>
      <a class="btn btn-dark" href="signup.php" role="button">Registrarse</a>
    </div>
    <img id="paris2" class="rounded mx-auto dblock" src="img/friends2.jpg">
</div>

  <div class="row">
    <div class="col thumbnail">
      <img id="heels" class="rounded border border-secondary" src="img/heels.jpg">
      <div id="heelsCaption"class="caption d-block border border-light ">
        <h3>Calzado</h3>
      </div>
      <img id="handbag" class="rounded border border-secondary " src="img/handbag.jpg">
      <div id="handbagCaption"class="caption d-block border border-light border-left-0 border-bottom-0">
        <h3>Bolsos</h3>
      </div>
    </div>
  </div>

<div class="row justify-content-center">
  <div class="col thumbnail">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!--indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <!-- wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active mx-auto">
        <img src="img/friends.jpg" class="d-block w-100 rounded border border-secondary" alt="First Slide">
        <div id="carrusel" class="carousel-caption d-none d-md-block border border-light border-left-0 border-bottom-0">
          <h5>Producto 1</h5>
        </div>
      </div>
      <div class="carousel-item mx-auto">
        <img src="img/handbag.jpg" class="d-block w-100 rounded border border-secondary" alt="Second Slide">
        <div id="carrusel" class="carousel-caption d-none d-md-block border border-light border-left-0 border-bottom-0">
          <h5>Producto 2</h5>
        </div>
      </div>
  </div>
  </div>
</div>
</div>


<div class="row">
  <div class="col thumbnail">
    <img id="heels" class="rounded border border-secondary" src="img/heels.jpg">
    <div id="heelsCaption"class="caption d-block border border-light">
      <h3>Accesorios</h3>
    </div>
    <img id="handbag" class="rounded border border-secondary" src="img/handbag.jpg">
    <div id="handbagCaption"class="caption d-block border border-light">
      <h3>Abrigos</h3>
    </div>
  </div>
</div>

<div class="row">
  <div class="col thumbnail">
    <img id="heelsu" class="rounded border border-secondary" src="img/heels.jpg">
    <div id="heelsCaption"class="caption d-block border border-light">
      <h3>Tendencias</h3>
    </div>
  </div>
</div>

<div class="row">

  <div id="blog" class="col">
    <nav  class="navbar-light">
      <a class="navbar-brand" href="#">
         <img src="img/blog.png" alt="Blog Logo" height="80">
      <h3>Fitness y lifestyle</h3>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Unirse</a>
        </li>
    </nav>
  </div>
</div>

<div id="fitness" class="row">

  <div class="col">
    <div class="card">
    <img class="card-img-top" src="img/heels.jpg">
    <div class="card-body">
      <h5 class="card-title">Titulo</h5>
      <p class="card-text">
        bla bla bla
      </p>
          <p class="card-text"><small class="text-muted">Last update 4 mins</small></p>
    </div>
  </div>
</div>

<div class="col">
  <div class="card">
  <img class="card-img-top" src="img/heels.jpg">
  <div class="card-body">
    <h5 class="card-title">Titulo</h5>
    <p class="card-text">
      bla bla bla blablablalblalbalblalblalblalblalblalblalblalblablalbalblalblalblalblalbalblalblalblalblaba
    </p>
    <p class="card-text"><small class="text-muted">Last update 4 mins</small></p>
  </div>
</div>
</div>

<div class="col">
  <div class="card">
  <img class="card-img-top" src="img/heels.jpg">
  <div class="card-body">
    <h5 class="card-title">Titulo</h5>
    <p class="card-text">
      bla bla bla
    </p>
        <p class="card-text"><small class="text-muted">Last update 4 mins</small></p>
  </div>
</div>
</div>
</div>

<div id ="carouselControls" class="row">
<div  class="row justify-content-center">
  <div class="col">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

    <!-- wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active mx-auto">
        <img src="img/friends.jpg" class="d-block w-100" alt="friends">
        <div id="ultimo" class="carousel-caption d-none d-md-block border border-light">
          <h5 class="text-uppercase">Lo Último</h5>
        </div>
      </div>
      <div class="carousel-item mx-auto">
        <img src="img/handbag.jpg" class="d-block w-100" alt="paris">
        <div id="ultimo" class="carousel-caption d-none d-md-block border border-light">
          <h5 class="text-uppercase">Lo Último</h5>
        </div>
      </div>
  </div>
     <!-- controls -->
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</div>
</div>
</div>

<div id="productText" class="row ml-2">
  <h3>Productos Recomendados</h3>
</div>

<div id="products" class="row">

  <div class="col">
    <div class="card">
    <img src="img/user.png" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Cosa</h5>
      <p class="card-text">
        Precio
      </p>
    </div>
  </div>
</div>

<div class="col">
  <div class="card">
  <img src="img/user.png" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Titulo</h5>
    <p class="card-text">
      bla bla bla
    </p>
  </div>
</div>
</div>

<div class="col">
  <div class="card">
  <img src="img/user.png" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Titulo</h5>
    <p class="card-text">
      bla bla bla
    </p>
  </div>
</div>
</div>

<div class="col">
  <div class="card">
  <img src="img/user.png" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Titulo</h5>
    <p class="card-text">
      bla bla bla
    </p>
  </div>
</div>
</div>

</div>
</div>

<div id="footer" class="container-fluid bg-dark">
<footer class="page-footer font-small pt-4">

  <div class="container-fluid text-center text-md-left">

    <div class="row">

      <div class="col">

        <h5>Atencion al Cliente</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">Formas de pago</a>
          </li>
          <li>
            <a href="#!">Envio</a>
          </li>
          <li>
            <a href="#!">Devoluciones</a>
          </li>
          <li>
            <a href="#!">Contacto</a>
          </li>
        </ul>
    </div>


      <div class="col">

        <h5>Sobre Nosotros</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">Acerca de Nosotros</a>
          </li>
          <li>
            <a href="#!">Nuestras Tiendas</a>
          </li>
          <li>
            <a href="#!">Prensa</a>
          </li>
        </ul>
    </div>


      <div id="rouseWorld" class="col ">

        <h5>Le Rousse World</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">Buscador de Tiendas</a>
          </li>
          <li>
            <a href="#!">Experiencias</a>
          </li>
          <li >
            <a href="#!">Rousse-Le-croix</a>
          </li>
          <li>
            <a href="#!">My Rousse</a>
          </li>
        </ul>
    </div>


      <div id="rouseWorld" class="col">

        <h5>Legal and Cookies</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">Terminos y Condiciones</a>
            </li>
          <li>
            <a href="#!">Politica de Privacidad</a>
          </li>
          <li>
            <a href="#!">Politica de cookies</a>
          </li>
        </ul>
    </div>
  </div>
</div>

<div id="mailRow" class="row">
  <div class="col">
    <form>
  <div class="form-group">
      <label for="exampleInputEmail1">Enter your email to win 10% disccount</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>


<div id="socialMediaRow" class="row">
  <div class="col d-inline-flex flex-row-reverse">
  <div>
  <img id="facebook" src="img/facebook.png" width="40px" height="40px">
</div>
  <div>
  <img src="img/instagram.png" width="60px" height="60px">
</div>
<div>
  <img src="img/twitter.png" width="60px" height="60px">
</div>
 </div>
</div>


</footer>
</div>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<!--modules-->
<script type="text/javascript" src="js/app.js"></script>
<!--controllers-->
<script type="text/javascript" src="js/Controllers/shoppingCartController.js"></script>
<script type="text/javascript" src="js/Controllers/index.js"></script>
<!--interactivity-->
<script type="text/javascript" src="js/main1.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

</html>
