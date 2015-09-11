<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class sectionController extends Controller
{
    /*
    // Example Basic Controller
    public function index (){
    	return ' <center><h1>The Library</h1></center>';
    }

    public function createSection (){
    	return ' <center><h1>Adding a new section to the library</h1></center>';
    }

    public function SaveNewSection (){
    	$sectionName = Input::get('sectionName');
		$sectionDetails = Input::get('sectionDetails');
    }

    public function ShowSection ($sectionName){
    	return ' <center><h1>This page for '.$sectionName.' section </h1></center>';
    }

    public function EditSection ($sectionName){
    	return ' <center><h1>Reruening the form for editing '.$sectionName.' section </h1></center>';
    }

    public function SaveEditSection ($sectionName){
    	// getting details about that section from DB by it's sectionName then edit it then save it to DB
    }
    public function DeleteSection ($sectionName){
    	// calling the DB to delete the section with $sectionName 
    }
    */

    // Restfull Controller Example 
    public function getIndex (){
    	return ' <center><h1>The Library</h1></center>';
    }

    public function getNewSection (){
    	return ' <center><h1>Adding a new section to the library</h1></center>';
    }

    public function postNewSection (){
    	// getting details about that section from DB by it's sectionName then edit it then save it to DB
 
    }

    public function getShow ($sectionName){
    	return ' <center><h1>You are currently viewing =  '.$sectionName.' section </h1></center>';
    }

    public function getEdit ($sectionName){
    	return ' <center><h1>Reruening the form for editing '.$sectionName.' section </h1></center>';
    }

    public function PatchEdit ($sectionName){
    	// Update the specific section
    }
    public function deleteDeleteSection ($sectionName){
    	// calling the DB to delete the section with $sectionName 
    }
}
