<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscriberController extends Controller
{
    public function index()
    {
        if (\request()->has('search')&&!empty(\request('search'))){
            $subscribers = Subscriber::where('last_name','like','%'.\request('search').'%')->orWhere('first_name','like','%'.\request('search').'%')->get();
        }else{
            $subscribers = Subscriber::all();
        }
        return view('subscribers.index')->with('subscribers',$subscribers);
    }



    public static function countsubs()
    {
        $subs = Subscriber::count();
        return $subs;
    }



    public function create()
    {
        return view('subscribers.create');
    }
    public function store(Request $request)
    {
        $data= $request->validate([
           "first_name"=>"required|string|max:50",
           "last_name"=>"required|string|max:50",
           "email"=>"required|email|unique:subscribers,email",
           "card_number"=>"required|string|unique:subscribers,card_number",
           "phone_number"=>"required|unique:subscribers,phone_number|string|max:50",
            "state"=>"boolean",

        ]);
        Subscriber::create($data);
        return redirect()->route('subscribers.index');
    }



    public function edit($id)
    {
        $subscribers = Subscriber::findOrfail($id);
        return view('subscribers.edit',['s'=>$subscribers]);
    }
    public function update($id,Request $request)
    {
        $data= $request->validate([
            "first_name"=>"required|string|max:50",
            "last_name"=>"required|string|max:50",
            "state"=>"boolean",
            "email"=>"required|email|unique:subscribers,email,".$id,
            "card_number"=>"required|string|unique:subscribers,card_number,".$id,
            "phone_number"=>"required|string|max:50|unique:subscribers,phone_number,".$id,
        ]);
        $s = Subscriber::findOrfail($id);
        $s ->update($data);
        return redirect()->route('subscribers.index');
    }



    public function destroy($id)
    {
        $s = Subscriber::findOrfail($id);
        $s -> delete();
        return redirect()->back();
    }


    public function detail($id)
    {
        $subscriber = Subscriber::findOrfail($id);
        return view('subscribers.detail')->with('s',$subscriber);
    }
}
