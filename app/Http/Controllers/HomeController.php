<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function getIndex()
    {
        return view('home');
    }
    public function postIndex(\App\Http\Requests\CpfRequest $cpf)
    {
        return view('ok');
    }
}
