<?php

class loginModel{

    public function login($data){

        $query = new Query();
        $result = $query->fetchAll("SELECT * FROM user_accounts WHERE email = ? ", [$data['email']]);

        if($result){
            if($result[0]['account_status'] == -1)
            {
            
                return ['type' => 'error', 'message' => 'Account blocked'];
            }
            elseif($result[0]['account_status'] == 0)
            {
                return ['type' => 'error', 'message' => 'Account is inactive'];
            }
            else{
                if(password_verify($data['password'], $result[0]['password'])){
                    $this->setSession($result[0]);
                    if($result[0]['email_verified'] == 1  && $result[0]['primary_verified'] == 1) {
                        $action = 'dashboard';
                    }
                    elseif($result[0]['email_verified'] != 1  && $result[0]['primary_verified'] == 1) {
                        $action = 'verify-email';
                    }
                    elseif($result[0]['email_verified'] == 1  && $result[0]['primary_verified'] != 1) {
                        $action = 'verify-phone';

                    }

                    elseif($result[0]['email_verified'] != 1  && $result[0]['primary_verified'] != 1) {
                        $action = 'verify-email';
                    }

                    return ['type' => 'success', 'message' => 'Login successful', 'action' => $action];
                }
                else{
                    return ['type' => 'error', 'message' => 'Invalid password'];
                }
            }
            
        }
        else{
            return ['type' => 'error', 'message' => 'Invalid email'];
        }
    }

    public function setSession($data){
        session_start();
        $_SESSION['account_user'] = $data;
    }

    public function logout(){
        session_destroy();
        echo '<script>window.location="login"</script>';
    }
}