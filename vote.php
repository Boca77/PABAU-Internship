<?php

include_once __DIR__ . '/classes/User.php';

session_start();
$getUser = new User($_SESSION['userId'] ?? '');
$user = $getUser->getUser();
$users = $getUser->getAllUsers();

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
            <div class="row">
                <div class="col-12 py-2 border pb-0 rounded">
                    <div id="MWF-box">
                        <h3 class="mt-3 border-bottom">Vote for the most fun colleague: </h3>
                        <?php foreach ($users as $index => $user) : ?>
                            <form action="" method="POST">
                                <div class="row align-items-center py-3 <?= ($index === array_key_last($users)) ? 'border-bottom-0' : 'border-bottom' ?>">
                                    <div class="col-4">
                                        <p class="mb-0"><?= $user['name'] ?> <?= $user['surname'] ?></p>
                                    </div>
                                    <div class="col-4 text-center">
                                        <input type="text" placeholder="comment" name="comment" class="w-100 form-control">
                                    </div>
                                    <div class="col-4 d-flex justify-content-end gap-5 align-items-center
                                ">
                                        <div class="d-flex align-items-center gap-2">
                                            <label for="MWF-vote-<?= $user['id'] ?>">Vote</label>
                                            <input type="radio" name="vote" id="MWF-vote-<?= $user['id'] ?>" value="<?= $user['id'] ?>">
                                        </div>
                                        <button class="btn">Vote</button>
                                    </div>
                                </div>
                            </form>
                        <?php endforeach; ?>
                    </div>
                    <div id="TP-box">
                        <h3 class="mt-3 border-bottom">Vote for the best team player: </h3>
                        <?php foreach ($users as $index => $user) : ?>
                            <form action="" method="POST">
                                <div class="row align-items-center py-3 <?= ($index === array_key_last($users)) ? 'border-bottom-0' : 'border-bottom' ?>">
                                    <div class="col-4">
                                        <p class="mb-0"><?= $user['name'] ?> <?= $user['surname'] ?></p>
                                    </div>
                                    <div class="col-4 text-center">
                                        <input type="text" placeholder="comment" name="comment" class="w-100 form-control">
                                    </div>
                                    <div class="col-4 d-flex justify-content-end gap-5 align-items-center
                                ">
                                        <div class="d-flex align-items-center gap-2">
                                            <label for="TP-vote-<?= $user['id'] ?>">Vote</label>
                                            <input type="radio" name="vote" id="TP-vote-<?= $user['id'] ?>" value="<?= $user['id'] ?>">
                                        </div>
                                        <button class="btn">Vote</button>

                                    </div>
                                </div>
                            </form>
                        <?php endforeach; ?>
                    </div>
                    <div id="CC-box">
                        <h3 class="mt-3 border-bottom">Vote for the best culture creator: </h3>
                        <?php foreach ($users as $index => $user) : ?>
                            <form action="" method="POST">
                                <div class="row align-items-center py-3 <?= ($index === array_key_last($users)) ? 'border-bottom-0' : 'border-bottom' ?>">
                                    <div class="col-4">
                                        <p class="mb-0"><?= $user['name'] ?> <?= $user['surname'] ?></p>
                                    </div>
                                    <div class="col-4 text-center">
                                        <input type="text" placeholder="comment" name="comment" class="w-100 form-control">
                                    </div>
                                    <div class="col-4 d-flex justify-content-end gap-5 align-items-center
                                ">
                                        <div class="d-flex align-items-center gap-2">
                                            <label for="CC-vote-<?= $user['id'] ?>">Vote</label>
                                            <input type="radio" name="vote" id="CC-vote-<?= $user['id'] ?>" value="<?= $user['id'] ?>">
                                        </div>
                                        <button class="btn">Vote</button>

                                    </div>
                                </div>
                            </form>
                        <?php endforeach; ?>
                    </div>
                    <div id="DM-box">
                        <h3 class="mt-3 border-bottom">Vote for the best difference maker: </h3>
                        <?php foreach ($users as $index => $user) : ?>
                            <form action="" method="POST">
                                <div class="row align-items-center py-3 <?= ($index === array_key_last($users)) ? 'border-bottom-0' : 'border-bottom' ?>">
                                    <div class="col-4">
                                        <p class="mb-0"><?= $user['name'] ?> <?= $user['surname'] ?></p>
                                    </div>
                                    <div class="col-4 text-center">
                                        <input type="text" placeholder="comment" name="comment" class="w-100 form-control">
                                    </div>
                                    <div class="col-4 d-flex justify-content-end gap-5 align-items-center
                                ">
                                        <div class="d-flex align-items-center gap-2">
                                            <label for="DM-vote-<?= $user['id'] ?>">Vote</label>
                                            <input type="radio" name="vote" id="DM-vote-<?= $user['id'] ?>" value="<?= $user['id'] ?>">
                                        </div>
                                        <button class="btn">Vote</button>
                                    </div>
                                </div>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
    </main>
    <script src="./js/vote.js"></script>
</body>

</html>