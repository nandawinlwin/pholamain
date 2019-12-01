<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Post;
use App\blog;
use App\category;
use App\PropertyImg;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        $showpost = Post::All();
        $auser = Auth::user();
        return view('adminpanel.admin',compact('showpost','auser'));
    }
    

    public function view($postid){
    	$showpost = Post::where('id',$postid)->first();
        return view('permission',compact('showpost'));
    }

    public function update(Request $request, $id)
    {
        $post= Post::findOrFail($id);
        $post->action = $request->get('action');
        $post->save();

        Session::flash('flash_message', 'Post Approved');

        return redirect()->back();
    }

    public function allposts()
    {
        $showpost = Post::All();
        $auser = Auth::user();
        return view('adminpanel.post.posts',compact('showpost','auser'));
    }
    

    public function create(){
        $auser = Auth::user();
        return view('adminpanel.post.create',compact('auser'));
    }


    public function store(Request $request)
    {

        $userid = Auth::user()->id;

        if (Auth::check()) {
            

        $data= new Post;
        $data->title=$request->get('title');
        $data->user_id=$userid;
        $data->price=$request->get('price');
        $data->owner=$request->get('owner');
        $data->city=$request->get('city');
        $data->township=$request->get('township');
        $data->street=$request->get('street');
        $data->btype=$request->get('btype');
        $data->ptype=$request->get('ptype');
        $data->bedroom=$request->get('bedroom');
        $data->aircon=$request->get('aircon');
        $data->area=$request->get('area');
        $data->floor=$request->get('floor');
        $data->others=$request->get('others');
        $data->active=0;
        $data->disbale=0;
        $data->action="0";
        
        $data->save();

        $posts = Post::all();
        $id = count($posts);
        $post = Post::findOrFail($id);

        

        for($i=1 ; $i <= 10 ; $i++){
            $img ="img".$i;
            if($request->hasfile($img)) {
                foreach($request->file($img) as $image){
            
                    $name=uniqid()."_".$image->getClientOriginalName();
                    $image->move(public_path().'/item_images/', $name);
                    $dataimg = $name;  
                    $data = new PropertyImg;
                    $data->post_id = $post->id;
                    $data->image=$dataimg;
                    $data->uniqid=uniqid();
                    $data->save();
                }
            }


        }

       

        Session::flash('flash_message', 'Post successfully added!');
        return redirect()->back();

        }else{
            return redirect('admin/post/all');
        }

       
    }


    /* For User */

    public function users(){
        $auser = Auth::user();
        $users = user::all();   
        return view('adminpanel.user.users',compact('auser','users'));
    }

    public function admins(){
        $auser = Auth::user();
        return view('adminpanel.user.admin',compact('auser'));
    }

    /* For blog */

    public function blog(){
        $auser = Auth::user();
        $blogs = blog::all();
        return view('adminpanel.blog.posts',compact('auser','blogs'));
    }

    public function blogcreate(){
        $auser = Auth::user();
        $categories = category::all();
        return view('adminpanel.blog.create',compact('auser','categories'));
    }

    
    public function blogstore(Request $request)
    {

        if (Auth::check()) {
             if($request->hasfile('image'))
         {
            foreach($request->file('image') as $image)
            {
                $name=uniqid()."_".$image->getClientOriginalName();
                $image->move(public_path().'/blog_images/', $name);
                $dataimg = $name;  
            }
         }
         
        $userid = Auth::user()->id;
        $data= new blog;
        $data->title=$request->get('title');
        $data->user_id=$userid;
        $data->content_zg=$request->get('content_zg');
        $data->content_un=$request->get('content_un');
        $data->category_id=$request->get('category');
        $data->image=$dataimg;
        $data->count=0;
        $data->disbale=0;
        $data->save();

        Session::flash('flash_message', 'Post successfully added!');
        return redirect()->back();

        }else{
            return redirect('admin/post/all');
        }

       
    }

    public function blog_edit($id){
        $blog = blog::findOrFail($id);
        $auser = Auth::user();
        $categories = category::all();
        return view('adminpanel.blog.edit',compact('blog','auser','categories'));
    }


    public function blog_update(Request $request,$id)
    {

        if (Auth::check()) {
             if($request->hasfile('image'))
         {
             $i = 0;
            foreach($request->file('image') as $image)
            {
                $name=uniqid()."_".$image->getClientOriginalName();
                $image->move(public_path().'/blog_images/', $name);
                $dataimg[] = $name;  
                $i++;
            }
         }
         
        $data =  blog::findOrFail($id);
        $data->title=$request->get('title');
        $data->content_zg=$request->get('content_zg');
        $data->content_un=$request->get('content_un');
        $data->category_id=$request->get('category');
        if(!empty($dataimg)){
            $data->image=json_encode($dataimg);
        }
        $data->update();

        Session::flash('flash_message', 'Post successfully added!');
        return redirect()->back();

        }else{
            return redirect('admin/post/all');
        }

       
    }

    public function blog_view($id){
        $auser = Auth::user();
        $post = Blog::findOrFail($id);
        $users = User::all();
        $categories = category::all();
        return view('adminpanel.blog.view',compact('auser','post','users','categories'));
    }

    public function blog_del($id){
        $data = Blog::findOrFail($id);
        $data->delete();
        return redirect('admin/blogs');
    }


    /* For Category */

    public function category(Request $request){
        $data = new category;
        $data->name=$request->get('name');
        $data->save();
        return redirect('admin/blogs/create');
    }

    public function category_destory($id){
        $data = category::findOrFail($id);
        $data->delete();
        return redirect('admin/blogs/create');
    }

    /* For Company */

    public function company(){
        $auser = Auth::user();
        return view('adminpanel.company.company',compact('auser'));
    }

    public function newcompany(){
        $auser = Auth::user();
        return view('adminpanel.company.addnew',compact('auser'));
    }

    /* For ADS */

    public function adsproperty(){
        $auser = Auth::user();
        return view('adminpanel.ads.property',compact('auser'));
    }

    public function adscompany(){
        $auser = Auth::user();
        return view('adminpanel.ads.company',compact('auser'));
    }

    /* For SEO */

    public function seo(){
        $auser = Auth::user();
        return view('adminpanel.seo.seo',compact('auser'));
    }


     /* For Setting */

     public function setting(){
        $auser = Auth::user();
        return view('adminpanel.setting.setting',compact('auser'));
    }

}