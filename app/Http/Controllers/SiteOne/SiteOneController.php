<?php

namespace App\Http\Controllers\SiteOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteOneController extends Controller
{
    function master(){ 
        return view('SiteOne.master');}
    function home(){ 
        return view('SiteOne.home');}
        
    function Portfolio(){ 
        return view('SiteOne.Portfolio');}
        
    function about(){ 
        return view('SiteOne.about');}
        
    function contact(){ 
        return view('SiteOne.contact');}
        
    function postcontact(Request $request){ 
        dd($request->all());
       }

    }
