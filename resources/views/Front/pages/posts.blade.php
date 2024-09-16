@extends('Front.inc.master')

@section('title', 'Blog || Home')

@section('content')
<div class="page-container">
    <div class="page-content">
        <h1>Latest Blog Posts</h1>

        @forelse ($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->description }}</p>
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="max-width: 100%;">
                @endif
            </div>
        @empty
            <p>No posts available.</p>
        @endforelse

    </div>
</div>
@endsection

