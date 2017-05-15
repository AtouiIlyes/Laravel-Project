
<html>
<head>
        <title>Ajouter Categorie</title>
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
                        <a href="/utilisateurs" role="button" class="dropdown-toggle" data-toggle="dropdown">Clients <i class="caret"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="/utilisateurs">Liste des  Clients</a>
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
                                <a tabindex="-1" href="/ajouterCategorie">Nouvelle Categorie</a>
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
                            <a href="/index"><i class="icon-chevron-right"></i> Place de Marche</a>
                        </li>
    
                        <li>
                            <a href="/utilisateurs"><span class="badge badge-success pull-right">731</span> Clients</a>
                        </li>
						<li>
                            <a href="/vendeurs"><span class="badge badge-success pull-right">812</span> Vendeurs</a>
                        </li>
                        
                        <li>
                            <a href="/produits"><span class="badge badge-info pull-right">27</span> Produits</a>
                        </li>
                        <li>
                            <a href="/categorie"><span class="badge badge-info pull-right">11</span> Categories</a>
                        </li>

                        <li>
                            <a href="/message"><span class="badge badge-info pull-right">27</span> Message</a>
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
											<a href="/categorie">Categorie</a>
											<span class="divider">/</span>
											</li>
											<li>
											<a href="/ajouterCategorie">Ajouter categorie</a>
											</li>
	                                </ul>
                            	</div>
                        	</div>
                    	</div>
                  
        <div class="span9" id="content">
					
                 <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Ajouter Categorie</div>
                            </div>
                     <f:form name="form_cat" action=""  method="post" modelAttribute="categorie">
                            <div class="block-content collapse in">
                                <div class="span12">
  									<div class="control-group">
  								<label class="control-label">Libelle</label>
  								<div class="controls" >
  									<input type="text" name="libelle" value="${categorie.libelle}" data-required="1" class="span6 m-wrap"/>
  									<div class="btn-group open">
											  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
											  <ul class="dropdown-menu" >
												<li><a onclick="javascript:insertCat();">inserer</a></li>
												
											  </ul>
											</div>
  								</div>
  								<br /><br /><br /><br />
								  </div>
                            </div>
                        </div>
                   </f:form>
                        <!-- /block -->
                    </div>
                </div>
                
                
			 <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Sous Categorie</div>
                            </div>
                      
                            <div class="block-content collapse in">
                                <div class="span12">
                                
                               <f:form name="form_SousCat" action="insert_SousCat.html"  method="post" modelAttribute="sousCategorie">  
                                
                                <div class="control-group">
  								<label class="control-label">Categorie<span class="required">*</span></label>
  								<div class="controls">
  								<select class="span6 m-wrap" name="categorieMere.idCategorie" >
  									<option  value="0" onclick="javascript:window.location.href='getSousCategorie.html?id=0'">Selectionner une categorie</option>
  									<c:forEach items="${categories}" var="categorie" >
  										
  										<option   <c:if test="${idCategorie==categorie.idCategorie}">selected="selected"</c:if>
  										value="${categorie.idCategorie}" onclick="javascript:window.location.href='getSousCategorie.html?id=${categorie.idCategorie}'" > ${categorie.libelle}</option>
  										
  									</c:forEach>
  									</select>
  								</div>
  							</div> 
                                    <div class="control-group">
  								<label class="control-label">Sous Categorie</label>
  								<div class="controls">
  									<input type="text"  placeholder="taper Sous Categorie" name="libelle" value=""  data-required="1" class="span6 m-wrap"/>
									<button type="submit" class="btn btn-success">inserer</button>
  								</div>
  							</div>
  							</f:form>

                                </div>
                            </div>
               
                        </div>
                        <!-- /block -->
                    </div>
          </div>
                </div>
            </div>
            <hr>
            <footer>
                <p class="pull-left">Copyright  2016 E-SOUK Atoui Ilyes . Tout les droits sont reserves .</p>
            </footer>
        </div>
<!--/.fluid-container-->
<script src="{{URL::asset('admin/vendors/jquery-1.9.1.min.js')}}"></script>
<script src="{{URL::asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('admin/vendors/easypiechart/jquery.easy-pie-chart.js')}}"></script>
<script src="{{URL::asset('admin/assets/scripts.js')}}"></script>
<script src="{{URL::asset('admin/vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('admin/assets/DT_bootstrap.js')}}"></script>
        <script>
        $(function() {
		
        });
     function deleteCat(id){
         	if (confirm("Etes vous s�r de vouloir supprimer cet categorie ?")){
         		window.location.href='deleteCat.html?id='+id;
         }
    	}
        
        function insertCat()
        {
        	document.forms["form_cat"].action="insert_cat.html";
        	document.forms["form_cat"].submit();
        	//var libelle = document.forms["form_cat"].elements["libelle"].value;
        	//window.location.href='insert_cat.html?libelle='+libelle;
        	
        }
       
        function updatecat(id)
        {
           document.forms["form_cat"].action="updatecat.html";
           document.forms["form_cat"].submit();
        }
        
        
       
      function delete_Cat(id)
        {
        	document.forms["form_cat"].action="delete_Cat.html";
            alert("categorie est supprim� avec succ�s")
            document.forms["form_cat"].submit();
       }
      
    
        
        function getSousCategorie (id){
        	windows.location.href='getSousCategorie.html?id='+id;
        }
        
    	
        
        </script>
    </body>
</html>