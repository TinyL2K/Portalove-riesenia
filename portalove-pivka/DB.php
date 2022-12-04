<?php

namespace cestovanie;

class DB
{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $connection;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        try {
            $this->connection = new \PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function getAllMessages()
    {
        $messages = [];
        $sql = "SELECT * FROM messages";

        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $messages[] = [
                'id' => $row['id_mail'],
                'name' => $row['meno'],
                'email' => $row['email'],
                'subject' => $row['nazov'],
                'message' => $row['sprava']
            ];
        }

        return $messages;
    }

    public function insertMessage($name,$subject, $email, $message)
    {
        $sql = "INSERT INTO messages(meno, email, nazov, sprava) 
                VALUE ('".$name."', '".$subject."', '".$email."', '".$message."')";
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function deleteMessages($id)
    {
        $sql = "DELETE FROM messages WHERE id_mail = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function deletePost($id)
    {
        $sql = "DELETE FROM post WHERE id_post = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function getPosts()
    {
        $posts = [];
        $sql = "SELECT * FROM post";
        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $posts[] = [
                'id' => $row['id_post'],
                'category' => $row['kategoria'],
                'title' => $row['nazov'],
                'content' => $row['popis'],
                'date' => $row['datum']
            ];
        }

        return $posts;
    }

    public function insertPost($category, $title, $content, $time)
    {
        $sql = "INSERT INTO post(kategoria, nazov, popis, datum) 
                VALUE ('".$category."', '".$title."', '".$content."', '".$time."')";
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function getPostDetails($id)
    {
        $sql = "SELECT * FROM post WHERE id_post = " . $id;
        $result = [];

        try {
            $query = $this->connection->query($sql);
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return $result;
        }

    }

    public function updatePost($id, $category, $title, $content)
    {
        $sql = "UPDATE post 
                SET kategoria = '".$category."', nazov = '".$title."', popis = '".$content."' 
                WHERE id_post = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }
}