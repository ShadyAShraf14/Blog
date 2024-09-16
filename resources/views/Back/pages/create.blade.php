@extends('Back.inc.master')

@section('content')
    <h1>Create New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image" class="form-control" onchange="previewImage(event)">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Image Preview -->
        <div class="form-group">
            <img id="imagePreview" src="" alt="Image Preview" style="max-width: 100%; height: auto; display: none;">
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>

    <!-- JavaScript to preview the image -->
    <script>
        function previewImage(event) {
            const input = event.target;
            const reader = new FileReader();
            const imagePreview = document.getElementById('imagePreview');

            reader.onload = function(){
                imagePreview.src = reader.result;
                imagePreview.style.display = 'block';
            }

            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
