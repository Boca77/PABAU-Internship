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

    public function getMwfVotes()
    {
        $stmt = $this->connection->prepare('SELECT users.id, users.name, users.surname, COUNT(user_vote.id) AS vote_count
        FROM user_vote
        JOIN users 
        ON user_vote.nominee_id = users.id
        WHERE user_vote.category_id = 1
        GROUP BY users.id, users.name, users.surname
        ORDER BY vote_count DESC');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getTpVotes()
    {
        $stmt = $this->connection->prepare('SELECT users.id, users.name, users.surname, COUNT(user_vote.id) AS vote_count
        FROM user_vote
        JOIN users 
        ON user_vote.nominee_id = users.id
        WHERE user_vote.category_id = 2
        GROUP BY users.id, users.name, users.surname
        ORDER BY vote_count DESC');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCcVotes()
    {
        $stmt = $this->connection->prepare('SELECT users.id, users.name, users.surname, COUNT(user_vote.id) AS vote_count
        FROM user_vote
        JOIN users 
        ON user_vote.nominee_id = users.id
        WHERE user_vote.category_id = 3
        GROUP BY users.id, users.name, users.surname
        ORDER BY vote_count DESC');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getDmVotes()
    {
        $stmt = $this->connection->prepare('SELECT users.id, users.name, users.surname, COUNT(user_vote.id) AS vote_count
        FROM user_vote
        JOIN users 
        ON user_vote.nominee_id = users.id
        WHERE user_vote.category_id = 4
        GROUP BY users.id, users.name, users.surname
        ORDER BY vote_count DESC');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getMostFrequentVoter()
    {
        $stmt = $this->connection->prepare('SELECT users.id, users.name, users.surname, COUNT(user_vote.id) AS vote_count
        FROM user_vote
        JOIN users 
        ON user_vote.voter_id = users.id
        GROUP BY users.id, users.name, users.surname
        ORDER BY vote_count DESC
        LIMIT 1');
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
