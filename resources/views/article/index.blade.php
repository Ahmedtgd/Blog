
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <table class="table table-striped bg-white shadow-lg rounded-lg">
        <thead class="bg-blue-500 text-white">
            <tr>
                <th class="py-3">Title</th>
                <th class="py-3">Image</th>
            </tr>
            
                
            
        <tbody>
            @foreach($articles as $art)
            <tr>
                <td class="py-4">
                    <a href="{{ route('articles.show', $art->id) }}" class="text-blue-500 hover:underline">{{ $art->title }}</a>
                </td>
                <td class="py-4 ">
                <div class="   user-image"> 
                  <img src="{{ asset('storage/' . $art->image_url) }}" alt="Article Image" width="150" style="border-radius: 10px;"  data-lightbox="myImg">
                </div>
            </td >
            </tr>
            @endforeach
        </tbody>
    </table>
   
    {!! $articles->withQueryString()->links('pagination::bootstrap-5') !!}
   

    <a href="{{ route('articles.create') }}" class="block mt-4 text-blue-500 hover:underline">Add new article</a>
</div>
@endsection



