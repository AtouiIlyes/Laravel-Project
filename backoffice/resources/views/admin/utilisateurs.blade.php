

<html>
 <head>
        <title>Clients</title>
        <!-- Bootstrap -->
        <link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="admin/assets/styles.css" rel="stylesheet" media="screen">
        <link href="admin/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <script src="admin/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
											<span class="divider">/</span>
											</li>
											<li>
											<a href="/clients">Clients</a>
											</li>
	                                </ul>
                            	</div>
                        	</div>
                    	</div>
                  
                  <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Clients</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <div class="table-toolbar">

                                      <div class="btn-group pull-right">
                                         <button class="btn dropdown-toggle" data-toggle="dropdown">Outils <span class="caret"></span></button>
                                         <ul class="dropdown-menu">
                                            <li><a href="#">Imprimer</a></li>
                                            <li><a href="#">Enregistrer en PDF</a></li>
                                            <li><a href="#">Exporter vers Excel</a></li>
                                         </ul>
                                      </div>
                                   </div>
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th >id</th>
												<th>NOM </th>
												<th>PRENOM</th>
												<th>Email</th>
                                                <th>Mot de passe</th>
                                                <th>Date de Naissance</th>
												<th>TELEPHONE</th>
                                                <th>Adresse</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
										@foreach($clients as $client)
											<tr class="odd gradeX">
												<td>{{$client->id}}</td>
												<td>{{$client->nom}}</td>
												<td>{{$client->prenom}}</td>
												<td>{{$client->email}}</td>
                                                <td><input type="password" name="lname" disabled value="{{$client->passwd}}"> </td>
                                                <td>{{$client->date_de_naissance}}</td>
												<td >{{$client->telephone}}</td>
                                                <td>{{$client->adresse}}</td>
												<td class="center">
													<button class="btn btn-primary btn-mini" onclick="location.href='modifierClient.blade.php'" ><i class="icon-refresh icon-white"></i>Modifier</button>
													<button class="btn btn-danger btn-mini" onclick="javascript:deleteAdmin (${admin.idUtilisateur})"><i class="icon-remove icon-white"></i>Supprimer</button>
												</td>
											</tr>
										@endforeach
											
										
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
            <footer>
                <p class="pull-left">Copyright  2016 E-SOUK Atoui Ilyes . Tout les droits sont reserves .</p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <script src="admin/vendors/jquery-1.9.1.min.js"></script>
        <script src="admin/bootstrap/js/bootstrap.min.js"></script>
        <script src="admin/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="admin/assets/scripts.js"></script>
        <script src="admin/vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="admin/assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
		
        });
        
        function deleteAdmin(id){
        	if (confirm("Etes vous s�r de vouloir supprimer cet utilisateur?")){
        		window.location.href='deleteAdmin.html?id='+id;
        	}
        }
        </script>
    </body>
</html>