<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function updateProfile(Request $request)
  {
      $user = Auth::user();

  }
}
