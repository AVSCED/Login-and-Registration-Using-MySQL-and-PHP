<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <!-- To Let a new User Register with new credentials -->
  <div class="container bg-secondary m-4 p-4">
    <div class="container bg-white ">
      <p class="fw-bold fs-2 text-center ">SIGN UP</p>
      <div class="row">
        <div class="col-5">
          <form method="POST" action="./Controller/controller.php">
            <label >Your Name</label>
            <input type="twxt" class="form-control" name="newUserName" required="required">
            <label >Email address</label>
            <input type="email" class="form-control" name="newUserEmail" required="required">
            <label >Enter Password</label>
            <input type="password" class="form-control" name="newUserPassword" required="required">
            <label >Confirm Password</label>
            <input type="password" class="form-control" name="newUserPasswordConfirm" required="required">
            <div class="row text-center ">
              <p>
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                <a href="#">Forgot Password ?</a>
              </p>
              <button type="submit" class="btn btn-primary text-center fw-bold m-4" name="register">Sign In</button>
            </div>
          </form>
          <!-- To redirect user to login Page if already an existing user -->
          <p class="text-center fw-bold m-4">Already a Member ? <a href="./index.php">Login</a></p>
          <p class="text-center fw-bold m-4"> Or Sign Up With.</p>
        </div>
        <div class="col-7">
          <img src="./assets/Registration.png" alt="" width="80%">
        </div>
      </div>
    </div>
  </div>
</body>

</html>