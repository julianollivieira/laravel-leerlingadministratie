<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
      $user = User::where('email', $request->input('email'))->get();
      try {
        if(count($user) == 0)
          throw new \Exception('E-mailadres/wachtwoord klopt niet.');
        if(!password_verify($request->input('password'), stripslashes($user[0]->password)))
          throw new \Exception('E-mailadres/wachtwoord klopt niet.');
        // $response = (object) array('status' => 'success', 'user' => $user[0]);
        $response = (object) array('status' => 'success');
        session(['user' => $user[0]]);
        error_log(session('user'));
        // $request->session()->put('user', $user[0]);
      } catch(\Exception $e){
        $response = (object) array('status' => 'error', 'error' => $e->getMessage());
      }
      return json_encode($response);
    }

    public function logout(Request $request)
    {
      $request->session->forget('user');
      return redirect('home');
    }
}
