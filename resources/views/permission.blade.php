@extends('layouts.app')

@section('content')
<?php 
use App\User;
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Posts</div><br>
				  @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
				<div class="container">
      <div class="row">
         <div class="col-md-6">
                <span class="badge badge-primary title">ေခါင္းစဥ္</span>
                  <div>
                    {{$showpost->title}}
                  </div><br>    

                  <span class="badge badge-primary title">အိမ္ျခံေျမအမိ်ဳးအစားမ်ား</span>
                  <div>
                    {{$showpost->btype}}
                  </div><br>
                  

                  <span class="badge badge-primary title">၀ယ္ရန္</span>
                  <div>
                    {{$showpost->ptype}}
                  </div><br>

                  <span class="badge badge-primary title">အိပ္ခန္း</span>
                  <div>
                    {{$showpost->bedroom}}
                  </div><br>
            </div>
            <div class="col-md-6">
                
                <span class="badge badge-primary title">အဲယားကြန္း</span>
                  <div>
                    {{$showpost->aircon}}
                  </div><br>

                  <span class="badge badge-primary title">ဧရိယာ</span>
                  <div>
                    {{$showpost->area}}
                  </div><br>

                  <span class="badge badge-primary title">အလႊာ</span>
                  <div>
                    {{$showpost->floor}}
                  </div><br>

                  <span class="badge badge-primary title">အျခားအခ်က္အလက္မ်ား</span>
                  <div>
                    {{$showpost->others}}
                  </div><br>
                 
            </div>
            <hr>
            <div class="container" style="border-top:1px solid #eee;">
              <div class="row">
                <div class="col-md-3"><br>
                   <form action="{{url('admin/post/' . $showpost->id . '')}}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <select class="form-control" name="action">
                    <option value="0" @if($showpost->action=="0") selected @endif>Pending</option>
            <option value="1" @if($showpost->action=="1") selected @endif>Approved</option>
          </select><br>
                  <input type="submit" name="" class="btn btn-success">
                  <div>&nbsp;</div>
                  </form>
                </div>
              </div>
            </div>

      </div>    
        </div>
				     
        </div>
    </div>
</div>
@endsection
