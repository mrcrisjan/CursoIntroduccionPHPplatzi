<?php

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as v;
use Zend\Diactoros\Response\RedirectResponse;

class AuthController extends BaseController {
    public function getLogin() {
        return $this->renderHTML('login.twig');
    }
    
    public function postLogin($request) {
        $postData = $request->getParsedBody();
        $responseMessage = null;
        $user = User::where('email', $postData['email'])->first();
        if($user) {
            if (password_verify($postData['password'], $user->password)) {
                return new RedirectResponse('admin');
            } else {
                $responseMessage = 'It seems your email/password is wrong. Please check and retry';
            }
        } else {
            $responseMessage = 'It seems your email/password is wrong. Please check and retry';
        }

        return $this->renderHTML('login.twig', [
           'responseMessage' => $responseMessage
        ]);
    }
}