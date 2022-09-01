<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
      return 'hello controller';
    }

    // public function show($id) {

    //   $data = array(
    //     "id" => $id,
    //     "name" => "Ronnel Navarro",
    //     "age" => 22,
    //     "email" => "navskieanneng"
    //   );

    //   return view('user', $data);
    // }
    public function show($id) {
      return view('user')
      ->with('name', 'Ronnel Navarro')
      ->with('mobile', '09100818354')
      ->with('address', 'Subic')
      ->with('id', $id);
    }
}
