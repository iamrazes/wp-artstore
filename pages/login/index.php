<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--Bootstrap 5-->
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../assets/css/login.css" />

  <link rel="apple-touch-icon" href="../../assets/img/apple-icon.png">
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/icons/favicon.ico">

  <title>ArtStore | Buy High Quality Arts</title>
</head>

<body class="bg-dark text-white">
  <main class="form-signin text-center">
    <form method="POST" action="../../includes/login-process.php">
      <a href="../../"><img class="mb-4" src="../../assets/img/icons/logo.png" alt="" width="144" height="144" /></a>
      <h1 class="h3 mb-3 fw-normal">Please Login!</h1>

      <div class="form-floating text-dark">
        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
        <label for="floatingInput">Email address</label>
      </div>

      <div class="form-floating text-dark">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" />
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" /> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-warning" type="submit" name="submit">
        Login
      </button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021 ArtStore</p>
    </form>
  </main>

  <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
</body>

</html>