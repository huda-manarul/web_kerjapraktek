<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/signin.css">
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
  <title></title>
</head>
<body class="text-center">
  <form class="form-signin" action="<?php echo base_url().'kerjapraktek/proseslogin' ?>" method="post">
    <!-- <img class="mb-4" src="<?php echo base_url()?>assets/images/1.png" alt="" width="72" height="72"> -->
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="username" class="sr-only">Email address</label>
    <input name="username" class="form-control"  required="" autofocus="" type="text">
    <label for="inputPassword" class="sr-only">Password</label>
    <input name="password" class="form-control" required="" type="password">
    <div class="checkbox mb-3">
      <label>
        <input value="remember-me" type="checkbox"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
  </form>
</body>
</html>
