<?php
namespace Block\CSRF;

class BlockCSRF
{
    
    private static $blockCSRF;
    private static $expireTime;
    
    private function __construct() {
        
        if (!isset($_SESSION)) {
            session_start();
        }
        
        // expire in 10 mins
        self::$expireTime = 600;
        
        date_default_timezone_set('Asia/Shanghai');
    }
    
    public static function instance() {
        
        if (!isset(self::$blockCSRF)) {
            self::$blockCSRF = new BlockCSRF();
        }
        return self::$blockCSRF;
    }
    
    public function generate() {
        
        $_SESSION['csrfToken'] = array();
        $_SESSION['csrfToken']['token'] = hash('sha256', mt_rand(0, mt_getrandmax()));
        $_SESSION['csrfToken']['createdTime'] = time();
        return $_SESSION['csrfToken']['token'];
    }
    
    public function check($token) {
        
        if (isset($_SESSION['csrfToken']['token'])) {
            $now = time();
            if ($token === $_SESSION['csrfToken']['token']) {
                if (($now - $_SESSION['csrfToken']['createdTime']) < self::$expireTime) {
                    $this->destory();
                    return true;
                }
                $this->destory();
                return false;
            }
            return false;
        }
        return false;
    }
    
    private function destory() {
        
        $_SESSION['csrfToken'] = array();
        unset($_SESSION['csrfToken']);
    }
}
