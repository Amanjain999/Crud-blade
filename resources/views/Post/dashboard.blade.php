
@extends('layouts.app');
@section('content')
@if(Auth::check())
@section('sidebar')
    @parent
@endsection
<div class="container-fluid">
    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="{{url('Post/create')}}" class="btn btn-success">Add Blogs</a>
                         <div class="card-header">{{__('Show Blogs')}}</div>
                          <table class="table table-striped">
                           <thead>
                          <tr>
                             <th>Id</th>
                             <th>Title</th>
                             <th>Body</th>
                             <th>Slug</th>
                             <th>Edit Blog</th>
                             <th>Delete Blog</th>
                             <th> Blog</th>

                         </tr>
                     </thead>
                      <tbody>

                        @foreach($Posts as $post)

                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->content}}</td>
                            <td>{{$post->slug}}</td>
                            <td><a href="{{route('Post.edit',$post->id)}}" class="btn btn-success">Edit</a></td>
                            <td>
                            	<form action="{{ route('Post.destroy', $post->id)}}" method="post">
                  			@csrf
                  			@method('DELETE')
                  			<button class="btn btn-danger" type="submit">Delete</button>
                				</form></td>
                            <td><a href="{{route('Post.show',$post->id)}}" class="btn btn-success">View</a></td>
                             
                        </tr>
                         @endforeach
                          
                     </tbody>
                 </table>
             </div>  
@endif
 
@endsection
@push('css')
	<style>
		body,*{
			background-color: gray;
			color:white;
		}
	</style>
@endpush