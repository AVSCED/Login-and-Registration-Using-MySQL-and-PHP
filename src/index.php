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
  <!-- Plain Login Form for Existing User's Login  -->
  <div class="container m-4 p-4">
    <p class="fw-bold fs-2 text-center ">Login Here</p>
    <form method="POST" action="./Controller/controller.php">

      <label>Email address</label>
      <input type="email" class="form-control" name="userEmail">
      <label>Password</label>
      <input type="password" class="form-control" name="userPass">

      <div class="row text-center m-4 p-4">
        <p>
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember Me</label>
          <a href="#">Forgot Password ?</a>
        </p>
        <button type="submit" class="btn btn-primary text-center fw-bold m-4" name="signIn">Sign In</button>
      </div>
    </form>
    <!-- To redirect user to a registration Page -->
    <p class="text-center fw-bold m-4">Not a Member ? <a href="./register.php ">Register</a></p>
    <p class="text-center fw-bold m-4"> Or Sign Up With.</p>
  </div>
</body>

</html>