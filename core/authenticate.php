<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class authenticate
{
    // user login
    public function userlogin($username, $password)
    {
        $auth = new Auth();
        require __DIR__ . '/../vendor/autoload.php';

       

        $target = [
            ['user_email', '=', $username],
            // ['user_contact', '=', $username]

        ];


        if(isset($username) && $username != '') {
            $msg = $auth->authenticate('users', $target);
            // $msg = $auth->authenticate('users', $target, 'OR');
        } else {
            $msg = ['message' => 'all field are  required', 'type' => 'error'];
        }
        
       
        if ($msg == 'success') {
            $target = [

                ['user_email', '=', $username],

                ['money_password', '=', md5($password)],
            ];
            $msg = $auth->authenticate('users', $target, 'AND');
            if ($msg == 'success') {

                if ($auth->login('users', 'betuser', [['user_email', '=', $username], ['user_contact', '=', $username]], 'OR') == 'success') {

                    $select = new select();
                    $user = $select->fetch('users', [['user_email', '=', $username], ['user_contact', '=', $username]], 'OR');
                    $user = $user[0];
                    $uid = $user['uid'];
                    $update = new updates();
                    $insert = new insert();

                    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
                    {
                        $ip = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
                    {
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $ip = $_SERVER['REMOTE_ADDR'];
                    }
                    $insert->add('user_logs', ['uid' => $uid, 'login_date' => date('Y-m-d'), 'login_time' => date('H:i:s'), 'ip' => $ip, 'browser_info' => $_SERVER['HTTP_USER_AGENT'], 'device_info' => php_uname(), 'app_version' => '1.1']);
                    $update->update('users', ['last_login_time' => date('Y-m-d H:i:s'), 'last_login_date' => date('Y-m-d'), 'browser_info' => $_SERVER['HTTP_USER_AGENT'], 'device_info' => php_uname(),'state'=>'active','last_updated'=>date('Y-m-d H:i:s')], ['uid' => $uid]);
                    $update->update('redis_worker',['token'=>uniqid('usrlogin')],['tableid'=>11]);
                    $update->update('redis_worker',['token'=>uniqid('uslog')],['tableid'=>12]);
                    $payload = [
                        'uid' => $uid,
                        'username' => $user['username'],
                        'rebate=>' => ($user['rebate'] ?: 15),
                        // 'name' => $user['user_name'],
                        'email' => $user['user_email'],
                        'balance' => bcdiv(number_format($user['balance'],0,'',''), 1, 4),
                        'account_type' => $user['account_type'],
                        // 'expiry' => 10,
                        'expiry' => time() + 1000 * 60 *60 * 2,

                    ];
                    // adding jwt  
                    $key = "iamtherealdude";
                    $token = \Firebase\JWT\JWT::encode($payload, $key, 'HS256');
                    $update->update('users', ['login_token' => $token], ['uid' => $uid]);
                    $msg = ['message' => 'loginsuccess', 'type' => 'success', 'rebate' => doubleval($user['rebate']), 'token' => $token];
                } else {
                    $msg = ['message' => 'Failed to login', 'type' => 'error'];
                }
            } else {
                $msg = ['message' => 'Invalid password', 'type' => 'error'];
            }
        } else {
            $msg = ['message' => 'Email or phone number not found', 'type' => 'error'];
        }

        return $msg;
    }



    // admin login
    public function adminlogin($username, $password)
    {
        $auth = new Auth();
        $target = [
            ['email', '=', $username],
            ['username', '=', $username]

        ];
        $msg = $auth->authenticate('admin_tbl', $target, 'OR');
        if ($msg == 'success') {
            $target = [

                ['password', '=', md5($password)],
            ];
            $msg = $auth->authenticate('admin_tbl', $target);
            if ($msg == 'success') {
                if ($auth->login('admin_tbl', 'betadmin', [['email', '=', $username], ['username', '=', $username]], 'OR') == 'success') {
                    $msg = 'adminloginsuccess';
                } else {
                    $msg = 'Failed to login';
                }
            } else {
                $msg = 'Invalid password';
            }
        } else {
            $msg = 'Email or phone number not found';
        }

        return $msg;
    }

    // user registration
    public  function userregister($table, $key, $target)
    {
        $auth = new Auth();
        $insert = new insert();
        if ($auth->authenticate($table, $key, 'OR') == 'success') {
            $msg = 'Email or phone number already exist';
        } else {
            if ($msg = $insert->add($table, $target) == 'success') {
                if ($auth->login($table, 'betuser', [['user_email', '=', $target['user_email']], ['user_contact', '=', $target['user_contact']]], 'OR') == 'success') {

                    // get user id
                    $select =new select();
                    $user = $select->fetch($table, [['user_email', '=', $target['user_email']], ['user_contact', '=', $target['user_contact']]], 'OR');
                    $user = $user[0];
                    $uid = $user['uid'];
                    $update = new updates();
                    $insert = new insert();
                    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
                    {
                        $ip = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
                    {
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $ip = $_SERVER['REMOTE_ADDR'];
                    }
                    $insert->add('user_logs', ['uid' => $uid, 'login_date' => date('Y-m-d'), 'login_time' => date('H:i:s'), 'ip' => $ip, 'browser_info' => $_SERVER['HTTP_USER_AGENT'], 'device_info' => php_uname(), 'app_version' => '1.1']);
                    $update->update('users', ['last_login_time' => date('Y-m-d H:i:s'), 'last_login_date' => date('Y-m-d'), 'browser_info' => $_SERVER['HTTP_USER_AGENT'], 'device_info' => php_uname()], ['uid' => $uid]);
                    $msg = 'registersuccess';
                } else {
                    $msg = 'failed to login';
                }
            } else {
                $msg = 'Failed to register';
            }
        }


        return $msg;
    }

    public function addadmin($table, $key, $target)
    {
        $auth = new Auth();
        $insert = new insert();
        if ($auth->authenticate($table, $key, 'OR') == 'success') {
            $msg = 'Email or phone number already exist';
        } else {
            if ($msg = $insert->add($table, $target, $_FILES, '../admin/uploads/admin/')) {
                $msg = 'adminsuccess';
            } else {
                $msg = 'Failed to add admin';
            }
        }



        return $msg;
    }

    public function addpartners($table, $key, $target)
    {
        $auth = new Auth();
        $insert = new insert();
        if ($auth->authenticate($table, $key, 'OR') == 'success') {
            $msg = 'Email or phone number already exist';
        } else {
            if ($insert->add($table, $target, $_FILES, '../admin/uploads/partners/') == 'success') {
                $msg = 'partnersuccess';
            } else {
                $msg = 'Failed to register';
            }
        }



        return $msg;
    }
}
