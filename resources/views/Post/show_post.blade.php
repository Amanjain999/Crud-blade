@extends('layouts.app');
@section('content')
<div class="container-fluid">
	
<div class="card-header text-center"><h1>{{$posts->title}}<h1></div>
	<div class="para">{{$posts->content}}</div>
</div>

@endsection
