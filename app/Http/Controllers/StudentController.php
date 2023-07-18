<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
// use DB;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
         $student=new Crud;
         $student->firstName=$request->firstName;
         $student->lastName=$request->lastName;
         $student->gender=$request->gender;
         $student->qualification=$request->qualification;
         $student->save();
         return redirect('show')->with("data insert");
         
         }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function view()
    {
     
     $results=Crud::all();
     return view('show',['results'=>$results]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $results=Crud::find($id);
        return view('editPage',['results'=>$results]);
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $results=Crud::find($id);
        $results->firstName=$request->firstName;
         $results->lastName=$request->lastName;
         $results->gender=$request->gender;
         $results->qualification=$request->qualification;
         $results->save();
         return redirect('show')->with("data updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         Crud::destroy($id);
        return redirect('show')->with("data updated");

    }
}
