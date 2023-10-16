<?php

class otpModel{

    // sending user number to the database to get the otp

    public function addprimarynumber($email,$primary_number){

        $query = new Query();
        $result = $query->fetchAll("SELECT * FROM user_accounts WHERE email = ? ", [$email]);
         if($result){
            if($result[0]['primary_verified'] == 1){
                return ['type'=>"error",'message'=>'Phone number already verified'];
            }
            else{


                $uid = $result[0]['uid'];
                $recipient = $primary_number;
                $otp = str_pad((string)(rand(100000, 999999)), 6, '0', STR_PAD_LEFT);
                $message = "Your OTP is $otp";
                if($result[0]['primary_number'] == $primary_number){

                    $query->insert("INSERT INTO sms_verification (uid, verification_code,exp_date,date_created,date_updated) VALUES (?,?,?,?,?)", [$uid, $otp, strtotime("+ 5 minutes"), date('Y-m-d H:i:s'), date('Y-m-d H:i:s')]);
                        if($this->sendsms($recipient, $message)){
                            return ['type'=>"success",'message'=>'OTP sent to your phone number','action'=>'otp'];
                        }
                        else{
                            return ['type'=>"error",'message'=>'Error sending OTP'];
                        }
                    
                }
                else{

                    // $uid = $result[0]['uid'];
                    // $recipient = $primary_number;
                    // $otp = str_pad((string)(rand(100000, 999999)), 6, '0', STR_PAD_LEFT);
                    // $message = "Your OTP is $otp";
                    if($query->update("UPDATE user_accounts SET primary_number = ? WHERE email = ?", [$primary_number, $email]))
                    {
                                
                            // print_r(gettype($otp));
                            // die;
                            $query->insert("INSERT INTO sms_verification (uid, verification_code,exp_date,date_created,date_updated) VALUES (?,?,?,?,?)", [$uid, $otp, strtotime("+ 5 minutes"), date('Y-m-d H:i:s'), date('Y-m-d H:i:s')]);

                         
                            if($this->sendsms($recipient, $message)){
                                return ['type'=>"success",'message'=>'OTP sent to your phone number','action'=>'otp'];
                            }
                            else{
                                return ['type'=>"error",'message'=>'Error sending OTP'];
                            }
                            // return ['type'=>"success",'message'=>'OTP sent to your phone number','action'=>'otp'];
                                    
                    }
                    else{
                        
                        return ['type'=>"error",'message'=>'Error Adding phone number'];
                    }
                  
                }
                
            }
           
         }
         else{
            return ['type'=>"error",'message'=>'Invalid email'];
         }

    }



    // sendotp fuction 

    public function sendsms($recipient, $message){
         $endPoint = 'https://apps.mnotify.net/smsapi';
      $apiKey = '9lIzbJfm3D2trocelvzrbCvvK';

    //   $message = "hello welcome to dollarsoft";
      $url = $endPoint . '?key=' . $apiKey.'&to=' . $recipient . '&msg=' . $message. '&sender_id=Tuantem';  
// print_r($url);  
      $resposne = file_get_contents($url);
      $response = json_decode($resposne,true);
    //   print_r($response);
        if($response['status'] == 'success'){
            return true;
        }
        else{
            return false;
        }

    }




    // verify otp  

    public function verifyotp($email,$otp){
        if(empty($otp)){
            return ['type'=>"error",'message'=>'Otp is required'];
        }
        elseif(strlen($otp) >6   ||  strlen($otp) <6){
            return ['type'=>"error",'message'=>'Otp Must be 6 digits'];
        }
        elseif(!preg_match('/^\d{6}$/', $otp)){
            return ['type'=>"error",'message'=>'Otp Must be 6 digits'];

        }
        else{

            $query = new Query();
            $result = $query->fetchAll("SELECT * FROM user_accounts WHERE email = ? ", [$email]);
            if($result){
                $uid = $result[0]['uid'];
                $result = $query->fetchAll("SELECT * FROM sms_verification WHERE uid = ? AND verification_code = ? ", [$uid, $otp]);
                if($result){
                    if($result[0]['exp_date'] > time()){
                        $query->update("UPDATE user_accounts SET primary_verified = ? WHERE uid = ?", [1, $uid]);
                        $query->update("UPDATE sms_verification SET exp_date = ? WHERE uid = ? AND verification_code = ?", [time(), $uid, $otp]);
                        return ['type'=>"success",'message'=>'Phone number verified','action'=>'dashboard'];
                    }
                    else{
                        return ['type'=>"error",'message'=>'OTP expired'];
                    }
                }
                else{
                    return ['type'=>"error",'message'=>'Invalid OTP'];
                }
            }
            else{
                return ['type'=>"error",'message'=>'Invalid email'];
            }
        }
            

    }
        






}


