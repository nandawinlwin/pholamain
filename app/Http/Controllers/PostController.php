<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addpost');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Auth::check()) {
             if($request->hasfile('img'))
         {
            foreach($request->file('img') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/item_images/', $name);  
                $dataimg[] = uniqid()."_".$name;  
            }
         }
        $userid = Auth::user()->id;

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
        $data->action="0";
        $data->img=json_encode($dataimg);
        $data->save();

        Session::flash('flash_message', 'Post successfully added!');
        return redirect()->back();

        }else{
            return redirect('home');
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
