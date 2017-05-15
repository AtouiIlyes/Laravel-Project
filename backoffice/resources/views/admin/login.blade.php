<html>
<head>
    <title>Authentification</title>
    <!-- Bootstrap -->
    <link href="{{URL::asset('admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{URL::asset('admin/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{URL::asset('admin/assets/styles.css')}}" rel="stylesheet" media="screen">
    <script src="{{URL::asset('admin/vendors/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
  </head>
  <body id="login" >
    <div class="container">

      
       <img src="admin/images/admin.jpg">
        <h2 class="form-signin-heading">Connectez-vous</h2>
        <input type="email" name="email" class="input-block-level" placeholder="Taper votre email" required="required">
        <input type="password" name="password" class="input-block-level" placeholder="Taper voter mot de passe" required="required">
        <button class="btn btn-large btn-primary" type="submit">Se connecter</button>
      

    </div>  <!--/.fluid-container-->
    <script src="{{URL::asset('admin/vendors/jquery-1.9.1.min.js')}}"></script>
    <script src="{{URL::asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
  </body>
</html>