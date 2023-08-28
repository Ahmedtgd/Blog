@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Article') }}</div>

                <div class="card-body">
                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">{{ __('Title') }}:</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="body">{{ __('Body') }}:</label>
                            <textarea rows="4" name="body" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="image">Image:</label>
                       <input type="file" name="image" accept="image/*">
                       </div>
                        <br>
                        <button type="submit" class="btn btn-primary">{{ __('Add New') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection