<?php
include_once 'Connection.php';

class Vote extends Connection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function setVote($vote)
    {
        $stmt = $this->connection->prepare('INSERT INTO user_vote (voter_id, nominee_id, category_id, comment, time_stamp) 
                                            VALUES ( :voter_id, :nominee_id, :category_id, :comment, :time_stamp)');
        $stmt->bindParam(':voter_id', $vote['voter_id']);
        $stmt->bindParam(':nominee_id', $vote['nominee_id']);
        $stmt->bindParam(':category_id', $vote['category_id']);
        $stmt->bindParam(':comment', $vote['comment']);
        $stmt->bindParam(':time_stamp', $vote['time_stamp']);
        $stmt->execute();
    }
}
