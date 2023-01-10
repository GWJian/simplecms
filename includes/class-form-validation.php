<?php

//static class
class FORMVALIDATION
{
    /**
     * make sure emaill is unique
     */
    public static function checkEmailUniqueness( $email )
    {
        //check if email already used by another user
        $user = DB::connect()->select(
            'SELECT * FROM users WHERE email = :email',
            [
                'email' => $email
            ]
        );

        //if user with the same email is laready exists
        if ( $user )
        {
            return 'Email already been used';
        }

        return false;
    }


    /**
     * do all the form validation
     */

     public static function validate( $data, $rules = [] )
     {
        $error=false;
        
        //do all the form validation
        foreach( $rules as $key => $condition )
        {
            switch( $condition )
            {
                //make sure the value is not empty
                case 'required';
                // round 1 - $data[$key] = $_POST['email']
                    if ( empty( $data[$key] ) )
                    {
                        $error .= 'This field (' . $key . ') is empty <br/>';
                    }
                    break;
                //make sure password is match
                case 'is_password_match';
                    if ( $data['password'] !== $data['confirm_password'] ) {
                        $error .= 'Password do not match <br/>';
                    }
                    break;
                //make sure email is valid
                case 'email_check';
                    if ( !filter_var( $data[$key], FILTER_VALIDATE_EMAIL ) ) 
                    {
                        $error .= 'Email is invalid <br/>';
                    }
                    break;
            }
        }//end - foreach

        return $error;
     }
}






?>