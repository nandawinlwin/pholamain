@extends('layouts.app')

@section('content')
<?php 
use App\User;
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Posts</div>
				
				
				
				

                <table class="table table-bordered">
    <thead>
      <tr>
        <th>Username</th>
        <th>Title</th>
        <th>Action</th>
        <th>View</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($showpost as $showposts)
      <tr>
        <td>
        	<?php 
        	$username = User::where('id',$showposts->user_id)->first();
        	?>
        	{{$username->name}}
        </td>
        <td>{{$showposts->title}}</td>
        <td>
        	@if($showposts->action === "1")
	Approved
    	@else
    	Pending
		@endif
		</td>
        <td><a href="/../admin/{{$showposts->id}}/view"><button class="btn btn-success">Check</button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
            </div>
        </div>
    </div>
</div>
@endsection
