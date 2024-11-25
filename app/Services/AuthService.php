<?php
namespace App\Services;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthService{
    protected $model;
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function create($param){
        try{
            $param['role']='normal_user';
            
            return $this->model->create($param);
        }
        catch (Exception $ex){
            Log::error($ex);
            return false;
        }
    }

    public function logout(){
        Auth::logout();
        return true;
    }
}
