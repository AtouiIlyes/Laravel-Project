
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
                                        <a tabindex="-1" href="/clients">Clients</a>
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
                        <div class="breadcrumbs">
                            <ol class="breadcrumb">
                                <li><a href="/index">Home</a></li>
                                <li class="active">Message</li>
                            </ol>
                        </div>

                        <div class="col-sm-3">
                            <div class="left-sidebar">
                                <h2>Messages</h2>

                                <button type="submit" class="btn btn-danger" onclick="self.location.href='/nouveau_message'">Nouveau Message</button>

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
	                                    <a rel="tooltip" title="Hide Sidebar" href="#"><i class="icon-chevron-left hide-sidebar">&nbsp;</i></a>
	                                    <i style="display:none;" class="icon-chevron-right show-sidebar"><a rel="tooltip" title="Show Sidebar" href="#">&nbsp;</a></i>
	                                    <li>
	                                        <a href="/index">Acceuil</a>
	                                        <span class="divider"></span>	
	                                    </li>


	                                </ul>
                            	</div>
                        	</div>
                    	</div>
                    	 
                    <div class="row-fluid">
                        <div class="container">


                            <section>
                                <div class="container">
                                    <div class="row">

                                        </div>
                                        <div class="col-sm-9 padding-right" >
                                            <div class="table-responsive cart_info">
                                                <table class="table table-condensed">
                                                    <thead>
                                                    <tr class="cart_menu">
                                                        <td class="description">      </td>
                                                        <td class="description"><h4><i class="fa fa-user">  Utilisateur</i></h4></td>
                                                        <td class="description"><h4><i class="fa fa-circle">   Objet</i></h4></td>
                                                        <td ><h4><i class="fa fa-envelope-o">  Message</i></h4></td>
                                                        <td class="description"><h4><i class="fa fa-circle">   </i></h4></td>


                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach ($messages as $message)
                                                    <tr>
                                                        <td class="cart_price">

                                                        </td>
                                                        <td class="cart_price">
                                                            <h4><a href="">{{$message->nom_sender}} {{$message->prenom_sender}}</a></h4>
                                                            <p>Email : {{$message->email_sender}}</p>
                                                        </td>
                                                        <td class="cart_price">
                                                            {{$message->objet}}
                                                        </td>
                                                        <td class="cart_price">
                                                            <a href="/message_details">
                                                                    <?php $size =strlen($message);

                                                                    ?>

                                                                    @if ($size > 30)
                                                                        {{ str_limit($message->message, 30)  }}
                                                                    @else
                                                                        {{$message->message}}
                                                                    @endif
                                                                    </a>
                                                        </td>
                                                        <td class="cart_price">
                                                            {{$message->created_at}}</a>
                                                        </td>



                                                    </tr>
                                                     @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                            </section> <!--/#cart_items-->
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