<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\BlogPost; //reference model
use App\User; //ref model
//auth addins
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //reads and renders to view blog posts created

        // get all the menu items
        $blogPosts = BlogPost::all();
        // group the Collection on the menutype field
        $groupedBlogPosts = $blogPosts->groupBy('post_id');

        $data = [];
        $data['blog'] = $groupedBlogPosts;
        return view('/blog', $data); //data being passed needs to be an array that is key/value
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //simply show page
        return view('add-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //to hold uploaded pics
        $picCounter = 0;
        $pic1 = "";
        $pic2 = "";
        $pic3 = "";
        $pic4 = "";
        $pic5 = "";
        $pic6 = "";
        $pic7 = "";
        $pic8 = "";
        $pic9 = "";
        $pic10 = "";

        //grab post data
        $title = $request->input('title');
        $text_body1 = $request->input('text_body1');
        $text_body2 = $request->input('text_body2');
        $text_body3 = $request->input('text_body3');
        $text_body4 = $request->input('text_body4');
        $text_body5 = $request->input('text_body5');
        $text_body6 = $request->input('text_body6');
        $text_body7 = $request->input('text_body7');
        $text_body8 = $request->input('text_body8');
        $text_body9 = $request->input('text_body9');
        $text_body10 = $request->input('text_body10');
        $uploadedBlogPics = $request->file('pics'); //$uploadedPics is array used for file saving to db

        //save to db blog post
        $blog = new BlogPost;
        $blog->title = $title;
        $blog->text_body1 = $text_body1;
        $blog->text_body2 = $text_body2;
        $blog->text_body3 = $text_body3;
        $blog->text_body4 = $text_body4;
        $blog->text_body5 = $text_body5;
        $blog->text_body6 = $text_body6;
        $blog->text_body7 = $text_body7;
        $blog->text_body8 = $text_body8;
        $blog->text_body9 = $text_body9;
        $blog->text_body10 = $text_body10;
        //this block of code could be done better using efficient algo
        if($uploadedBlogPics[0] != null) {  //[0] means empty object, object itself exists and will fail test
            foreach ($uploadedBlogPics as $uploadedBlogPic) { //hardcoded - will need to change to dynamic inserts in future
                $picCounter++; //because db column starts as 1
                if($uploadedBlogPic != null) {
                    if ($picCounter == 1) {
                        $pic1 = file_get_contents($uploadedBlogPic->getPathName());
                    } elseif ($picCounter == 2) {
                        $pic2 = file_get_contents($uploadedBlogPic->getPathName());
                    } elseif ($picCounter == 3) {
                        $pic3 = file_get_contents($uploadedBlogPic->getPathName());
                    } elseif ($picCounter == 4) {
                        $pic4 = file_get_contents($uploadedBlogPic->getPathName());
                    } elseif ($picCounter == 5) {
                        $pic5 = file_get_contents($uploadedBlogPic->getPathName());
                    } elseif ($picCounter == 6) {
                        $pic6 = file_get_contents($uploadedBlogPic->getPathName());
                    } elseif ($picCounter == 7) {
                        $pic7 = file_get_contents($uploadedBlogPic->getPathName());
                    } elseif ($picCounter == 8) {
                        $pic3 = file_get_contents($uploadedBlogPic->getPathName());
                    } elseif ($picCounter == 9) {
                        $pic9 = file_get_contents($uploadedBlogPic->getPathName());
                    } elseif ($picCounter == 10) {
                        $pic10 = file_get_contents($uploadedBlogPic->getPathName());
                    }
                }
            }
        }
        $blog->pic1 = $pic1;
        $blog->pic2 = $pic2;
        $blog->pic3 = $pic3;
        $blog->pic4 = $pic4;
        $blog->pic5 = $pic5;
        $blog->pic6 = $pic6;
        $blog->pic7 = $pic7;
        $blog->pic8 = $pic8;
        $blog->pic9 = $pic9;
        $blog->pic10 = $pic10;
        $blog->user_id = Auth::id();
        $saved = $blog->save();

        //check if saved
        if(!$saved){
            $blogSaveFailure = "Blog Post save failure"; //flash not working in live, need to fix
            return redirect('/add-post')->with('blogSaveFailure', $blogSaveFailure);
        }else{
            $blogSaveSuccess = "Blog Post saved successfully"; //flash not working in live, need to fix
            return redirect('/add-post')->with('blogSaveSuccess', $blogSaveSuccess);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()    //not using $id as param
    {
        //get userid
        $userID = Auth::id();
        //show list page of all posts by user
        $userBlogPosts = BlogPost::where('user_id', $userID)->get();
        // group the Collection on the menutype field
        $userSortedBlogPosts = $userBlogPosts->groupBy('post_id');

        $userBlogData = [];
        $userBlogData['user_blog'] = $userSortedBlogPosts;
        return view('/list-posts', $userBlogData); //data being passed needs to be an array that is key/value
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get userid
        $userID = Auth::id();
        //get specifc post by user that was selected
        $userSelectedBlogPost = BlogPost::where('user_id', $userID)->where('post_id', $id)->get();

        //$userSelectedBlogData = [];
        //$userSelectedBlogData['selected_post'] = $userSelectedBlogPost;
        //return view('modify-post', $userSelectedBlogData); //show edit form
        return view('modify-post')->with('blog_post' ,$userSelectedBlogPost);  //show edit form
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
        //get userid
        $userID = Auth::id();

        //to hold uploaded pics
        $picCounter = 0;
        $pic1 = "";
        $pic2 = "";
        $pic3 = "";
        $pic4 = "";
        $pic5 = "";
        $pic6 = "";
        $pic7 = "";
        $pic8 = "";
        $pic9 = "";
        $pic10 = "";

        //grab post data
        $title = $request->input('title');
        $text_body1 = $request->input('text_body1');
        $text_body2 = $request->input('text_body2');
        $text_body3 = $request->input('text_body3');
        $text_body4 = $request->input('text_body4');
        $text_body5 = $request->input('text_body5');
        $text_body6 = $request->input('text_body6');
        $text_body7 = $request->input('text_body7');
        $text_body8 = $request->input('text_body8');
        $text_body9 = $request->input('text_body9');
        $text_body10 = $request->input('text_body10');
        $uploadedBlogPics = $request->file('pics'); //$uploadedPics is array used for file saving to db

        //get and save to db blog post
        $blog = BlogPost::find($id);
        $blog->title = $title;
        $blog->text_body1 = $text_body1;
        $blog->text_body2 = $text_body2;
        $blog->text_body3 = $text_body3;
        $blog->text_body4 = $text_body4;
        $blog->text_body5 = $text_body5;
        $blog->text_body6 = $text_body6;
        $blog->text_body7 = $text_body7;
        $blog->text_body8 = $text_body8;
        $blog->text_body9 = $text_body9;
        $blog->text_body10 = $text_body10;

        $howManyPics = sizeof($uploadedBlogPics);
        //could this block of code could be done better using efficient algo?
        //loop array of pics based on index and check if there is data, if no data skip and keep going
        for($picCounter = 0; $picCounter < $howManyPics; $picCounter++){  //because array column starts as 0
            if($picCounter == 0){ //hardcoded - may need to change to dynamic inserts in future
                if($uploadedBlogPics[$picCounter] != null){
                    $pic1 = file_get_contents($uploadedBlogPics[$picCounter]->getPathName());
                }else{
                    continue;
                }
            }elseif($picCounter == 1){
                if($uploadedBlogPics[$picCounter] != null){
                    $pic2 = file_get_contents($uploadedBlogPics[$picCounter]->getPathName());
                }else{
                    continue;
                }
            }elseif($picCounter == 2){
                if($uploadedBlogPics[$picCounter] != null){
                    $pic3 = file_get_contents($uploadedBlogPics[$picCounter]->getPathName());
                }else{
                    continue;
                }
            }elseif($picCounter == 3){
                if($uploadedBlogPics[$picCounter] != null){
                    $pic4 = file_get_contents($uploadedBlogPics[$picCounter]->getPathName());
                }else{
                    continue;
                }
            }elseif($picCounter == 4){
                if($uploadedBlogPics[$picCounter] != null){
                    $pic5 = file_get_contents($uploadedBlogPics[$picCounter]->getPathName());
                }else{
                    continue;
                }
            }elseif($picCounter == 5){
                if($uploadedBlogPics[$picCounter] != null){
                    $pic6 = file_get_contents($uploadedBlogPics[$picCounter]->getPathName());
                }else{
                    continue;
                }
            }elseif($picCounter == 6){
                if($uploadedBlogPics[$picCounter] != null){
                    $pic7 = file_get_contents($uploadedBlogPics[$picCounter]->getPathName());
                }else{
                    continue;
                }
            }elseif($picCounter == 7){
                if($uploadedBlogPics[$picCounter] != null){
                    $pic8 = file_get_contents($uploadedBlogPics[$picCounter]->getPathName());
                }else{
                    continue;
                }
            }elseif($picCounter == 8){
                if($uploadedBlogPics[$picCounter] != null){
                    $pic9 = file_get_contents($uploadedBlogPics[$picCounter]->getPathName());
                }else{
                    continue;
                }
            }elseif($picCounter == 9){
                if($uploadedBlogPics[$picCounter] != null){
                    $pic10 = file_get_contents($uploadedBlogPics[$picCounter]->getPathName());
                }else{
                    continue;
                }
            }
        }

        //dont overwrite existing pic or blank pic if there is no new upload
        if($pic1 != null){
            $blog->pic1 = $pic1;
        }
        if($pic2 != null){ //must be independent if's not elseif because it is mutually exclusive
            $blog->pic2 = $pic2;
        }
        if($pic3 != null){
            $blog->pic3 = $pic3;
        }
        if($pic4 != null){
            $blog->pic4 = $pic4;
        }
        if($pic5 != null){
            $blog->pic5 = $pic5;
        }
        if($pic6 != null){
            $blog->pic6 = $pic6;
        }
        if($pic7 != null){
            $blog->pic7 = $pic7;
        }
        if($pic8 != null){
            $blog->pic8 = $pic8;
        }
        if($pic9 != null){
            $blog->pic9 = $pic9;
        }
        if($pic10 != null){
            $blog->pic10 = $pic10;
        }

        $blog->user_id = $userID;
        $saved = $blog->save();

        //check if saved
        if(!$saved){
            $editBlogSaveFailure = "Blog Post edit failure"; //flash not working in live, need to fix
            return redirect('/modify-post/'.$id)->with('editBlogSaveFailure', $editBlogSaveFailure); //needs id to redirect correctly
        }else{
            $editBlogSaveSuccess = "Blog Post edited successfully"; //flash not working in live, need to fix
            return redirect('/modify-post/'.$id)->with('editBlogSaveSuccess', $editBlogSaveSuccess); //needs id to redirect correctly
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //get userid
        $userID = Auth::id();

        //pass in array for deletion query
        $queryArray = array('post_id' => $id,'user_id' => $userID);

        //backslash before DB beause of namespace
        $query = \DB::table('blog_post');
        foreach($queryArray as $field => $value) {
            $query->where($field, $value); //process query with values
        }
        $deleted =$query->delete();

        //check if deleted
        if(!$deleted){
            $deleteBlogPostFailure = "Blog Post delete failure"; //flash not working in live, need to fix
            return redirect('//list-posts')->with('deleteBlogPostFailure', $deleteBlogPostFailure);
        }else{
            $deleteBlogPostSuccess = "Blog Post deleted successfully"; //flash not working in live, need to fix
            return redirect('/list-posts')->with('deleteBlogPostSuccess', $deleteBlogPostSuccess);
        }
    }

    //confirm the deletion
    public function confirm($id){
        //get userid
        $userID = Auth::id();
        //get specifc post by user that was selected
        $blog_post = BlogPost::where('user_id', $userID)->where('post_id', $id)->get();

        return view('confirm-delete')->with('blog_post' ,$blog_post);  //show edit form
    }
}
