<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ProcedureController extends Controller
{

    /**
     * 
     */
    public function index()
    {
        $data = array(
            'pageTitle' => 'Home',
            'items' => Items::orderBy('created_at', 'desc')->take(5)->get()
        );
        
        return view('lists')->with($data);
    }

    /**
     * 
     */
    public function create() {
        $data = array(
            'pageTitle' => 'Add a new Procedure',
        );
        
        return view('create')->with($data);
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request) {
        $validated = $request->validate([
            'title' => 'required|min:3|max:666',
            'message' => 'required|min:5',
        ]);
        
        // Model saves the input we validated
        $item = Items::create($validated);
        
        /** Clever way of doing it yourself...?
        * $item = new Items;
        * $item->title = $request->title;
        * $item->message = $request->message;
        * $item->save();
        */

        return back()->with('success', 'Created a new Procedure!');
    }

    /**
     * 
     */
    public function show() {

    }
}
