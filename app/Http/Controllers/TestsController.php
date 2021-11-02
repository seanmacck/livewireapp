<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestsController extends Controller
{
    public function one ()
    {
        $haystack = 'needle';
    $foo = 'bar';
    return view('tests.one', [
        'haystack' => $haystack,
        'foo' => $foo,
    ]);
    }
}
