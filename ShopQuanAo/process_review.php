<?php 
require_once 'Review_Database.php';

$review_database = new Review_Database();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    $review_database->addReview($rating, $comment);
    exit();
}