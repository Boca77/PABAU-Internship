<?php
session_start();
include_once __DIR__ . '/../classes/Vote.php';

// checks for the request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    return header('Location: ../vote.php?voteError=Invalid request');
}

// checks for the comment
if ((!isset($_POST['comment']) || trim($_POST['comment']) === '')) {
    return header('Location: ../vote.php?voteError=comment is required');
}

// checks for the comment length
if (strlen($_POST['comment']) > 1000) {
    return header('Location: ../vote.php?voteError=comment is too long cant be longer than 1000 characters');
}

// sets vote information
$voteInfo = [
    'voter_id' => $_SESSION['userId'],
    'nominee_id' => $_POST['nominee_id'],
    'category_id' => $_POST['category_id'],
    'comment' => $_POST['comment'],
    'time_stamp' => date('Y-m-d H:i:s')
];

// sets vote in DB
$vote = new Vote();
$vote->setVote($voteInfo);

header('Location: ../vote.php');
