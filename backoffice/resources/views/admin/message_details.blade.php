
<html class="no-js">

<head>
    <title>Place de marche</title>
    <!-- Bootstrap -->
    <link href="{{URL::asset('admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{URL::asset('admin/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{URL::asset('admin/assets/styles.css')}}" rel="stylesheet" media="screen">
    <link href="{{URL::asset('admin/assets/DT_bootstrap.css')}}" rel="stylesheet" media="screen">
    <script src="{{URL::asset('admin/vendors/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
</head>


<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <img src="admin/images/dd.png">
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <c:out value="${utilisateur.prenomUtilisateur} ${utilisateur.nomUtilisateur}"></c:out> <i class="caret"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="/index">Mon Espace</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a tabindex="-1" href="/login">Deconnexion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav">

                    <li class="dropdown">
                        <a href="/clients" role="button" class="dropdown-toggle" data-toggle="dropdown">Clients <i class="caret"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="/clients">Liste des  Clients</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#">Recherche</a>
                            </li>


                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/vendeurs" role="button" class="dropdown-toggle" data-toggle="dropdown">Vendeurs <i class="caret"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="/vendeurs">Liste Vendeurs</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#">Recherche</a>
                            </li>


                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/produits" role="button" class="dropdown-toggle" data-toggle="dropdown">Produits <i class="caret"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="F/produits">Liste Produits</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#">Recherche</a>
                            </li>


                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/categorie" role="button" class="dropdown-toggle" data-toggle="dropdown">Categorie <i class="caret"></i>

                        </a>
                        <ul class="dropdown-menu">

                            <li>
                                <a tabindex="-1" href="/categorie">Liste Categories</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#">Recherche</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="/ajouterCategorie">Nouvelle Categorie</a>
                            </li>
                        </ul>
                    </li>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3" id="sidebar">
            <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">


                <div class="col-sm-3">
                    <div class="left-sidebar">


                        <div class="breadcrumbs">
                            <h2>Messages</h2>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <a href="/index"><i class="icon-chevron-right"></i> Home</a>
                                </li>
                                <li class="active">Message</li>
                                <button type="submit" class="btn btn-danger" onclick="self.location.href='/nouveau_message'">Nouveau Message</button>

                            </ol>
                        </div>
                        <div ><!--category-productsr-->
                            <div >
                                <div >
                                    <h4 >
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><i class="fa fa-p"></i></span>
                                            Boite de reception
                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" >
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="/message">Messages recues </a></li>
                                            <li><a href="/message">Messages envoyes </a></li>
                                            <li><a href="/message">Brouillons </a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </ul>
        </div>

        <!--/span-->
        <div class="span9" id="content">
            <div class="row-fluid">
                <div class="navbar">
                    <div class="navbar-inner">
                        <ul class="breadcrumb">
                            <i class="icon-chevron-left hide-sidebar"><a rel="tooltip" title="Hide Sidebar" href="#">&nbsp;</a></i>
                            <i style="display:none;" class="icon-chevron-right show-sidebar"><a rel="tooltip" title="Show Sidebar" href="#">&nbsp;</a></i>
                            <li>
                                <a href="/index">Accueil</a>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="container">


                    <section>
                        <div class="col-sm-9 padding-right" >
                            <div class="panel panel-heading">

                                <div class="breadcrumb">
                                    <h2><a href="">Foulen Ben Foulen</a></h2>
                                    <p>Email : atoui.ilyes@gmail.com</p>


                                </div>

                                <div class="panel panel-body">
                                    <h1 ><u> Vente</u>  </h1>

                                    <i class="breadcrumb">  29/07/2016 15:29</i>

                                </div>

                                <div class="panel panel-footer">

                                    <div class="cart_price">
                                        <h5>
                                            <p>
                                                Hello Atoui,

                                                Thank you for registering at ShapeBootstrap.
                                                Your account is created and must be activated before you can use it.
                                                To activate the account select the following link or
                                                copy-paste it in your browser: https://shapebootstrap.net/create-an-account?task=registration.activate&token=a6bae753c0847674063e02e2a0f32675

                                                After activation you may login to
                                                https://shapebootstrap.net/ using the following username and the password you entered during registration:

                                            </p>
                                        </h5>

                                    </div>

                                </div>

                            </div>
                    </section>
                </div>


            </div>
        </div>
    </div>
    <hr>
    <footer>
        <p class="pull-left">Copyright  2016 E-SOUK Atoui Ilyes . Tout les droits sont reserves .</p>
    </footer>
    <!--/.fluid-container-->
    <script src="{{URL::asset('admin/vendors/jquery-1.9.1.min.js')}}"></script>
    <script src="{{URL::asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('admin/vendors/easypiechart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{URL::asset('admin/assets/scripts.js')}}"></script>
    <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
    </script>
</body>

</html>