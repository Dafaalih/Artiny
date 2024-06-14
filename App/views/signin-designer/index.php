<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <title>Artiny</title>
  <link href="<?php echo BASEURL; ?>/img/Logo.png" rel="icon">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/stylesignin.css"">

</head>

<body>
      <div class="container">
          <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto"></div>
          <div class="card ">
            <div class="card-header text-center pt-4">
              <h5>Sign In with</h5>
            </div>
            <div class="card-body" style="font-weight: 300;">
              <form role="form" method="post" action="">
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password">
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary w-100 my-4 mb-2" onclick="window.location.href='<?= BASEURL ?>/Signin/signinAdmin'">Sign In</button>
                    <button type="button" class="btn btn-primary w-100 my-4 mb-2" onclick="window.location.href='<?= BASEURL ?>/Signin/signinDesigner'">Sign In as Designer</button>
                    <button type="button" class="btn btn-primary w-100 my-4 mb-2" onclick="window.location.href='<?= BASEURL ?>/Signin/signinPerusahaan'">Sign In as Perusahaan</button>
                </div>
                <p class="text-sm mt-3 mb-0" style="display: flex; align-items: center; justify-content: center;">
                    Don't have an account? <a href="<?= BASEURL ?>/Signup" class="text-dark font-weight-bolder"> Sign Up</a>
                </p>
            </form>


            </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>
