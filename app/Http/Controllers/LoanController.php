<?php

namespace App\Http\Controllers;

use App\document;
use App\loan;
use App\Subscriber;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        $loans = [];
        if (\request()->has('search') && !empty(\request('search'))){
            $loans = loan::whereHas('subscriber',function ($q){
                $q->where('first_name','like','%'.\request('search').'%')->orWhere('last_name','like','%'.\request('search').'%');
            })->orWhereHas('document',function ($q){
                $q->where('title','like','%'.\request('search').'%');
            })->get();
        }else{
            $loans= loan::all();
        }

        return view('loans.index')->with('loans',$loans);
    }



    public function create()
    {
        $docs = document::where('number_of_copies' , '>' ,0)->get();
        $subs = Subscriber::where('state' , true)->get();
        return view('loans.create',compact('docs','subs'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'document_id' => 'required|numeric|gt:0',
            'subscriber_id' => 'required|numeric|gt:0',
            'comment' => 'required|string|max:200',
            'to' => 'date',
        ]);
        $data['to'] = now()->addDays(15);
        $loan = loan::create($data);
        $loan->document->number_of_copies -=1;
        $loan->document->save();


        return redirect()->route('loans.index');
    }

    public static function countloans()
    {
        $loans = loan::count();
        return $loans;
    }



    public function detail($id)
    {
        $loan = loan::findOrfail($id);
        return view('loans.detail')->with('l',$loan);
    }

    public function edit($id)
    {
        $loan = loan::findOrfail($id);
        return view('loans.edit',['l'=>$loan]);
    }

    public function update($id,Request $request)
    {
        $data = $request->validate([
            'comment' =>'string|max:200',
            'to' => 'date',
        ]);
        $loan = loan::findOrFail($id);
        $loan->update($data);
        return redirect()->route('loans.index');
    }

    public function destroy($id)
    {
        $loan = loan::findOrFail($id);
        $loan->document->number_of_copies +=1;
        $loan->document->save();
        $loan->delete();
        return redirect()->route('loans.index');
    }
}
