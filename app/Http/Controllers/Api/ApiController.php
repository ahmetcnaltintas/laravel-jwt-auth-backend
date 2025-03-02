<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    // Register API (POST, formdata)
    public function register(RegisterRequest $request)
    {
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            $token = JWTAuth::fromUser($user);

            return response()->json([
                'success' => true,
                'token' => $token,
                'user' => $user,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Kayıt işlemi sırasında bir hata oluştu!',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    // Login API (POST, formdata)
    public function login(LoginRequest $request)
    {
        try {
            $credentials = $request->only('email', 'password');

            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'success' => false,
                    'message' => 'E-posta veya şifre hatalı!',
                ], 401);
            }

            return response()->json([
                'success' => true,
                'token' => $token,
                'user' => Auth::user(),
            ], 200);
        } catch (JWTException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Token oluşturulamadı!',
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Giriş işlemi sırasında bir hata oluştu!',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    // Logout API (POST)
    public function logout()
    {
        try {
            JWTAuth::invalidate(JWTAuth::getToken());
            return response()->json([
                'success' => true,
                'message' => 'Çıkış işlemi başarılı!',
            ], 200);
        } catch (JWTException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Çıkış işlemi sırasında bir hata oluştu!',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    // Refresh Token API (POST)
    public function refresh()
    {
        try {
            $newToken = JWTAuth::refresh(JWTAuth::getToken());

            return response()->json([
                'success' => true,
                'token' => $newToken,
            ], 200);
        } catch (JWTException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Token yenileme sırasında bir hata oluştu!',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    // Profile API (GET)
    public function profile()
    {
        try {
            $user = Auth::user();

            return response()->json([
                'success' => true,
                'user' => $user,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Profil bilgisi alınırken bir hata oluştu!',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
