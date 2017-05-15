
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
                                    <a tabindex="-1" href="/index">Mon espace</a>
                                </li>

                                <li>
                                    <a tabindex="-1" href="/message">Messages</a>
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
                                    <a tabindex="-1" href="/clients">Liste des Clients</a>
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
                                    <a tabindex="-1" href="/produits">Liste Produits</a>
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
                                    <a tabindex="-1" href="/categorie">Liste des Categories</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="#">Recherche</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="ajouterCategorie">Nouvelle Categorie</a>
                                </li>
                            </ul>
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
                        <li class="active">
                            <a href="index.html"><i class="icon-chevron-right"></i> Place de Marche</a>
                        </li>
    
                        <li>
                            <a href="/clients"><span class="badge badge-success pull-right">731</span> Clients</a>
                        </li>
						<li>
                            <a href="/vendeurs"><span class="badge badge-success pull-right">812</span> Vendeurs</a>
                        </li>
                        
                        <li>
                            <a href="/produits"><span class="badge badge-info pull-right">27</span> Produits</a>
                        </li>
                        
                        <li>
                            <a href="/categorie"><span class="badge badge-info pull-right">2,221</span> Categories</a>
                        </li>
                        <li>
                            <a href="/message"><span class="badge badge-info pull-right">27</span> Messages</a>
                        </li>
                        <li>
                            <a href="/suggestion"><span class="badge badge-info pull-right">12</span> Suggestions Categorie</a>
                        </li>
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
                        <a class="thumbnail">
                            <img src="admin/images/aa.jpg">
                        </a>
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