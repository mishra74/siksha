<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class CourseController extends Controller
{
    //view page
    function createPage(){
        $data=course::paginate(4);
return view('admin.pages.course',compact('data'));
    }
    //filter pages
    function filterPage(){

        return redirct('/college');
    }
    //store data
    function store(Request $request){


        try{
            $course=new course();
            $course->course_name=$request->course_name;
            $course->Admission_Process=$request->Admission_Process;
            $course->Duration=$request->Duration;
            $course->Exam_Type=$request->Exam_Type;
            $course->Course_Fee=$request->Course_Fee;
            $course->list_of_course=$request->list_of_course;
            $course->avg_salary=$request->avg_salary;
            $course->min_salary=$request->min_salary;
            $course->max_salary=$request->max_salary;
            // $college->courses_id=implode(',', $request->courses_id);
            $course->syllabus=implode(',', $request->syllabus);
            $course->Jobs=implode(',', $request->Jobs);
            $course->Job_detail=$request->Job_detail;
            $course->save();
        // $college->courses_id=implode(',', $request->courses_id);
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
    function destroy(Request $request, $id){

        
        try{
            $college = course::find($id); // Assuming College is the name of your Eloquent model
            if (!$college) {
                return redirect()->back()->with('error', 'College not found.');
            }
            $college->delete();
        return redirect()->back()->with('success', 'Form Submitted Successfully!');
        

    }catch(Exception $e){
        return redirect()->back()->with('error', "Failed {$e->getMessage()}");

    }
    }
}