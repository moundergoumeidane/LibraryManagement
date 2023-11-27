<?php

namespace App\Http\Controllers;

use App\document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        if (\request()->has('search')&&!empty(\request('search'))){
            $documents = document::where('title','like','%'.\request('search').'%')->get();
        }else{
            $documents = document::all();
        }
        return view('documents.index')->with('documents',$documents);
    }



    public function create()
    {
        return view('documents.create');
    }
    public function store(Request $request)
    {
        $data= $request->validate([
            "title"=>"required|string|max:50",
            "author"=>"required|string|max:50",
            "type"=>"required|string",
            "edition"=>"sometimes|nullable|string",
            "promotion"=>"sometimes|nullable|string",
            "ISBN"=>"sometimes|nullable|unique:documents,ISBN",
            "number_of_copies"=>"required|string",
            "placement"=>"required|string|max:50|unique:documents,placement",

        ]);
        document::create($data);
        $count = document::all()->count();
        return redirect()->route('documents.index');
    }


    public static function countdocs()
    {
        $docs = document::count();
        return $docs;
    }



    public function edit($id)
    {
        $document = document::findOrfail($id);
        return view('documents.edit',['d'=>$document]);
    }
    public function update($id,Request $request)
    {
        $data= $request->validate([
            "title"=>"required|string|max:50",
            "author"=>"required|string|max:50",
            "type"=>"required|string",
            "edition"=>"sometimes|nullable|string",
            "promotion"=>"sometimes|nullable|string",
            "ISBN"=>"sometimes|nullable|string|unique:documents,ISBN,".$id,
            "number_of_copies"=>"required|string",
            "placement"=>"required|string|max:50|unique:documents,placement,".$id,

        ]);
        $d = document::findOrfail($id);
        $d->update($data);
        return redirect()->route('documents.index');
    }



    public function destroy($id)
    {
        $d = document::findOrfail($id);
        $d -> delete();
        return redirect()->back();
    }



    public function detail($id)
    {
        $document = document::findOrfail($id);
        return view('documents.detail')->with('d',$document);
    }
}
