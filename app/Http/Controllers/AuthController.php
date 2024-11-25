<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function formRegister(){
        return view('Auth/register',[
            'title'=>'Đăng ký tài khoản'
        ]);
    }

    public function register(RegisterRequest $registerRequest)
    {
        $params = $registerRequest->validated();
        $result = $this->authService->create($params);

        if ($result) {
            // Sử dụng phiên bản người dùng đã tạo để gửi thông báo xác minh email.
            // $result->sendEmailVerificationNotification();

            return redirect()->route('formLogin')->with('verified', true);
        }

        return redirect()->back()->withErrors(['error' => 'Có lỗi xảy ra, vui lòng thử lại sau.']);
    }
        
    public function formLogin(){
        return view('Auth/login',[
            'title'=>'Đăng nhập'
        ]);
    }

    public function login(LoginRequest $loginRequest){
        $params = $loginRequest->validated();

        if (Auth::attempt($params)) {
            return redirect()->route('admin.home');
        }

        return redirect()->back()->withErrors(['error' => 'Email hoặc mật khẩu không đúng.']);
    }

    public function logout(){
        $result = $this->authService->logout();

        if ($result){
            return redirect()->route('formLogin');
        }

        return redirect()->back();
    }
}
