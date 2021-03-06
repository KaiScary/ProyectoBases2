<?php
    $link =mysqli_connect("localhost","root","");
    if($link){
        mysqli_select_db($link,"ferreteriacolmex");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Administrador - Ferretería Colmex</title>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <!-- Bootstrap core CSS-->
        <link href="/ProyectoBases2/resources/vendor/bootstrap/css/bootstrap1.min.css" rel="stylesheet"/>
        <!-- Custom fonts for this template-->
        <link href="/ProyectoBases2/resources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- My styles-->
        <link href="/ProyectoBases2/resources/css/base.css" rel="stylesheet"/>
        <link href="/ProyectoBases2/resources/css/display-lg.css" rel="stylesheet"/>
        <link href="/ProyectoBases2/resources/css/display-md.css" rel="stylesheet"/>    
        <link href="/ProyectoBases2/resources/css/display-sm.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="wrapper">
            <!-- Barra lateral en tamaños grandes y medianos  -->
            <nav id="sidebar">
                <div class="header">
                    <h4>
                        <img id="sidebarCollapse" src="/ProyectoBases2/resources/images/LogoCirculo1.png"/>
                        <a data-toggle="collapse" href="#bienvenida" role="button">StockManage</a>
                    </h4> 
                    <strong id="sm">
                        <a data-toggle="collapse" id="linkSm" >
                            <img src="/ProyectoBases2/resources/images/LogoCirculo1.png"/>
                        </a>
                    </strong>
                </div>
                <ul class="list-unstyled components">
                    <li>
                        <a data-toggle="collapse" href="#add" role="button" aria-expanded="false" aria-controls="add" class="nav-link"><i class="fa fa-plus"></i> Agregar </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#list" role="button" aria-expanded="false" aria-controls="list" class="nav-link"><i class="fa fa-list-alt"></i> Listar </a>
                    </li>
                    <li>
                        <a href="/ProyectoBases2/paginas/factura/List.php" class="nav-link"><i class="fa fa-book"></i> Facturas </a>
                    </li>
                     <li>
                        <a data-toggle="collapse" href="#settings" role="button" aria-expanded="false" aria-controls="settings" class="nav-link"><i class="fa fa-support"></i> Funciones Base </a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="modal" data-target="#confirm" href="">
                            <i class="fa fa-power-off" id="cerrar"></i><span class="nav-link-text">Cerrar sesión</span>
                        </a>
                    </li>
                </ul>
                <div class="footer">
                    <h6>Ferretería COLMEX S.A.S &copy;</h6>
                </div>
            </nav>
        
        
            <!--Navbar para telefonos -->
            <nav class="ocultar navbarSh navbar navbar-expand-lg navbar-light bg-light">
                <a data-toggle="collapse" class="navbar-brand" href="#bienvenida">StockManage</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#add" role="button" aria-expanded="false" aria-controls="add" class="nav-link"><i class="fa fa-plus"></i> Agregar </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#list" role="button" aria-expanded="false" aria-controls="list" class="nav-link"><i class="fa fa-list"></i> Listar </a>
                        </li>
                        <li class="nav-item">
                            <a href="/ProyectoBases2/paginas/factura/List.php" class="nav-link"><i class="fa fa-book"></i> Facturas </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#settings" role="button" aria-expanded="false" aria-controls="settings" class="nav-link"><i class="fa fa-support"></i> Funciones Base </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#confirm" href="">
                                <i class="fa fa-fw fa-power-off"></i><span class="nav-link-text">Cerrar sesión</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido de la pagina  -->
            <div id="content" class="background-page">
                <!--Espacio para "inicio"-->
                <div class="collapse" id="bienvenida">
                    <div class="contenido">
                        <h2>¡Bienvenido!</h2>
                        <p>Aquí deberíamos poner información chévere, quiza algunas de las funciones anañiticas o una vista</p>
                    </div>
                </div>    


                <!--Contenido de listar cliente-->
                <div class="contenido">
                    <h1 class="titleCreate">Editar cliente.</h1>
                    <form>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="oldCliente">Cliente: </label>
                            <div class="col-md-5">
                                <!-- onchange="getInf()" -->
                                <select id="oldCliente" class="browser-default custom-select">
                                <option>---------------</option>
                                <?php
                                      $query_cliente=mysqli_query($link,"SELECT cliente_id, nombre, apellido from cliente;");
                                      while($row= mysqli_fetch_array($query_cliente)){
                                        //onclick='getInf()
                                          echo "<option value='".$row['cliente_id']."'>".$row['nombre']." ".$row['apellido']."</option>";
                                      }
                                  ?>
                              </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="nombre">Nombre del cliente: </label>
                            <div class="col-md-10">
                                <input id="nombre" class="form-control" required="false">
                            </div>
                            <label class="col-md-2 col-form-label" for="apellido">Apellido del cliente: </label>
                            <div class="col-md-10">
                                <input id="apellido" class="form-control" required="false">
                            </div>
                            <label class="col-md-2 col-form-label" for="telefono">Telefono del cliente: </label>
                            <div class="col-md-10">
                                <input id="telefono" class="form-control" required="false">
                            </div>
                        </div>
                        <!--Sección de la ubicación-->
                        <h1 class="titleCreate">Ubicación</h1>
                        <div class="form-group row">

                            <label class="col-md-2 col-form-label" for="departamento">Departamento: </label>
                            <div class="col-md-4">
                              <select id="departamento" class="browser-default custom-select" onchange="getCities()">
                                <option>---------------</option>
                                <?php
                                      $consulta_ubicacion=mysqli_query($link,"SELECT departamento_id, nombre_departamento from departamento;");
                                      while($row= mysqli_fetch_array($consulta_ubicacion)){
                                          echo "<option value='".$row['departamento_id']."'>".$row['nombre_departamento']."</option>";
                                      }
                                  ?>
                              </select>
                            </div>
                            <label class="col-md-1 col-form-label" for="ciudad">Ciudad: </label>
                            <div class="col-md-4">
                              <select id="ciudad" class="browser-default custom-select" onchange="getBarrio()">
                                <option>---------------</option>
                              </select>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="barrio">Barrio: </label>
                            <div class="col-md-4">
                              <select id="barrio" class="browser-default custom-select">
                                <option>---------------</option>
                              </select>
                            </div>
                            <label class="col-md-1 col-form-label" for="ubicacion">Dirección: </label>
                            <div class="col-md-4">
                              <select id="ubicacion" class="browser-default custom-select">
                                <option>---------------</option>
                              </select>
                            </div>
                        </div>
                        <!-- Botón de guardar -->
                        <button id="save" class="btn btn-ambar" onclick="editar()">Guardar</button>
                        <!-- Botón de mostrar todas las categorías -->
                        <a id="mostrar" class="btn btn-ambar" href="/ProyectoBases2/paginas/cliente/List.php">Mostrar clientes</a>
                        <!-- Botón de inicio -->
                        <a class="btn btn-ambar" href="/ProyectoBases2/administrador.html">Inicio</a>
                    </form>
                </div>

                <!--espacio agregar-->
                <div class="collapse" id="add">
                    <div class="contenido">
                        <h3>Agregar</h3>
                        <p>¿Te hace falta algo? No te preocupes, aquí puedes agregar lo que haga falta. Solo recuerda que tienes que 
                        ser un poco ordenado.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Proveedor</h5>
                                        <p class="card-text">Aquí va información acerca de algo.</p>
                                        <a href="/ProyectoBases2/paginas/proveedor/Create.php" class="btn btn-danger">Agregar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Cliente</h5>
                                        <p class="card-text">Aquí va información acerca de algo.</p>
                                        <a href="/ProyectoBases2/paginas/cliente/Create.php" class="btn btn-danger">Agregar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 ">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Producto</h5>
                                        <p class="card-text">Aquí va información acerca de algo.</p>
                                        <a href="/ProyectoBases2/paginas/producto/Create.php" class="btn btn-danger">Agregar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="offset-md-2 col-sm-12 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Empleado</h5>
                                        <p class="card-text">Aquí va información acerca de algo.</p>
                                        <a href="/ProyectoBases2/paginas/empleado/Create.php" class="btn btn-danger">Agregar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Categoria de producto</h5>
                                        <p class="card-text">Aquí va información acerca de algo.</p>
                                        <a href="/ProyectoBases2/paginas/categoria/Create.html" class="btn btn-danger">Agregar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Espacio Listar-->
                <div class="collapse" id="list">
                    <div class="contenido">
                        <h3>Listas</h3>
                        <p>Estos son las cosas mas importantes para listar, recuerda que puedes ver detalles, editar o eliminar los registros.</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Proveedor</h5>
                                        <p class="card-text">Aquí va información acerca de algo.</p>
                                        <a href="/ProyectoBases2/paginas/proveedor/List.php" class="btn btn-danger">Mostrar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Cliente</h5>
                                        <p class="card-text">Aquí va información acerca de algo.</p>
                                        <a href="/ProyectoBases2/paginas/cliente/List.php" class="btn btn-danger">Mostrar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Producto</h5>
                                        <p class="card-text">Aquí va información acerca de algo.</p>
                                        <a href="/ProyectoBases2/paginas/producto/List.php" class="btn btn-danger">Mostrar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-sm-12 offset-md-2 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Empleado</h5>
                                        <p class="card-text">Aquí va información acerca de algo.</p>
                                        <a href="/ProyectoBases2/paginas/empleado/List.php" class="btn btn-danger">Mostrar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Categoria de producto</h5>
                                        <p class="card-text">Aquí va información acerca de algo.</p>
                                        <a href="/ProyectoBases2/paginas/categoria/List.php" class="btn btn-danger">Mostrar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <!--Espacio funciones basicas-->
            <div class="collapse" id="settings">
                    <div class="contenido">
                        <h3>Funciones Base</h3>
                        <p>Aquí encontraras información que quizá te interece sin embargo te recomendamos no tocar mucho de esto y si lo haces
                        que sea con ayuda de un experto.</p>
                        <ul class="list-group">
                            <li class="list-group-item" aria-disabled="true">
                                <a href="/ProyectoBases2/paginas/departamento/List.php">Lista de Departamentos</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/ProyectoBases2/paginas/ciudad/List.php">Lista de Ciudades</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/ProyectoBases2/paginas/barrio/List.php">Lista de Barrios</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/ProyectoBases2/paginas/ubicacion/List.php">Lista de Direcciones</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/ProyectoBases2/paginas/cargo/List.php">Lista de Cargos</a>
                            </li>
                        </ul>
                    </div>
            </div>
            </div>
            <!--Letrero de confirmación en cierre de sesion-->
            <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>¿Seguro que quieres cerrar sesión?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-ambar" href="index.xhtml">Cerrar sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- Bootstrap core JavaScript-->
        <script src="/ProyectoBases2/resources/vendor/jquery/jquery.min.js"></script>
        <script src="/ProyectoBases2/resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="/ProyectoBases2/resources/vendor/jquery-easing/jquery.easing.min.js"></script>
        <!--Mis scripts-->
        <script src="/ProyectoBases2/resources/js/controlBarra.js"></script>
        <script src="/ProyectoBases2/Logica/Javascript/Cliente.js"></script>
    </body>
</html>