<!DOCTYPE html>
<html lang="en">

<!-- included head element via php file for reusability -->
<?php include('./components/head.php') ?>

<body>

  <!-- nav-bar -->
  <nav>
    <div class="container d-flex justify-content-between py-3">

      <!-- logo image -->
      <img src="./imgs/logo.png" class="logo" alt="Logo" />

      <!-- login and register buttons -->
      <div class="d-flex gap-3">
        <a href="./index.html" class="text-decoration-none">
          <button class="btn">Login</button>
        </a>
        <a href="./index.html" class="text-decoration-none">
          <button class="btn">Register</button>
        </a>
      </div>
    </div>
  </nav>

  <!-- main content -->
  <main class="pt-5">
    <div class="container py-5">

      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-6">
          <h1 class="text-center display-4 display-sm-5 display-md-6 display-lg-5 fw-semibold text-dark-emphasis">
            Welcome to <br>
            The Appreciation Hub
          </h1>
        </div>
      </div>

      <div class="row d-flex justify-content-center mt-3">
        <div class="col-12 col-md-6">
          <p class="text-center fs-5">
            Celebrate Your Team. A Place to Recognize, Appreciate and Vote
            for the Colleagues Who Make Every Day Extraordinary!
          </p>
        </div>
      </div>

      <!-- navigation buttons -->
      <div class="row d-flex justify-content-center mt-5">
        <div class="col-6 col-sm-4 col-md-2 text-center">
          <a href="./index.html" class="text-decoration-none">
            <button class="btn w-100">Vote!</button>
          </a>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <a href="./index.html" class="text-decoration-none">
            <button class="btn w-100">View leaderboard</button>
          </a>
        </div>
      </div>

    </div>
  </main>
</body>

</html>