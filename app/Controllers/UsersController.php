<?php

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as Val;

class UsersController extends BaseController {
    public function getAddUserAction($request) {

        $responseMessage = null;
        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            $userValidator = Val::key('username', Val::stringType()->notEmpty())
                                ->key('email', Val::stringType()->notEmpty())
                                ->key('password', Val::stringType()->notEmpty());
            try {
                $userValidator->assert($postData);
                $user = new User();
                $user->username = $postData['username'];
                $user->email = $postData['email'];

                $pwd_hashed = password_hash($postData['password'], PASSWORD_DEFAULT);
                $user->password = $pwd_hashed;

                $user->save();
                $responseMessage = 'Saved';
            } catch (\Exception $e) {
                $responseMessage = $e->getMessage();
            }  
        }
        return $this->renderHTML('addUser.twig', [
            'responseMessage' => $responseMessage 
        ]);
    }
}