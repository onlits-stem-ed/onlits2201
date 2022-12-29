<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function get_all_enrollments()
    {
        $enrollments = Enrollment::all();
        return view('enrollment.enrollments', ['enrollments' => $enrollments]);
    }

    public function store(Request $request)
    {
        $enrollment = new Enrollment();
        $enrollment->first_name = $request->first_name;
        $enrollment->middle_name = $request->middle_name;
        $enrollment->last_name = $request->last_name;
        $enrollment->email = $request->email;
        $enrollment->class = $request->class;
        $enrollment->save();
        echo "Data saved!";
        //-------------Refactor this----------------------
        //Calling get_all_enrollments do not return to the enrollments page. (refactoring needed to ensure DRY)

        // $enrollments = Enrollment::all();
        // return view('enrollment.enrollments', ['enrollments' => $enrollments]);
    }

    public function get_enrollment($id)
    {
        $enrollment = Enrollment::find($id);
        return view('enrollment.update', ['enrollment' => $enrollment]);
    }

    public function update(Request $request)
    {
        $enrollment = Enrollment::find($request->enrollment_no);
        $enrollment->first_name = $request->first_name;
        $enrollment->middle_name = $request->middle_name;
        $enrollment->last_name = $request->last_name;
        $enrollment->email = $request->email;
        $enrollment->class = $request->class;
        $enrollment->save();
        $enrollments = Enrollment::all();
        return view('enrollment.enrollments', ['enrollments' => $enrollments]);
    }

    public function delete($id)
    {
        Enrollment::destroy($id);
        
        //----------------------- Refactor this ---------------------------
        $enrollments = Enrollment::all();
        return view('enrollment.enrollments', ['enrollments' => $enrollments]);
    }
}
