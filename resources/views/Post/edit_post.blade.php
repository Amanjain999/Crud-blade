@extends('layouts.app');
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">{{ __('Edit Blog') }}</div>

                <div class="card-body">
                    <form method="post" action="{{route('Post.update',$post->id)}}">
                        @csrf
                       @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$post->title}}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                            <div class="col-md-8">
                                <textarea  id="content"  class="form-control @error('content') is-invalid @enderror" name="content" value="{{ $post->content }}" required
                                rows='4' cols='5' autocomplete="content" autofocus  > {{ $post->content }}</textarea>

                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                        <div class="col-md-6 offset-md-4">
                        	<button type="submit" class="btn btn-primary">
                        		{{ __('Submit')}}
                        	</button>
                                

                            </div>
                        </div>
                    </form>
                </div>
                

            </div>
        </div>
    </div>
</div>
@endsection