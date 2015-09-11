<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

// Example ResourceFull Controller 

class SectionControllerTwo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct(){

        $this->middleware('auth');
    }

    public function index()
    {
        //return ' <center><h1>The Library</h1></center>';
       
       // $date = date('Y-m-d');
        //$time = time('H:i:s');

         
        $sections = ['Algorithm'=> 'Introduction_to_Algorithm.jpg', 'Hacking' =>'Gray_Hat_Hacking.jpg', 
        'Game Programming' => 'Game_Engine_Architecture.jpg', 'Java' => 'Java_How_to_Program.jpg', 
        'Programming Interview' => 'Coding_Interview.jpg', 
        'Software Development' => 'Software_Enginnering_Principle_nd_Product.jpg', 
        'Data Structures' => 'Data_Structures.jpg', 
        'Linux' => 'Beginning_Linux_Programming.jpg'];
        

        // $sections = DB::table('sections')->get();

        //return view('libraryViewsContainer.library')->withDate($date)->withTime($time)->withSections($sections);
        return view('libraryViewsContainer.library')->withSections($sections);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return ' <center><h1>creating a new section to the library</h1></center>';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Storing the new created section to the DB
        $section_name = $request->input('section_name');
        $file = $request->file('image');
        $destinationPath = 'images';
        $filename = $file->getClientOriginalName();
        $file->move($destinationPath, $filename);

        DB::table('sections')->insert(['$section_name' => $section_name, 'image_name' => $filename]);
        return redirect ('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return ' <center><h1>You are currently viewing =  '.$id.' idsection </h1></center>';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return ' <center><h1>Reruening the form for editing '.$id.' section </h1></center>';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //Saving the edited section to the DB
        $section_name = $request->input('section_name');
        DB::table('sections')->where('id', $id)->update(['section_name' => $section_name]);
        return redirect ('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //Deleted the section with id from DB
        DB::table('sections')->where('id', $id)->delete();
        return redirect ('admin');
    }   

    public function adminController(){
       // $date = date('Y-m-d');
       // $time = time('H:i:s');


       $sections = DB::table('sections')->get();
       // return view('libraryViewsContainer.admin', ['sections' => $sections]);
        // return view('libraryViewsContainer.admin')->withDate($date)->withTime($time)->withSections($sections);
        return view('libraryViewsContainer.admin')->withSections($sections);
    }
}
