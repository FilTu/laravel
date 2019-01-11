<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Publishers;

class PublishersController extends Controller
{

  //list of publishers and titles

  public function list()
  {
    $show = DB::table('publishers')
      ->join('titles', 'titles.id', '=', 'title_id' )
      ->select('publishers.name', 'titles.title')
      ->paginate(10);

      return $show;
  }

}
