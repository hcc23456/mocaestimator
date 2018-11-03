<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Mail;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) //comes from register() vendor\laravel\framework\src\Illuminate\Foundation\Auth\RegistersUsers;
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users', //users refers to "users" table
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'g-recaptcha-response'  => 'required' //dont put recaptcha as a flag to validate
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data) //comes back after validation from register() in vendor\laravel\framework\src\Illuminate\Foundation\Auth\RegistersUsers;
    {
        //custom registration code - this block must be here since confirmation_code is set here to db save
        $confirmation_code = str_random(30);
        $mail_code = ['confirmation_code' => $confirmation_code]; //needs to be key, value array

        //2nd param NEEDS to be an array of data sent
        Mail::send('auth.emails.verify', $mail_code, function($message) use ($data) { //must use "$data"
            //$message->from('www.mocaestimator.com');
            $message->to($data['email'])->subject('Verify your email address');
        });
        //end custom registration code

        //check if mail actually sent
        if(count(Mail::failures()) > 0 ){

            $emailFailure = "Email failure! Please try again!"; //flash not working in live, need to fix
            return redirect('register')->with('emailFailure', $emailFailure);
        }

        return User::create([ //this block is native code
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'confirmation_code' => $confirmation_code
        ]);
    }

    //this gets called upon user clicking in email
    public function confirm($confirmation_code)
    {
        //confirmation code error
        if(!$confirmation_code)
        {
            //echo "confirm code not passed";

            $confirmCodeFailure = "Confirmation code failure! Please try clicking on the link again! Or contact us!";
            return redirect('/register')->with('confirmCodeFailure', $confirmCodeFailure);
        }

        //find user by confirmation code
        $user = User::whereConfirmationCode($confirmation_code)->first();

        //no user found
        if (!$user)
        {
            //echo "confirm code fail";

            $userFindFailure = "User not found! Please try registering again! Or contact us! Or you may have already verified and can log in!";
            return redirect('/register')->with('userFindFailure', $userFindFailure);
        }

        //echo "user found and confirm";
        $user->confirmed = 1;
        $user->confirmation_code = ''; //or can set to null
        $user->save();

        return redirect('/login')->with('verification', 'Verification complete! Ready to Log In.');
    }

    //Route::auth override
    /*public function register(Request $request)
    {

    }*/
}
