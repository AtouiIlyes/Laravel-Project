
<html>
<head>
        <title>Editer Vendeur</title>
    <!-- Bootstrap -->
    <link href="{{URL::asset('admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{URL::asset('admin/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{URL::asset('admin/vendors/easypiechart/jquery.easy-pie-chart.css')}}" rel="stylesheet" media="screen">
    <link href="{{URL::asset('admin/assets/styles.css')}}" rel="stylesheet" media="screen">
    <link href="{{URL::asset('admin/assets/DT_bootstrap.css')}}" rel="stylesheet" media="screen">
    <link href="{{URL::asset('admin/assets/DT_bootstrap.css')}}" rel="stylesheet" media="screen">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="{{URL::asset('http://html5shim.googlecode.com/svn/trunk/html5.js')}}"></script>
    <![endif]-->
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
                    <a class="brand" href="#"> </a>
                     <img src="admin/images/dd.png">
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <c:out value="${utilisateur.prenomUtilisateur} ${utilisateur.nomUtilisateur}"/> <i class="caret"></i>

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
            <div class="block-content collapse in">   
           <div class="row-fluid">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><h2>Modifier un Vendeur</h2></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
					<!-- BEGIN FORM-->
					<c:if test="${admin.idUtilisateur==0}">
						<c:set var="method" value="insertAdmin.html"></c:set>
					</c:if>
					<c:if test="${admin.idUtilisateur!=0}">
						<c:set var="method" value="updateAdmin.html"></c:set>
					</c:if>
					<f:form action="${method}" methode="post" cssclass="form-horizontal" modelAttribute="admin" onsubmit="return verifForm(this)">
					<input type="hidden" name="idUtilisateur" value="${admin.idUtilisateur}">  
				
					<!-- hidden  qui permet de stocker le champ id et en cas ou on peut modifier le champ il permet de 
					                  de charger tous les champs  -->
				
						<fieldset>
							<div class="alert alert-error hide">
								<button class="close" data-dismiss="alert"></button>
								veuillez remplir ce champ
							</div>
							<div class="alert alert-success hide">
								<button class="close" data-dismiss="alert"></button>
								

							</div>
  							<div class="control-group">
  								<label class="control-label">Nom<span class="required"></span></label>
  								<div class="controls">
  									<input name="nomUtilisateur" value="${admin.nomUtilisateur}" type="text" placeholder="tapez votre nom" class="span6 m-wrap" required="required" onblur="verifnom(this)"/>
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Prenom<span class="required"></span></label>
  								<div class="controls">
  									<input name="prenomUtilisateur" value="${admin.prenomUtilisateur}" type="text" placeholder="tapez votre prenom" class="span6 m-wrap" required="required" onblur="verifprenom(this)"/>
  								</div>
  							</div>
							<div class="control-group">
  								<label class="control-label">Email<span class="required"></span></label>
  								<div class="controls">
  									<input name="email" value="${admin.email}" type="email" placeholder="tapez votre email" class="span6 m-wrap" required="required" onblur="verifemail(this)"/>
  								</div>
  							</div>
                            <div class="control-group">
                                <label class="control-label">Description</label>
                                <div class="controls">
                                    <input type="text" required="required" class="span6 m-wrap" value="${admin.tel}" placeholder="tapez votre T�l" name="tel" onblur="veriftel(this)">
                                </div>
                            </div>
							<div class="control-group">
  								<label class="control-label">Tel</label>
								<div class="controls">
  									<input type="tel" required="required" class="span6 m-wrap" value="${admin.tel}" placeholder="tapez votre T�l" name="tel" onblur="veriftel(this)">
  								</div>
  							</div>
                            <div class="control-group">
                                <label class="control-label">Adresse</label>
                                <div class="controls">
                                    <input type="text" required="required" class="span6 m-wrap" value="${admin.tel}" placeholder="tapez votre T�l" name="tel" onblur="veriftel(this)">
                                </div>
                            </div>
							<div class="control-group">
  								<label class="control-label">Mot de passe<span class="required"></span></label>
  								<div class="controls">
  									<input name="password" value="${admin.password}" type="password" placeholder="tapez votre mot de passe" class="span6 m-wrap" required="required" onblur="verifpassword(this)"/>
  								</div>
  							</div>
  							<div class="control-group">
  							<div class="form-actions">
  								<button type="submit" class="btn btn-primary">Valider</button>
  								<button  class="btn" type="reset">Annuler</button>
  							</div>
  							</div>
						</fieldset>
					</f:form>
					<!-- END FORM-->
				</div>
			    </div>
			</div>
                     	<!-- /block -->
		    </div>
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
                <script src="{{URL::asset('admin/assets/form-validation.js')}}"></script>
                <script type="text/javascript" src="{{URL::asset('admin/vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>

                <script>
        jQuery(document).ready(function() {   
     	   FormValidation.init();
     		});
        $(function() {
            
        });
        </script>
         <script>
        function surligne(champ, erreur)
        {
           if(erreur)
              champ.style.backgroundColor = "#fba";
           else
              champ.style.backgroundColor = "";
        }
        </script>
        
        <script>
        function verifemail (champ){
        	
        	   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
        	   if(!regex.test(champ.value))
        	   {
        	      surligne(champ, true);
        	      return false;
        	   }
        	   else
        	   {
        	      surligne(champ, false);
        	      return true;
        	   }
        }
        </script>
        
        <script>
        function veriftel(champ){
        	 var regex = /^[0-9]{6,16}$/
        	 if (!regex.test(champ.value))
        	{
        		 surligne(champ, true);
       	      return false;
        	}
        	 else
      	   {
      	      surligne(champ, false);
      	      return true;
      	   }
        }
        
        
        
        
        </script>
        
        <script >
        function verifForm(f){
        	var emailOk = verifemail(f.email);
        	var telOk = veriftel(f.tel);
        	
        	if (emailOk && telOk)
        		return true ;
        	 else
        	   {
        	      alert("Veuillez remplir correctement tous les champs");
        	      return false;
          }
        }
        </script>
    </body>
</html>