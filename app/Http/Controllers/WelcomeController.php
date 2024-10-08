<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
      /*   User::query()->create([
            'name' => 'Maria Adriana',
            'email' => 'mariaadriana15@gmail.com',
            'password' => 'Qwerty123!'
        ]);
 */
        return view('welcome');
    }
}
