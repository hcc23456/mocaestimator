<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Form; //reference model
use App\Http\Controllers\Controller; //ref base controller
use Mail;
use Illuminate\Support\Facades\Validator;

class FormInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //when building out admin dashboard??
        /*$forms = Form::all();

        return view('form.index', ['forms' => $forms]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('client_name'); //used for success msg
        $uploadedPics = $request->file('photos'); //$uploadedPics is array used for file saving to db

        //validate using call from basecontroller - cant use this outside controller because basecontroller uses built in validator method
        $this->validate($request, [ //returns true if passes
            'client_name' => 'required|string|max:255',
            'car_make' => 'required|alpha_dash|max:255',
            'car_model' => 'required|alpha_dash|max:255',
            'car_year' => 'required|numeric|digits:4|integer',
            'client_email' => 'required|email',
            'client_address' => 'required|string|max:255',
            'client_phonenumber' => 'required|numeric',
            //'client_memo' => 'required|alpha_dash'
        ]);

        //if fails validation, redirect with errors
        if(!$this){ //above returns boolean
            return redirect('/'); //implicit errors sent by laravel
            //echo "failed!"; //test
        }

        $imagePaths = array();
        $mimeTypes = array();

        //validate images uploaded
        if(!$request->hasFile('photos')){
            $noPics = "No pictures were uploaded!";
            return redirect('/')->with('noPics', $noPics);
        }else{ //only runs if there are photos
            $files = $request->file('photos'); //$files is array
            foreach($files as $file){
                if($file == null){
                    $failPic = "3 pictures must be uploaded!";
                    return redirect('/')->with('failPic', $failPic);
                }else{
                    //$filename = $file->getClientOriginalName();
                    //$extension = $file->getClientOriginalExtension();
                    $imagePath = $file->getPathName(); //gets full path to file - works BUT is the tmp folder location - need to move
                    $mime = $file->getClientMimeType(); //image extension for attachment to email

                    array_push($imagePaths, $imagePath); //so can attach each image when email sent
                    array_push($mimeTypes, $mime);
                    /*$picture = date('His').$filename;
                    $destinationPath = base_path() . '\public\images';
                    $file->move($destinationPath, $picture);*/

                    //echo $imagePath . "000"; //test
                    //echo $extension . "111";
                    //echo $mime .  "222";
                }
            }
        }

        //echo "passed!"; //test

        //save to db client info
        $picCounter = 0;
        $pic1 = "";
        $pic2 = "";
        $pic3 = "";
        $form = new Form;
        $form->client_name = $request->client_name;
        $form->car_make = $request->car_make;
        $form->car_model = $request->car_model;
        $form->car_year = $request->car_year;
        $form->client_email = $request->client_email;
        $form->client_address = $request->client_address;
        $form->client_phonenumber = $request->client_phonenumber;
        $form->client_memo = $request->client_memo;
        foreach($uploadedPics as $uploadedPic){ //hardcoded - will need to change to dynamic inserts in future
            $picCounter++; //because db column starts as 1
            if($picCounter == 1){
                //$form->client_picture1 = file_get_contents($uploadedPic->getPathName());
                $pic1 = file_get_contents($uploadedPic->getPathName());
            }elseif($picCounter == 2){
                //$form->client_picture2 = file_get_contents($uploadedPic->getPathName());
                $pic2 = file_get_contents($uploadedPic->getPathName());
            }elseif($picCounter == 3){
                //$form->client_picture3 = file_get_contents($uploadedPic->getPathName());
                $pic3 = file_get_contents($uploadedPic->getPathName());
            }
            //$form->client_picture.$picCounter = file_get_contents($uploadedPic->getPathName()); //doesnt work - echos 1,2,3
        }
        $form->client_picture1 = $pic1;
        $form->client_picture2 = $pic2;
        $form->client_picture3 = $pic3;
        $form->save();
        /*if(!$form->save()){
            echo "save fail";
            //return redirect('/');
        }*/
        //echo "saved!"; //test

        //use email template page and attach files
        Mail::send('contact',
            array(
                'name' => $request->get('client_name'),
                'make' => $request->get('car_make'),
                'model' => $request->get('car_model'),
                'year' => $request->get('car_year'),
                'email' => $request->get('client_email'),
                'address' => $request->get('client_address'),
                'phone' => $request->get('client_phonenumber'),
                'memo' => $request->get('client_memo')
            ), function($message) use ($imagePaths, $mimeTypes) //use is for attachments
            {
                $message->from('client_submission@mocaestimator.com');
                $message->to('info@mocaestimator.com', 'ClientTest')->subject('Client Upload');

                $size = sizeOf($imagePaths); //get the count of number of attachments
                for ($i=0; $i < $size; $i++) {
                    $message->attach($imagePaths[$i], ['as' => "pic", 'mime' => $mimeTypes[$i]]);
                }
            });

        //check if mail actually sent
        if(count(Mail::failures()) > 0 ){
            //$request->session()->flash('alert-fail', 'Email failure! Please try again!');
            //return redirect('/');

            $emailFailure = "Email failure! Please try again!"; //flash not working in live, need to fix
            return redirect('/')->with('emailFailure', $emailFailure);
        }else{
            //$successMessage = "Thanks ". $name . '! Email successfully sent!';
            //$request->session()->flash('alert-success', $successMessage);
            //return redirect('/');

            $emailSuccess = "Thank You ". $name . '! Email successfully sent! MOCA will get you quotes within 24 hours!'; //flash not working in live, need to fix
            return redirect('/')->with('emailSuccess', $emailSuccess);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
