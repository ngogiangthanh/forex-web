<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier() {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword() {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail() {
        return $this->email;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole() {
        $role = DB::table('user')->where('username', $this->username)->first();
        if (!is_null($role)) {
            return 'admin';
        }
        return 'guest';
    }

    public function getInfo() {
    }
    
    public static function loginUser($username, $password){
        $check = false;
        if(count(DB::table('user')->where ('username', $username)->where('password', $password)->first())>0) {
            $check = true;
        }
        return $check;
    }
    
    public static function updatePwd($currentpwd, $newpwd, $newpwd1) {
        $result = false;
        $pwd = DB::table('user')->first()->password;
        if($newpwd1 == $newpwd) {
            if($currentpwd == $pwd) {
                try {
                    DB::table('user')->where($pwd, md5($currentpwd))->update(array('password' => $newpwd));
                    $result = true;
                    return $result;
                } catch (Exception $exc) {
                    return $result;
                }
            } else {
                return $result;
            }
        }
        return $result;
    }
}