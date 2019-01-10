<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Magazine;

class MagazineController extends Controller
{
  //show magazines by ID
  
  public function show($id)
  {
    //select magazines by send ID
    $show = DB::table('magazines')
      ->select('*')
      ->where('magazines.id', '=', $id)
      ->get();

      return $show;
  }

  //show magazines with filters implemented

  public function filter($key)
  {
        $show = DB::table('magazines')
        ->select('*')
        ->where('name', 'like', '%'.$key.'%')
        ->orwhere('id', 'like', '%'.$key.'%')
        ->get();

      return $show;
  }

}
