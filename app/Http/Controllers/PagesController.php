<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tender;

class PagesController extends Controller
{
    function index(){
        $tenders = Tender::all();
        return view('pages.index')->with('tenders', $tenders);
    }
}
