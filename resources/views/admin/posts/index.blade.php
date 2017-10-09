@extends('layouts.admin')


@section('content')

	
	<h1><b>Posts</b></h1>

	<table class="table table-hover">
	    <thead>
	      <tr>
	        <th>Id</th>
	        <th>Photo</th>
	        <th>Owner</th>
	        <th>Category</th>
	        <th>Title</th>
	        <th>Body</th>
	        <th>Created</th>
	        <th>Updated</th>
	      </tr>
	    </thead>
	    <tbody>

	    @if($posts)	

	    	@foreach($posts as $post)

	      		<tr>
	           	   <td>{{$post->id}}</td>
	           	   </td>
	           	   <td><img height="50" src="{{$post->photo ? $post->photo->file : 'https://www.google.ca/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwiIyZnZ-9_WAhXD3YMKHaVADFoQjRwIBw&url=https%3A%2F%2Fwww.timberblock.com%2Fwp-content%2Fuploads%2F&psig=AOvVaw2YDmH3rdg9sOxOgKMqWSit&ust=1507515638450092'}}" class="img-rounded"></td>
	           	   <td>{{$post->user->name}}</td>
	           	   <td>{{$post->category ? $post->category->name : 'Uncategorized'}}
	           	   <td>{{$post->title}}</td>
	           	   <td>{{$post->body}}</td>
	           	   <td>{{$post->created_at->diffForHumans()}}</td>
	           	   <td>{{$post->updated_at->diffForHumans()}}</td>
	        	</tr>

	        @endforeach	

	    @endif  	

	    </tbody>
	  </table>


@stop