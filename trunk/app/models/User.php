<?php

//
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    protected $table = 'nguoidung';
    public $rules = array(
        'username' => 'required|min:3',
        'password' => 'required|min:3'
    );
    protected $hidden = array('password');

    public function validate($data) {
        return Validator::make($data, $this->rules);
    }

    public function Authenticate($data) {
        $validation = $this->validate($data);
        //
        if ($validation->passes()) {
            $user = DB::table($this->table)
                    ->select('id', 'username', 'password', 'roles')
                    ->where('username', $data['username'], "and")
                    ->where('status', 1)
                    ->first();
            if ($user != null) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getAuthIdentifier() {
        return $this->getKey();
    }

    public function getAuthPassword() {
        return $this->password;
    }

    public function getRememberToken() {
        return $this->remember_token;
    }

    public function setRememberToken($value) {
        $this->remember_token = $value;
    }

    public function getRememberTokenName() {
        return 'remember_token';
    }
     public function getReminderEmail() {
        return $this->email;
    }

//    /**
//     * Get role
//     *
//     * @return string
//     */
//    public function getRole() {
//        $role = DB::table('user')->where('username', $this->username)->first();
//        if (!is_null($role)) {
//            return 'admin';
//        }
//        return 'guest';
//    }
//
//    public static function loginUser($username, $password) {
//        $check = false;
//        if (count(DB::table('user')->where('username', $username)->where('password', $password)->first()) > 0) {
//            $check = true;
//        }
//        return $check;
//    }
}
