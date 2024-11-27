<?php

include_once __DIR__ . '/classes/User.php';

session_start();

// check if user is logged-in 
if (empty($_SESSION['userId'])) {
    return header('Location: index.php?errorLogin=Please login first');
}


$getUser = new User($_SESSION['userId'] ?? '');
$user = $getUser->getUser();
$users = $getUser->getAllUsersNotLoggedIn();
$userVotes = $getUser->checkUserVotes();
$categoryIds = array_column($userVotes, 'category_id');

?>

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
                <?php
                if ($user) {
                    echo '<p class="m-0 d-flex align-items-center">Hi! ' . $user['name'] . '</p>';
                    echo '<a href="./scripts/logout.php" class="m-0 d-flex align-items-center">LogOut</a>';
                } else {
                    echo '<a href="./login-register.php" class="text-decoration-none">
                <button class="btn">Login/Register</button>
              </a>';
                }
                ?>
            </div>
        </div>
    </nav>

    <!-- main content -->
    <main class="pt-5 background-gradient">

        <div class="container py-5">

            <!-- categories tabs  -->
            <div class="row d-flex justify-content-center">
                <div class="border rounded px-0">
                    <div class="d-flex text-center">
                        <div id="MWF" class="col-3 px-3 py-2 pointer border-end rounded-start active">
                            <p class="mb-0">Makes Work Fun</p>
                        </div>
                        <div id="TP" class="col-3 px-3 py-2 pointer border-end">
                            <p class="mb-0">Team Player</p>
                        </div>
                        <div id="CC" class="col-3 px-3 py-2 pointer border-end">
                            <p class="mb-0">Culture Creator</p>
                        </div>
                        <div id="DM" class="col-3 px-3 py-2 pointer rounded-end">
                            <p class="mb-0">Difference Maker</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- categories -->
            <div class="row">
                <div class="col-12 py-2 border pb-0 rounded">

                    <!-- Makes Work Fun section  -->
                    <div id="MWF-box">
                        <?php if (in_array(1, $categoryIds)) : ?>
                            <h3 class="p-5">You've already voted!</h3>
                        <?php else : ?>
                            <h3 class="mt-3 border-bottom">Vote for the most fun colleague: </h3>
                            <?php foreach ($users as $index => $user) : ?>
                                <form action="./scripts/vote.php" method="POST">
                                    <div class="row align-items-center py-3 <?= ($index === array_key_last($users)) ? 'border-bottom-0' : 'border-bottom' ?>">
                                        <div class="col-4">
                                            <p class="mb-0"><?= $user['name'] ?> <?= $user['surname'] ?></p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <input type="text" placeholder="comment" name="comment" required class="w-100 form-control">
                                        </div>
                                        <div class="col-4 d-flex justify-content-center gap-5 align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <input type="hidden" value="1" name="category_id">
                                            </div>
                                            <button name="nominee_id" value="<?= $user['id'] ?>" class="btn">Vote</button>
                                        </div>
                                    </div>
                                </form>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <!-- Team Player section -->
                    <div id="TP-box">
                        <?php if (in_array(2, $categoryIds)) : ?>
                            <h3 class="p-5">You've already voted!</h3>
                        <?php else : ?>
                            <h3 class="mt-3 border-bottom">Vote for the best team player: </h3>
                            <?php foreach ($users as $index => $user) : ?>
                                <form action="./scripts/vote.php" method="POST">
                                    <div class="row align-items-center py-3 <?= ($index === array_key_last($users)) ? 'border-bottom-0' : 'border-bottom' ?>">
                                        <div class="col-4">
                                            <p class="mb-0"><?= $user['name'] ?> <?= $user['surname'] ?></p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <input type="text" placeholder="comment" name="comment" required class="w-100 form-control">
                                        </div>
                                        <div class="col-4 d-flex justify-content-center gap-5 align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <input type="hidden" value="2" name="category_id">
                                            </div>
                                            <button name="nominee_id" value="<?= $user['id'] ?>" class="btn">Vote</button>
                                        </div>
                                    </div>
                                </form>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <!-- Culture Creator section  -->
                    <div id="CC-box">
                        <?php if (in_array(3, $categoryIds)) : ?>
                            <h3 class="p-5">You've already voted!</h3>
                        <?php else : ?>
                            <h3 class="mt-3 border-bottom">Vote for the best culture creator: </h3>
                            <?php foreach ($users as $index => $user) : ?>
                                <form action="./scripts/vote.php" method="POST">
                                    <div class="row align-items-center py-3 <?= ($index === array_key_last($users)) ? 'border-bottom-0' : 'border-bottom' ?>">
                                        <div class="col-4">
                                            <p class="mb-0"><?= $user['name'] ?> <?= $user['surname'] ?></p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <input type="text" placeholder="comment" name="comment" required class="w-100 form-control">
                                        </div>
                                        <div class="col-4 d-flex justify-content-center gap-5 align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <input type="hidden" value="3" name="category_id">
                                            </div>
                                            <button name="nominee_id" value="<?= $user['id'] ?>" class="btn">Vote</button>
                                        </div>
                                    </div>
                                </form>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <!-- Difference Maker section -->
                    <div id="DM-box">
                        <?php if (in_array(4, $categoryIds)) : ?>
                            <h3 class="p-5">You've already voted!</h3>
                        <?php else : ?>
                            <h3 class="mt-3 border-bottom">Vote for the best difference maker: </h3>
                            <?php foreach ($users as $index => $user) : ?>
                                <form action="./scripts/vote.php" method="POST">
                                    <div class="row align-items-center py-3 <?= ($index === array_key_last($users)) ? 'border-bottom-0' : 'border-bottom' ?>">
                                        <div class="col-4">
                                            <p class="mb-0"><?= $user['name'] ?> <?= $user['surname'] ?></p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <input type="text" placeholder="comment" name="comment" required class="w-100 form-control">
                                        </div>
                                        <div class="col-4 d-flex justify-content-center gap-5 align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <input type="hidden" value="4" name="category_id">
                                            </div>
                                            <button name="nominee_id" value="<?= $user['id'] ?>" class="btn">Vote</button>
                                        </div>
                                    </div>
                                </form>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <script src="./js/vote.js"></script>
</body>

</html>