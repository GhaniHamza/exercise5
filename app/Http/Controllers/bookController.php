<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookController extends Controller
{
  public function about() {
    return view('subview/about');
  }
  public function list () {
    $books = array(
      array("book of medicine", "6548-65432","Med",359),
      array("book of Commerce", "6546894-564","Com",98),
      array("book of Computing", "35725-65432","Comp",269),
      array("book of Arts", "6548-35489","Art",50)
    );
  return view('subview/list', compact('books'));
  }
}
