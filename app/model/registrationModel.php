<?php

class registrationModel{
    
        public function register($data){
            $query = new Query();
            
            // validation of registration data


            $validation = $this->validateRegistrationData($data);
            
            if($validation['type'] == 'error'){
                return $validation;
            }

            else{
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                $names = explode(' ', $data['fullname']);
                $data['firstname'] = $names[0];
                $data['lastname'] = (count($names)  >2) ? $names[count($names)-1] : $names[1];
                unset($data['fullname']);
                unset($data['repass']);


                $data['account_status'] = 1;
                $data['account_type'] = 1;
                $data['date_created'] = date('Y-m-d H:i:s');
                $data['date_updated'] = date('Y-m-d H:i:s');


                 $data  = [
                        $data['firstname'],
                        $data['lastname'],
                        $data['email'],
                       
                        $data['password'],
                        $data['account_status'],
                        $data['account_type'],
                        $data['date_created'],
                        $data['date_updated'],
                 ];
                //  print_r($data);
                $result = $query->insert("INSERT INTO user_accounts (first_name,last_name,email,password,account_status,account_type,date_created,date_updated) VALUES (?,?,?,?,?,?,?,?)", $data);
                if($result){
                    session_start();
                    $_SESSION['account_user']['email'] = $data[2];

                    $this->sendverificationemail($data[2]);
                    return ['type'=>"success",'message'=>'Registration successful','action'=>'verify-email'];
                }else{
                    return ['type'=>"error",'message'=>'Registration failed'];
                }
            }
        }


        public function validateRegistrationData($data){

            $query = new Query();
            $result = $query->fetchOne("SELECT * FROM user_accounts WHERE email =?", [$data['email']]);
            if(empty($data)){
                return ['type'=>"error",'message'=>'Some fields are required'];
            }
            elseif(empty($data['fullname'])){
                return ['type'=>"error",'message'=>'Full name is required'];
            }

            elseif(empty($data['email'])){
                return ['type'=>"error",'message'=>'Email is required'];
            }

            elseif(empty($data['password'])){
                return ['type'=>"error",'message'=>'Password is required'];
            }

            elseif(empty($data['repass'])){
                return ['type'=>"error",'message'=>'Confirm password is required'];
            }

            elseif(empty($data['country'])){
                return ['type'=>"error",'message'=>'Country is required'];
            }

            elseif($data['password'] != $data['repass']){
                return ['type'=>"error",'message'=>'Password does not match'];
            }

            elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                return ['type'=>"error",'message'=>'Invalid email address'];
            }

            elseif(strlen($data['password']) < 6){
                return ['type'=>"error",'message'=>'Password must be at least 6 characters'];
            }

            elseif(strlen($data['repass']) < 6){
                return ['type'=>"error",'message'=>'Confirm password must be at least 6 characters'];
            }

            elseif(strlen($data['fullname']) < 6){
                return ['type'=>"error",'message'=>'Full name must be at least 6 characters'];
            }

            // check if email already exist\
          
            elseif(!empty($result)){
                return ['type'=>"error",'message'=>'Email already exist'];
            }

            else{
               
                return ['type'=>"success",'message'=>'Validation successful'];
            }
        }



        public function sendverificationemail($email){

            $query = new Query();
            $result = $query->fetchOne("SELECT uid FROM user_accounts WHERE email =?", [$email]);
            if(empty($result)){
                return ['type'=>"error",'message'=>'Email does not exist'];
            }
            else{
                $uid = $result['uid'];
                $token = md5($email.time());
                $data = [
                    $uid,
                    $token,
                    strtotime("+ 1 day"),
                    date('Y-m-d H:i:s'),
                    date('Y-m-d H:i:s'),
                ];
                $result = $query->insert("INSERT INTO email_verification (uid,verification_code,exp_date,date_created,date_updated) VALUES (?,?,?,?,?)", $data);
                if($result){
                    $link = "http://localhost/tuantem/verify-email?token=".$token;
                    $message = "Please click the link below to verify your email address <br><br> <a href='$link'>Verify Email</a>";
                    $subject = "Email Verification";
                    $headers = "From: Tuantem   \r\n";
                    $headers .= "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8". "\r\n";
                    $result = mail($email,$subject,$message,$headers);
                    if($result){
                        return ['type'=>"success",'message'=>'Verification email sent'];
                    }else{
                        return ['type'=>"error",'message'=>'Verification email not sent'];
                    }
                }else{
                    return ['type'=>"error",'message'=>'failed to send verification email'];
                }
            }
        }
    
       
}