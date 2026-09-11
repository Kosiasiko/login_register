<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register and Login</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container" id="signUp" style="display: none">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
          <i class="fa fa-user"></i>
          <input
            type="text"
            name="fName"
            id="fName"
            placeholder="First Name"
            required
          />
          <label for="fName">First Name: </label>
        </div>
        <br />
        <div class="input-group">
          <i class="fa fa-user"></i>
          <input
            type="text"
            name="lName"
            id="lName"
            placeholder="Last Name"
            required
          />
          <label for="lName">Last Name: </label>
        </div>
        <br />
        <div class="input-group">
          <i class="fa fa-envelope"></i>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            required
          />
          <label for="fName">Email: </label>
        </div>
        <br />
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="password"
            required
          />
          <label for="password">Password: </label>
        </div>
        <input type="submit" class="btn" name="signUp" value="Sign up" />
      </form>
      <p class="or">------------ or ------------</p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Already Have Account?</p>
        <button id="signInButton">Sign in</button>
      </div>
    </div>

    <div class="container" id="signIn">
      <h1 class="form-title">Sign In</h1>
      <form method="post" action="register.php">
        <div class="input-group">
          <i class="fa fa-envelope"></i>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            required
          />
          <label for="fName">Email: </label>
        </div>
        <br />
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="password"
            required
          />
          <label for="password">Password: </label>
        </div>
        <p class="recover">
          <a href="#">Recover Password</a>
        </p>
        <input type="submit" class="btn" name="signIn" value="Sign In" />
      </form>
      <p class="or">------------ or ------------</p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Dont Have Account Yet?</p>
        <button id="signUpButton">Sign Up</button>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
