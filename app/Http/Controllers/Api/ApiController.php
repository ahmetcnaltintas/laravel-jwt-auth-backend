<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
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

            $data = [
                'success' => true,
                'token' => $token,
                'user' => $user,
            ];

            return response()->json($data, 200);
        } catch (\Exception $err) {

            return response()->json([
                'success' => false,
                'message' => 'Kayıt işlemi sırasında bir hata oluştu!',
                'error' => $err->getMessage(),
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

            $data = [
                'success' => true,
                'token' => $token,
                'user' => Auth::user(),
            ];
            return response()->json($data, 200);

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
    public function logout(Request $request)
    {
        try {
            $token = JWTAuth::getToken();
            if (!$token) {
                return response()->json(['error' => 'Token not provided'], 400);
            }

            JWTAuth::invalidate($token);
            return response()->json(['message' => 'Successfully logged out']);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Failed to logout, please try again.'], 500);
        }
    }
    // Refresh Token API (POST)
    public function refresh(Request $request)
    {
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json(['error' => 'Token not provided'], 400);
        }

        try {
            $newToken = JWTAuth::refresh($token);
            return response()->json([
                'success' => true,
                'token' => $newToken,
            ]);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not refresh token'], 500);
        }
    }
    // Profile API (GET)
    public function profile(Request $request)
    {
        return response()->json([
            'user' => $request->user(),
        ]);
    }
}
