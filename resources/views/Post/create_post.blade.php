
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">{{ __('Add Blog') }}</div>

                <div class="card-content">
                    <form method="POST" action="{{ route('Post.store') }}">
                        @csrf
                       
                        <div class="form-group row mt-4 ">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                            <div class="col-lg-8">
                                <textarea  id="content"  class="form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" required
                                rows='4' cols='5' autocomplete="content" autofocus  > </textarea>

                                @error('Content')
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
