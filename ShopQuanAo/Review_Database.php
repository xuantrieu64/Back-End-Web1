<?php 
require_once 'Database.php';

class Review_Database extends Database
{
    public function getAllReview()
    {
        $sql = self::$connection->prepare("SELECT reviews.*, user.username, products.name, products.image_url FROM reviews
        INNER JOIN user ON reviews.id_user = user.id_user
        INNER JOIN products ON reivews.id_product = products.id_product ORDER BY DESC");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getAllReviewById($id_review)
    {
        $sql = self::$connection->prepare("SELECT reviews.*, user.username, products.name, products.image_url FROM reviews
        INNER JOIN user ON reviews.id_user = user.id_user
        INNER JOIN products ON reivews.id_product = products.id_product WHERE id_review = ?");
        $sql->bind_param("i", $id_review);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC)[0];
        return $items;
    }
    public function addReview($rating, $comment)
    {
        $sql = self::$connection->prepare("INSERT INTO reviews (rating, comment) VALUES(?, ?)");
        $sql->bind_param("is", $rating, $comment);
        $items = $sql->execute();
        return $items;
    }
}