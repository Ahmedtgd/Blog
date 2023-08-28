@extends('layouts.app')

@section('content')
<div class="container">
  <div class="form-group">
    <label for="usr">Title:</label>
    {{ $article->title }}
  </div>

  <div class="form-group">
    <label for="usr">Body:</label>
    {{ $article->body }}
  </div>
 
  <div class="form-group">
    <table class="table table-striped">
      <tr>
      <div class="form-group">
    <img src="{{ asset('storage/' . $article->image_url) }}" alt="Article Image" width="600" style="border-radius: 10px;"  data-lightbox="myImg">
    </div>
    </tr>
      <tr style="border-radius: 10px;" >
        <td>Comments</td>
      </tr>
      </br></br>
    </table>

    @foreach($article->comments as $c)
      @if($c->user)
        <div class="comment">
            <strong>{{ $c->user->name }}:</strong>
            {{ $c->comment }}
        </div>
    @endif
      @endforeach
    <form action="{{ route('articles.comments.store', ['article' => $article->id]) }}" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="usr">Comments:</label>
        <textarea rows="4" cols="50" name="body" class="form-control"></textarea>
      </div>
      <br>
      <input type="submit" value="Add Comment" class="btn btn-primary">
    </form>
  </div>
</div>
@endsection