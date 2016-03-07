<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//

    public function about()
    {

//        1st Apporach
//        $data =[];
//
//        $data ['first'] = 'Luiz';
//        $data ['last'] = 'Cavalieri';
//
//        return view('pages.about', $data);

//        2nd Approach
//        return view('pages.about')->with([
//            'first' => 'Luiz',
//            'last' => 'Cavalieri'
//        ]);


//        3rd approach
        $first = 'Luiz';
        $last = 'Cavalieri';

        $people = [

            'Taylor Otwell', 'Dayle Rees', 'Eric Barnes'

        ];


        return view('pages.about', compact('first', 'last', 'people'));




    }


    public function contact()
    {
        return view('pages.contact');
    }




}
