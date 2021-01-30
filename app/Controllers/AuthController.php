<?php

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as v;

class AuthController extends BaseController {
    public function getLogin() {
        return $this->renderHTML('login.twig');
    }
    
    public function postLogin($request) {
        $postData = $request->getParsedBody();
        $user = User::where('email', $postData['email'])->first();
        if($user) {
            if (password_verify($postData['password'], $user->password)) {
                echo 'Password was verified';
            } else {
                echo 'Wrong Password';
            }
        } else {
            echo 'Not Found';
        }
    }
}