<?php
namespace shukaljasmin\jessadmin\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Foundation\Auth\Admin as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    
    public function get_role($value)
    {
        return $this->admin->role($value);
    }
}
