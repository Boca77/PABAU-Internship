<?php

include_once __DIR__ . '/classes/User.php';
include_once __DIR__ . '/classes/Vote.php';

session_start();
$getUser = new User($_SESSION['userId'] ?? '');
$user = $getUser->getUser();
$errorMsg = $_GET['errorLogin'] ?? '';

$votes = new Vote();
$mwf = $votes->getMwfVotes();
$tp = $votes->getTpVotes();
$cc = $votes->getCcVotes();
$dm = $votes->getDmVotes();


?>

<!DOCTYPE html>
<html lang="en">

<!-- included head element via php file for reusability -->
<?php include('./components/head.php') ?>

<body>

  <!-- nav-bar -->
  <?php include('./components/nav.php') ?>

  <?php if (($user['id'] ?? '') === $mwf[0]['id']) : ?>
    <div class="w-100 bg-info d-flex justify-content-center border border-bottom border-top">
      <div class="col-12 text-center col-md-6">
        <h4 class="mb-0 py-3">Congratulations on being voted the Most Fun Coworker <a href="./certificate/certificateMFW.php" class="text-white fs-6">Collect certificate here!</a></h4>
      </div>
    </div>
  <?php endif ?>
  <?php if (($user['id'] ?? '') === $tp[0]['id']) : ?>
    <div class="w-100 bg-info d-flex justify-content-center border border-bottom border-top">
      <div class="col-12 text-center col-md-6">
        <h4 class="mb-0 py-3">Congratulations on being voted the Best Team Player <a href="./certificate/certificateBTP.php" class="text-white fs-6">Collect certificate here!</a></h4>
      </div>
    </div>
  <?php endif ?>
  <?php if (($user['id'] ?? '') === $cc[0]['id']) : ?>
    <div class="w-100 bg-info d-flex justify-content-center border border-bottom border-top">
      <div class="col-12 text-center col-md-6">
        <h4 class="mb-0 py-3">Congratulations on being voted the Best Culture Creator <a href="./certificate/certificateCC.php" class="text-white fs-6">Collect certificate here!</a></h4>
      </div>
    </div>
  <?php endif ?>
  <?php if (($user['id'] ?? '') === $dm[0]['id']) : ?>
    <div class="w-100 bg-info d-flex justify-content-center border border-bottom border-top">
      <div class="col-12 text-center col-md-6">
        <h4 class="mb-0 py-3">Congratulations on being voted the Biggest Difference Maker <a href="./certificate/certificateDM.php" class="text-white fs-6">Collect certificate here!</a></h4>
      </div>
    </div>
  <?php endif ?>




  <!-- main content -->
  <main class="pt-5 background-gradient">
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
          <a href="./vote.php" class="text-decoration-none">
            <button class="btn w-100">Vote!</button>
          </a>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <a href="./leaderboard.php" class="text-decoration-none">
            <button class="btn w-100">View leaderboard</button>
          </a>
        </div>

      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-6 d-flex flex-column text-center mt-2">
          <small class="text-secondary">*You must be logged in to vote or view the leader board</small>
          <?php
          if ($errorMsg) {
            echo '<small class="text-danger fs-5">' . $errorMsg . '</small>';
          }
          ?>
        </div>
      </div>
    </div>

  </main>
</body>

</html>