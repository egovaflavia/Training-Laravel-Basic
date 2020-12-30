<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($nama)
    {
        if ($nama == "egova") {
            return abort(403, 'Anda tidak punya akses ke sini');
        } elseif ($nama == "riva") {
            return "Hello " . $nama;
        } else {
            return abort(404, 'Anjir');
        }
    }
}
