<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paslon;
use App\Models\User;
use App\Models\voting;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

   public function home(Request $request)
   {
      $paslon = Paslon::all();
      return view('user.home', compact('paslon'));
   }

   public function vote(Request $request)
   {
      $request->validate([
      'id_users' => 'required',
      'id_paslon' => 'required',
      ]);

      $vote = new Voting;
      $vote->id_users = Auth::id();
      $vote->id_paslon = $request->id_paslon;
      $vote->save();

      return redirect()->route('user.quickcount');
   }
   
}
