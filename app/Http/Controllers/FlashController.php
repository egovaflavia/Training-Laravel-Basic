<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class FlashController extends Controller
{
    public function index()
    {
        return view('flash');
    }

    public function success(Request $request)
    {
        $request->session()->flash('success', 'Ini nofif success');
        return redirect('flash');
    }

    public function info(Request $request)
    {
        $request->session()->flash('info', 'Ini nofif info');
        return redirect('flash');
    }

    public function danger(Request $request)
    {
        $request->session()->flash('danger', 'Ini nofif danger');
        return redirect('flash');
    }
}
