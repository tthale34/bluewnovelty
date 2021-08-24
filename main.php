<?php
// include('JWT.php');
require_once('vendor/autoload.php');
use \Firebase\JWT\JWT;
class main{
    protected $jwtToken;
    protected $issuedAt;
    protected $expire;
    protected $jwt_secrect;

    public function __construct() {
        $this->issuedAt = time();        
        // Token Validity (3600 second = 1hr)
        $this->expire = $this->issuedAt + (3600*24);
        // Set your secret or signature
        $this->jwt_secrect = "this_is_my_secrect";
    }
    function getJWTData($jwtParent, $toArray = true) {
        global $key;
        if (is_object($jwtParent)) {
            if (isset($jwtParent->jwt)) {
                try {
                    $jwtData = JWT::decode($jwtParent->jwt, $this->jwt_secrect, array('HS256'));
                } catch(Exception $e) {
                    $jwtData = null;
                }
                if (is_object($jwtData)) {
                    if (isset($jwtData->data)) {
                        if ($toArray) {
                            return (array) $jwtData->data;    
                        } else {
                            return $jwtData;    
                        }
                    } else {
                        return null;
                    }
                } else {
                    return null;
                }
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
    function setJWTData($data) {
        if ($data) {
            $token = array( 
               "iss" => 'http://'.$_SERVER['HTTP_HOST'],
               "aud" => 'http://'.$_SERVER['HTTP_HOST'],
               "iat" => $this->issuedAt,
            //    "nbf" => $nbf,
               "exp" => $this->expire,
               "data" =>  $data);
            $jwt = JWT::encode($token, $this->jwt_secrect);
            return $jwt;
        } else {
            return null;
        }
    }

}
?>