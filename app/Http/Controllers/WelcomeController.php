<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

     public function index()
    {
      # code...
    //   $data=[
    //           0=>['name'=>'habib',
    //               'city'=>'Dhaka',
    //               'country'=>'Bangladesh',
    //             ],
    //
    //           1=>['name'=>'Rahad',
    //               'city'=>'Barisal',
    //               'country'=>'Bangladesh',
    //               ],
    //
    //       ];
    //   //return View('demo',compact('data'));
    //   //return View('demo',['data'=>$data]);
    //   return view ('demo')->with('data',$data);
    return view('FrontEnd.home.HomeContent');

  }
    public function electronics(){


  return view('FrontEnd.home.electronicsContent');
}
public function contact(){

  return view ('FrontEnd.home.contactContent');
}

public function single(){

  return view ('FrontEnd.home.singleContent');
}

public function women(){

  return view ('FrontEnd.home.womenContent');
}
public function men(){

  return view ('FrontEnd.home.menContent');
}

public function checkout(){

  return view ('FrontEnd.home.checkoutContent');
}


}
