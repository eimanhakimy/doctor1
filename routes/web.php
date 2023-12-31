<?php

use Illuminate\Support\Facades\Auth;
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
use App\Http\Controllers\PetController;


Route::get('/event','EventCalender@index');

Route::get('/','FrontendController@index');


Route::get('/new-appointment/{doctorId}/{date}','FrontendController@show')->name('create.appointment');



Route::group(['middleware'=>['auth','patient']],function(){

	Route::post('/book/appointment','FrontendController@store')->name('booking.appointment');

	Route::get('/book-here', 'FrontendController@bookHere')->name('create.booking');
	Route::get('/appointments/{id}/saveReminder', [AppointmentController::class, 'saveReminder'])->name('saveReminder');


	// For Pet
	Route::get('/my-pet', 'PetController@index')->name('my-pet');
	Route::get('/pets/create', [PetController::class, 'create'])->name('pets.create');
	Route::post('/pets', [PetController::class, 'store'])->name('pets.store');
	Route::get('/pets', [PetController::class, 'index'])->name('pets.index');
	Route::get('/pets/{pet}/edit', [PetController::class, 'edit'])->name('pets.edit');
	Route::delete('/pets/{pet}', [PetController::class, 'destroy'])->name('pets.destroy');
	Route::put('/pets/{pet}', [PetController::class, 'update'])->name('pets.update');




// for prescription
Route::get('/prescription/{userId}/{date}', 'PrescriptionController@show')->name('prescription.show');
Route::delete('/booking/cancel/{id}', [BookingController::class, 'cancel'])->name('booking.cancel');





	Route::get('/my-booking','FrontendController@myBookings')->name('my.booking');

	Route::get('/user-profile','ProfileController@index');
	Route::post('/user-profile','ProfileController@store')->name('profile.store');
	Route::post('/profile-pic','ProfileController@profilePic')->name('profile.pic');
	Route::get('/my-prescription','FrontendController@myPrescription')->name('my.prescription');


});


Route::get('/dashboard','DashboardController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware'=>['auth','admin']],function(){
	Route::resource('doctor','DoctorController');
	Route::get('/patients','PatientlistController@index')->name('patient');
	Route::get('/patients/all','PatientlistController@allTimeAppointment')->name('all.appointments');
	Route::get('/status/update/{id}','PatientlistController@toggleStatus')->name('update.status');
	Route::resource('department','DepartmentController');


});

Route::group(['middleware'=>['auth','doctor']],function(){

	Route::resource('appointment','AppointmentController');
	Route::post('/appointment/check','AppointmentController@check')->name('appointment.check');
	Route::post('/appointment/update','AppointmentController@updateTime')->name('update');

	Route::get('patient-today','PrescriptionController@index')->name('patients.today');

	Route::post('/prescription','PrescriptionController@store')->name('prescription');

	Route::get('/prescription/{userId}/{date}','PrescriptionController@show')->name('prescription.show');
	Route::get('/prescribed-patients','PrescriptionController@patientsFromPrescription')->name('prescribed.patients');


});

// Route::post('/api/doctors','FrontendController@getDoctors');
// Route::get('/api/doctors/today','FrontendController@doctorToday');



