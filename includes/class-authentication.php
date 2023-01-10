<?php

class AUTHENTICATION
{

    /**
     * To login user
     */
    public static function login( $email, $password )
    {
        $user_id = false;
        $user = DB::connect()->select(
            'SELECT * FROM users WHERE email = :email',
            [
                'email' => $email
            ]      
        );
        // if $user is valid, then return $user array
        if ( $user ) {
            // proceed to verify password
            if ( password_verify( $password, $user['password'] ) ) {
                $user_id = $user['id'];
            }
        }

        // make sure to return the user's ID
        return $user_id;
    }

    /**
     * To sign up user
     */
    public static function signup( $name, $email , $password )
    {

        return DB::connect()->insert(
            'INSERT INTO users (name,email,password)
            VALUES (:name, :email, :password)',
            [
                'name' => $name,
                'email' => $email,
                'password' => password_hash( $password,PASSWORD_DEFAULT ),
            ]
        );
    }
    /**
     * To logout user
     */
    public static function logout()
    {
        unset( $_SESSION['user'] );
    }

    /**
     * check if user logged in or not
     */
    public static function isLoggedIn()
    {
        return isset ( $_SESSION['user'] );
    }

    /**
     * assign user's session
     */

     public static function setSession( $user_id )
     {
        //load the user datam from database based on $user_id provided
        $user = DB::connect()->select(
            'SELECT * FROM users WHERE id = :id',
            [
                'id'=>$user_id
            ]
        );
        //assign it to $_SESSION['user]
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'role' => $user['role']
        ];
     }
}