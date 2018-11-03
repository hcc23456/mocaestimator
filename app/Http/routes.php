<?php
//use Illuminate\Http\Request; // need this to use request obj
//use App\Form;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//main page mailer
Route::get('/', function () {
    return view('main');
});

Route::post('/', ['uses' => 'FormInfoController@store']); //csrf enabled default - non secure transaction
//end main page mailer


Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/blog', 'BlogController@index');


/*START AUTH PROCESS*/
//go to registration page
Route::get('/register', function () {
    return view('register');
});

//gets called when user clicks link in email
Route::get('/register/verification/{confirmationCode}', 'Auth\AuthController@confirm');

Route::get('/login', function(){
    return view('login');
});

/*AUTH CONTROLLED ROUTES*/
Route::auth(); //catchall routing for middleware auth

Route::get('/home', 'HomeController@index'); //default auth implemention

//User needs to be authenticated to enter here.
Route::group(['middleware' => 'auth'], function () {
    //routing to add blog posts
    Route::get('/add-post', 'BlogController@create');
    Route::post('/add-post', 'BlogController@store');

    //routing to edit blog posts
    Route::get('/list-posts', 'BlogController@show');
    Route::get('/modify-post/{id}', 'BlogController@edit');
    Route::post('/modify-post/{id}', 'BlogController@update');

    //routing to delete blog posts
    Route::get('/confirm-delete/{id}', 'BlogController@confirm');
    Route::get('/delete-post/{id}', 'BlogController@destroy');
});
/*Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'ProfileController@show'
]);*/


//logout
Route::get('/logout', function(){
    Auth::logout();
    Session::flush();

    return redirect('login')->with('logout_msg', 'Logged out!');
});
