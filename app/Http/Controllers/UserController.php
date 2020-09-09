<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
      $email = $request->input('email');
      $password = $request->input('password');
      $user = User::where('email', $email)->get();

      try {
        if(count($user) != 0){
          if(password_verify($password, $user[0]->password)){
            $response = (object) array(
              'status' => 'success',
              'user' => $user[0]
            );
          } else {
            throw new \Exception('E-mailadres/wachtwoord klopt niet');
          }
        } else {
          throw new \Exception('E-mailadres/wachtwoord klopt niet');
        }
      } catch (\Exception $e) {
        $response = (object) array(
          'status' => 'error',
          'error' => $e->getMessage()
        );
      }

      return json_encode($response);
    }
}
