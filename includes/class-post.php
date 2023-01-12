<?php

//static class
class POST
{
    //Retrieve all post from database
    public static function getAllPost()
    {
        return DB::connect()->select(
            'SELECT * FROM post ORDER BY id DESC',
            [],
            true
        );
    }

    //Retrieve post data by id
    public static function getPostById( $post_id )
    {
       return DB::connect()->select(
           'SELECT * FROM post WHERE id = :id',
           [
               'id'=> $post_id
           ]
       );
    }

}