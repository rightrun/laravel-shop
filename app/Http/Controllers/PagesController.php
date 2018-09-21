<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function root() {
        return view('pages.root');
    }

    protected function emailVerifiedNotice() {
        return view('pages.email_verify_notice');
    }
}
