<?php

class User
{
    /**
     * Retrieve all user from database
     */
    public static function getAllUsers()
    {
        return DB::connect()->select(
            'SELECT * FROM users ORDER BY id DESC',
            [],
            true
        );
    }

    /**
     * Retrieve user data by id
     */

     public static function getUserById( $user_id )
     {
        return DB::connect()->select(
            'SELECT * FROM users WHERE id = :id',
            [
                'id'=> $user_id
            ]
        );
     }

     /**
      * Update User details
      */

      public static function update ( $id,$name,$email,$role,$password=null)
      {
        //setup params
        $params=[
            'id'=>$id,
            'name'=>$name,
            'email'=>$email,
            'role'=>$role,
        ];

        //if password is not nul
        if ( $password ){
            $params['password'] = password_hash( $password,PASSWORD_DEFAULT );
        }

        //update user data into the database
        return DB::connect()->update(
          'UPDATE users SET name=:name , email=:email,' . ($password ? ' password = :password,' : '' ) . 'role=:role WHERE id=:id',
            $params
        );
      }
}