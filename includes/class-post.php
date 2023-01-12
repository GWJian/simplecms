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

    /**
     * Add new post
    */

    /**
     * Update post details
    */
    public static function update ( $id,$status,$title,$content)
    {
      //setup params
      $params=
      [
          'id'=>$id,
          'status'=>$status,
          'title'=>$title,
          'content'=>$content,
      ];

        //update user data into the database
        return DB::connect()->update
        (
        'UPDATE post SET id=:id , title=:title , status=:status , content=:content WHERE id=:id',
            $params
        );
        }

    /**
     * Delete post
     */


}