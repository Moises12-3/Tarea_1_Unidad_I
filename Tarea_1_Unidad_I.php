<!DOCTYPE html>
<html ng-app="MyFirstApp">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="/angular/angular.min.js"></script>
    <script src="/angular_cdn.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
        var app = angular.module("MyFirstApp",[]);
        app.controller("FirstController", function($scope){
          $scope.nombre ="uriel",
          $scope.Nacionalidad ="Nicaragua"
          $scope.Departamentto ="Chinandega",
          $scope.Nombre ="Aaron Moises",
          $scope.Apellido ="Carrasco Thomas",
          $scope.Ciudad ="Chinandega",
          $scope.Nombre_completo ="Aaron Moises Carrasco Thomas.",
          $scope.Nombre_completo2 ="Estudiante de II Año, Tecnico Superior en Desarrollo Web",
          $scope.Nac ="Nacionalidad de Nicaragua",
          $scope.Nac2 ="Nicaragua, oficialmente llamado República de Nicaragua, es un país ubicado en Centroamérica. Su capital es la ciudad de Managua, aunque anteriormente era León. Está compuesta por quince departamentos y dos regiones autónomas: Costa Caribe Norte y Costa Caribe Sur. Se ubica en el hemisferio norte, entre la línea ecuatorial y el trópico de Cáncer, aproximadamente entre los 11° y los 15° de latitud Norte y respecto al meridiano de Greenwich, entre los 83° y los 88° de longitud Oeste.",
          $scope.Dep1 ="Departamento Chinandega",
          $scope.Dep2 =" es un municipio y una ciudad de la República de Nicaragua, cabecera del departamento de Chinandega, en la región occidental del Pacífico de este país centroamericano, la región de mayor fuerza económica después de la capital de ",
          $scope.Dep3 =". Es conocida como ",
          $scope.Dep_Man_2="Managua",
          $scope.Dep4="Ciudad de las Naranjas"
        });
    </script>
    <style>
      html {
        margin: 0px;
background: url(img/fondo.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
padding: 90px;
}
      body{
      }
      .perfil{
        width: 20%;
        height: 20%;
      }
      .Bandera_de_Chinandega{
        width: 20%;
        height: 20%;
      }
      .Escudo_de_Chinandega{
        width: 20%;
        height: 20%;
      }
      button{
        font-family: Georgia, 'Times New Roman', Times, serif;
        color: navy;
        background-color: red;
      }
      button:hover{
        font-family: Georgia, 'Times New Roman', Times, serif;
        color: white;
        background-color: navy;
      }
      .fondo_class{
        /*width: 100%;
        margin: 12px;
        padding: 25px;
        background-color: transparent;
        margin: 50px 50px 50px 50px;
        padding: 10% 10% 10% 10%;
        margin: 10% 10% 10% 10%;*/
      }
      .acordeon2{
        width: 100%;
        margin: 12px;
        padding:  24px 24px 24px 24px;
        /*margin: 50px 50px 50px 50px;
        padding: 10% 10% 10% 10%;
        margin: 10% 10% 10% 10%;*/
      }
      .{
        
      }
      .{
        
      }
      .{
        
      }
    </style>
</head>
<body ng-controller="FirstController">
  <div class="fondo_class">
  <div class="acordeon2">
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h1>{{"Nombre " + "y " + "Apellido"}}</h1>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <img class="perfil" src="img/foto_de_perfil.jpg" alt="">
            <h2><strong>{{Nombre_completo}}</strong></h2> <br> <h3>{{Nombre_completo2}}</h3> 
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h1>{{"Nacionalidad "}}</h1>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <img class="Bandera_de_Chinandega" src="img/Bandera_de_Chinandega.png" alt="">
            <h2><strong>{{Nac}}</strong></h2> <h3>{{Nac2}}</h3>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h1>{{"Departamento "+"y"+" Ciudad "}}</h1>
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <img class="Escudo_de_Chinandega" src="img/Escudo_de_Chinandega.svg.png" alt="">
            <h2><strong>{{Dep1}}</strong></h2><h3>{{Dep2}}<code>{{Dep_Man_2}}</code>{{Dep3}}<code>{{Dep4}}</code>.</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
        
    
</body>
</html>