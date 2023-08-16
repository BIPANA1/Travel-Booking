<?php

namespace App\Http\Controllers;


use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.addDestination');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $destination = new Destination();
        $destination->title = $request->title;
        $destination->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() .'.'.$file->getClientOriginalName();
            $file->move(public_path('Image') ,$filename);
        }
        $destination->image = 'Image/' .$filename;
        $destination->save();
        return view('admin.addDestination');
    }


    public function show(){
        $destinations = Destination::all();
        return view('admin.destination',compact('destinations'));
    }
   
    public function edit($id)
    {
        $destination = Destination::find($id);
        return view('admin.edit', compact('destination'));
    }

    
    public function update($id,Request $request)
    {
        $destination = Destination::find($id);
        $destination->title = $request->title;
        $destination->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() .'.'.$file->getClientOriginalName();
            $file->move(public_path('Image') ,$filename);
            $destination->image = 'Image/' .$filename;
        }
        
        $destination->update();
        return redirect()->back(); 
    }

    public function destroy($id)
    {
        $data = Destination::find($id);
    
        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Record deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Record not found.');
        }
    }
}
