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
        if (Auth::user()->id == 0)
            return 'admin';
        $role = DB::table('quanly')->where('maql', $this->username)->first();
        if (!is_null($role)) {
            return $role->maql;
        }
        return 'khachhang';
    }

    public function getInfo() {
        switch ($this->getRole()) {
            case 'admin':
            case 'quanly':
                return DB::table('quanly')->where('maql', $this->username)->first();
            case 'khachhang':
                return DB::table('khachhang')->where('makh', $this->username)->first();
        }
    }
}
