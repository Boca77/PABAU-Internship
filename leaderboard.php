<?php
include_once __DIR__ . '/classes/User.php';
include_once __DIR__ . '/classes/Vote.php';

session_start();

// check if user is logged-in 
if (empty($_SESSION['userId'])) {
    return header('Location: index.php?errorLogin=Please login first');
}

$getUser = new User($_SESSION['userId'] ?? '');
$user = $getUser->getUser();

$votes = new Vote();
$mostFrequentVoter = $votes->getMostFrequentVoter();
$mwf = $votes->getMwfVotes();
$tp = $votes->getTpVotes();
$cc = $votes->getCcVotes();
$dm = $votes->getDmVotes();
?>
<!DOCTYPE html>
<html lang="en">

<?php include('./components/head.php') ?>

<body>
    <?php include('./components/nav.php') ?>
    <main class="pt-5 background-gradient">

        <div class="container py-5">
            <h1>Leaderboard</h1>

            <!-- categories tabs  -->
            <div class="row d-flex justify-content-center">
                <?php
                if ($mostFrequentVoter) {
                    echo '<p>Most frequent voter is: <span class="fw-bold">' . $mostFrequentVoter["name"] . ' ' . $mostFrequentVoter['surname'] . '</span></p>';
                }
                ?>
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
                <div class="col-12 border rounded">
                    <div id="MWF-box">
                        <?php if (empty($mwf)) {
                            echo '<h3 class="p-5">No votes</h3>';
                        } ?>
                        <?php foreach ($mwf as $key => $nominee) : ?>
                            <div class="row 
                            <?= ($key === array_key_last($mwf)) ? 'border-bottom-0' : 'border-bottom' ?> 
                            <?= ($key === array_key_first($mwf)) ? 'bg-warning rounded-top' : '' ?>">
                                <div class="col-1 d-flex justify-content-center align-items-center py-3">
                                    <p class="mb-0 "><?php echo $key + 1 ?></p>
                                </div>
                                <div class="col-3 d-flex align-items-center py-3">
                                    <p class="mb-0"><?= $nominee['name'] . ' ' . $nominee['surname'] ?></p>
                                </div>
                                <div class="col-3 d-flex align-items-center py-3">
                                    <p class="mb-0"><?= $nominee['vote_count'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div id="TP-box">
                        <?php if (empty($tp)) {
                            echo '<h3 class="p-5">No votes</h3>';
                        } ?>
                        <?php foreach ($tp as $key => $nominee) : ?>
                            <div class="row 
                            <?= ($key === array_key_last($tp)) ? 'border-bottom-0' : 'border-bottom' ?> 
                            <?= ($key === array_key_first($tp)) ? 'bg-warning rounded-top' : '' ?>">
                                <div class="col-1 d-flex justify-content-center align-items-center py-3">
                                    <p class="mb-0 "><?php echo $key + 1 ?></p>
                                </div>
                                <div class="col-3 d-flex align-items-center py-3">
                                    <p class="mb-0"><?= $nominee['name'] . ' ' . $nominee['surname'] ?></p>
                                </div>
                                <div class="col-3 d-flex align-items-center py-3">
                                    <p class="mb-0"><?= $nominee['vote_count'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div id="CC-box">
                        <?php if (empty($cc)) {
                            echo '<h3 class="p-5">No vote</h3>';
                        } ?>
                        <?php foreach ($cc as $key => $nominee) : ?>
                            <div class="row 
                            <?= ($key === array_key_last($cc)) ? 'border-bottom-0' : 'border-bottom' ?> 
                            <?= ($key === array_key_first($cc)) ? 'bg-warning rounded-top' : '' ?>">
                                <div class="col-1 d-flex justify-content-center align-items-center py-3">
                                    <p class="mb-0 "><?php echo $key + 1 ?></p>
                                </div>
                                <div class="col-3 d-flex align-items-center py-3">
                                    <p class="mb-0"><?= $nominee['name'] . ' ' . $nominee['surname'] ?></p>
                                </div>
                                <div class="col-3 d-flex align-items-center py-3">
                                    <p class="mb-0"><?= $nominee['vote_count'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div id="DM-box">
                        <?php if (empty($dm)) {
                            echo '<h3 class="p-5">No votes</h3>';
                        } ?>
                        <?php foreach ($dm as $key => $nominee) : ?>
                            <div class="row 
                            <?= ($key === array_key_last($dm)) ? 'border-bottom-0' : 'border-bottom' ?> 
                            <?= ($key === array_key_first($dm)) ? 'bg-warning rounded-top ' : '' ?>">
                                <div class="col-1 d-flex justify-content-center align-items-center py-3">
                                    <p class="mb-0 "><?php echo $key + 1 ?></p>
                                </div>
                                <div class="col-3 d-flex align-items-center py-3">
                                    <p class="mb-0"><?= $nominee['name'] . ' ' . $nominee['surname'] ?></p>
                                </div>
                                <div class="col-3 d-flex align-items-center py-3">
                                    <p class="mb-0"><?= $nominee['vote_count'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <script src="./js/vote.js"></script>
</body>

</html>