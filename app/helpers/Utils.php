<?php
class Utils{
    

    public static function isPasswordMatch($password, $confirm_password){
        return $password == $confirm_password;  
    }


    public static function checkIfEmpty($postData) {
        foreach ($postData as $fieldName => $value) {
            if (empty($value)) {
                // Return the error message as soon as an empty field is found.
                return [
                    'type' => 'error',
                    'message' => "{$fieldName} cannot be empty"
                ];
            }
        }
        // If all fields have values, you can return null or an empty array, depending on your handling logic.
        return null;
    }
}