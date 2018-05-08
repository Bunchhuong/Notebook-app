<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notebook;

class NoteBookController extends Controller
{
    public function create(){
    	return view('create');
    }
    public function index(){
    	$notebooks = Notebook::all();
    	return view('index', compact('notebooks'));
    }
    public function store(Request $Request){
    	$dataInpute = $Request-> all();
    	Notebook :: create($dataInpute);
    	return redirect('/notebookapp');
    }
    public function destroyed($id){
    	$notebook = Notebook::where ('id',$id)->first();
    	$notebook -> delete();
    	return redirect('/notebookapp');
    }
    public function edit($id){
    	$notebook = Notebook::where ('id', $id )-> first();
    	return view ('edit') ->with('notebook', $notebook); 
    }
    public function update(Request $request,$id){
    	$notebook = Notebook::where('id',$id)->first();
    	$notebook -> update($request-> all());
    	return redirect('/notebookapp');
    }
}
