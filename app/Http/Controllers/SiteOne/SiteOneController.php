<?php

namespace App\Http\Controllers\SiteOne;
use App\Models\Contact;
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
    function ok(){ 
            return view('SiteOne.ok');}
    function viewcontact(){ 
                $contact=Contact::all();
                return view('SiteOne.view_contact',compact('contact'));}
    function edit($id){ 
                $contact=Contact::find($id);
                return view('SiteOne.edit',compact('contact'));}
                     
     function update(Request $request){ 
                    // dd($request->all());
                
                $contact = Contact::query()->findOrFail($request->id);
                
                 if($request->hasFile('image')){
                        $name = time().rand().'_'.$request->file('image')->getClientOriginalName();
                        $request->file('image')->move(public_path('uploads'),$name);
                        $contact->update([
                            'image' => $name,
                        ]);
                    }
                    
                 $contact->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'message' => $request->message
                    ]);
                    return redirect()->route('site1.viewcontact');
                }
                
    
        
    function postcontact(Request $request){ 
        // dd($request->all());
        $request->validate([
         'name'=>'required',
         'email'=>'required',
         'phone'=>'required',
         'image'=>'required',
         'message'=>'nullable'
        ]);
         $name=time().rand().'_'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'),$name);
        

        Contact::create([
         'name'=>$request->name,
         'email'=>$request->email,
         'phone'=>$request->phone,
         'image'=>$name,
         'message'=>$request->message
        ]);

        return redirect()->route('site1.ok');
        
       }


      
    }
