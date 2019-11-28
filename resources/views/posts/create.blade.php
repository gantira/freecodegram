@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Add New Post</h1>
            </div>

            <form action="/p" enctype="multipart/form-data" method="POST">
                @csrf

                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">{{ __('Post Caption') }}</label>

                    <input name="caption" id="caption" type="text"
                        class="form-control @error('caption') is-invalid @enderror" caption="caption"
                        value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>

                    <input type="file" class="form-control-file" name="image" id="image">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button type="submit" class="btn btn-primary">Add New Post</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
