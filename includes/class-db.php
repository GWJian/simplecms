<?php

class DB
{
    private $db;

    public function __construct()
    {
        try{
            $this->db = new PDO(
                'mysql:host=devkinsta_db;dbname=simplecms',
                'root',
                '4JqGyoVdUoAAEJxU'
            );
        }catch( PDOException $error ){
            die( "Database connection failed" );
        }
    }

    public static function connect()
    {
        return new self();
        // equal to new DB()
        // DB::connect() is eqal to new DB()
    }

/**
     * Trigger SELECT command via PDO
     */
    public function select( $sql, $data = [])
    {
        //prepare
        $statement = $this->db->prepare( $sql );
        //execute
        $statement->execute($data);
        //fetch
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Trigger INSERT INTO command via PDO
     * $sql = insert command
     * $data will be used in execute()
     */
    public function insert( $sql, $data )
    {
        $statement = $this->db->prepare( $sql );
        $statement->execute( $data );
        return $this->db->lastInsertId();
    }

    /**
     * Trigger UPDATE command via PDO
     */
    public function update()
    {

    }

    /**
     * Trigger DELETE command via PDO
     */
    public function delete()
    {

    }
}