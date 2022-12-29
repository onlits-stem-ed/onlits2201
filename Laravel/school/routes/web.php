<?php

use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\LeadController;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome');

//----------------------------Leads---------------------------------------
Route::get('/leads', [LeadController::class, 'get_all_leads']);

Route::get('/new-lead', function () {
    return view('leads.new');
});

Route::post("/store-leads",[LeadController::class, 'store']);

Route::get("/edit-lead/{id}", [LeadController::class, 'get_lead']);

Route::post("/update-lead", [LeadController::class, 'update']);

Route::get("/delete-lead/{id}", [LeadController::class, 'delete']);

//------------------------------------------------------------------------


//----------------------------Enrollments--------------------------------------

Route::get('/enrollments', [EnrollmentController::class, 'get_all_enrollments']);
Route::get('/new-enrollment', function() {
    return view('enrollment.new');
});

Route::post('/new-enrollment', [EnrollmentController::class, 'store']);

Route::get("/edit-enrollment/{id}", [EnrollmentController::class, 'get_enrollment']);

Route::post('/update-enrollment', [EnrollmentController::class, 'update']);

Route::get('/delete-enrollment/{id}', [EnrollmentController::class, 'delete']);

//--------------------------------------------------------------------------------

Route::get('/accounts', function() {
    return view('accounts.transactions');
});