<!DOCTYPE html>
<html>

  <head>
    <title>App de Compra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular-route.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="public/style.css">
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
            <li class="nav-item">
              <a class="nav-link" href="index.php">Le Rousse</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="#">Ultima Semana</a>
              </li>
            <li class="nav-item active">
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
      <div class="container" ng-app="shoppingCart" ng-controller="shoppingCartController" ng-init="loadProduct(); fetchCart();">

        <form id="shoppingForm" method= "post">
        <div class="imagesContainer">
        <div class="productCard">
        <div class="row">
          <div class="col-md-3"  ng-repeat="product in products">
            <div class="imgContainer">
              <img ng-src="img/{{ product.img }}" class="img-responsive"/><br />
              <h4 class="text">{{ product.name }}</h4>
              <h4 class="text-dark">{{ product.price | currency : "€" }}</h4>
              <input class="btn btn-dark form-control" type="button" name="añadir" value="Añadir" ng-click="addtoCart(product)"/>
            </div>
          </div>
        </div>
    </div>
      </form>
        <br />

        <div class="counter">
        <h3 align="center">Tu carrito</h3>
        <div class="table-responsive" id="order_table">
          <table class="table table-bordered table-striped">
            <tr>
              <th width="40%">Product Name</th>
              <th width="10%">Quantity</th>
              <th width="20%">Price</th>
              <th width=15%>Total</th>
              <th width="5%">Action</th>
            </tr>
            <tr ng-repeat="cart in carts">
              <td>{{ cart.product_name }}</td>
              <td>{{ cart.product_quantity }}</td>
              <td>{{ cart.product_price }}</td>
              <td>{{ cart.product_quantity * cart.product_price | currency : "€"}}</td>
              <td><button type="button" name="remove_product" class="btn btn-danger btn-xs" ng-click="removeItem(cart.product_id)">Eliminar</button>
             </td>
            </tr>
            <tr>
              <td colspan="3" align="right">Total</td>
              <td colspan="2">{{ setTotals () | currency : "€" }}</td>
            </tr>
          </table>
    </div>
  </div>
</div>
</div>


    <!-- Modules -->
    <script src="js/app.js"></script>

    <!-- Controllers -->
    <script src="js/controllers/shoppingCartController.js"></script>
</body>

</html>
