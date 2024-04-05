<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\college;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class CollegeController extends Controller
{
    //view page
    function createPage(){
        $data=college::paginate(4);
return view('admin.pages.college',compact('data'));
    }
    //filter pages
    function filterPage(){

        return redirct('/college');
    }
    //store data
    function store(Request $request){


        try{
            $imagePath=0;
            if ($request->hasFile('collegeImage')) {
                $img_name = 'collegeImage_' . time() . '.' . $request->collegeImage->getClientOriginalExtension();
                $request->collegeImage->move(public_path('collegeImage/'), $img_name);
                $imagePath = 'collegeImage/' . $img_name;
            }
            $college=new college();

        $college->college_name=$request->college_name;
        $college->place=$request->place;
        $college->state=$request->state;
        $college->city=$request->city;
        $college->study_mode=$request->study_mode;
        $college->exam=$request->exam;
        $college->institute_type=$request->institute_type;
        $college->courses_id= is_array($request->courses_id) ? implode(',', $request->courses_id) : $request->courses_id;
        $college->collegeImage=$imagePath;
        $college->CollegeDetail=$request->CollegeDetail;
        $college->save();
       
       
        return redirect()->back()->with('success', 'Form Submitted Successfully!');
        

        }catch(Exception $e){
            return redirect()->back()->with('error', "Failed {$e->getMessage()}");

        }
        

        


        return redirct('/college');
    }
    // edit data
    function edit(Request $request, $id){
        return view('');
    }
    // delete data
    function destroy (Request $request, $id){

        try{
            $college = college::find($id); // Assuming College is the name of your Eloquent model
            if (!$college) {
                return redirect()->back()->with('error', 'College not found.');
            }
            $college->delete();
        return redirect()->back()->with('success', 'Form Submitted Successfully!');
        

    }catch(Exception $e){
        return redirect()->back()->with('error', "Failed {$e->getMessage()}");

    }
    
    }

    public function exceldata()
    {
         $data = college::all();

        // // Generate Excel
        $fileName = 'your_data.xlsx';

        return Excel::download(function ($excel) use ($data) {
            $excel->setTitle('Your Data');

            $excel->sheet('Sheet 1', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        }, $fileName);
       

}

function colleges(Request $request, $id){

    $idArray = explode(',', $id);
$data = college::where(function ($query) use ($idArray) {
    foreach ($idArray as $value) {
        $query->orWhere('courses_id', 'like', '%' . $value . '%');
    }
})->get();
$count = $data->count();
return view('pages.collegeDetails',compact('data'));

    
    
}
}