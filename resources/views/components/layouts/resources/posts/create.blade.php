@extends('components.layouts.resources.posts.master')

@section('content')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Include Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script> --}}


<style>
.star-rating {
    font-size: 0;
    white-space: nowrap;
    display: inline-block;
    width: 250px;
    height: 50px;
    overflow: hidden;
    position: relative;
    background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
    background-size: contain;
}

.star-rating i {
    opacity: 0;
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 20%;
    z-index: 1;
    background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
    background-size: contain;
}

.star-rating input {
    -moz-appearance: none;
    -webkit-appearance: none;
    opacity: 0;
    display: inline-block;
    width: 20%;
    height: 100%;
    margin: 0;
    padding: 0;
    z-index: 2;
    position: relative;
}

.star-rating input:hover+i,
.star-rating input:checked+i {
    opacity: 1;
}

.star-rating i~i {
    width: 40%;
}

.star-rating i~i~i {
    width: 60%;
}

.star-rating i~i~i~i {
    width: 80%;
}

.star-rating i~i~i~i~i {
    width: 100%;
}

</style>

<div class="container-sm py-5">
    <div class="row justify-content-center">
       
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
           

            <h2 class="h4 text-center mb-4">Create Story</h2>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('store.post') }}" id="story-form">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Title (Optional)</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Enter Title">
                </div>

                <div class="mb-3">
                    <label class="form-label">Where it Happened</label>
                    <input type="text" class="form-control" name="where_it_happen" value="{{ old('where_it_happen') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">How old were you</label>
                    <input type="text" class="form-control" name="age" value="{{ old('age') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-control" required>
                        <option value="">Select One</option>
                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Non-Binary" {{ old('gender') == 'Non-Binary' ? 'selected' : '' }}>Non-Binary</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Orientation</label>
                    <select name="category" class="form-control" required>
                        <option value="">Select One</option>
                        <option value="Straight" {{ old('category') == 'Straight' ? 'selected' : '' }}>Straight</option>
                        <option value="Gay" {{ old('category') == 'Gay' ? 'selected' : '' }}>Gay</option>
                        <option value="Bi-Sexual" {{ old('category') == 'Bi-Sexual' ? 'selected' : '' }}>Bi-Sexual</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Choose your tags</label>
                    <select name="tags[]" id="tags" class="form-control select2" multiple>
                        @php $oldTags = old('tags', []); @endphp
                        @foreach ($tagList as $item)
                            <option value="{{ $item->id }}" {{ in_array($item->id, $oldTags) ? 'selected' : '' }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Rate the Experience</label>
                    <div class="star-rating d-flex align-items-center gap-2">
                        @for($i = 1; $i <= 5; $i++)
                            <input type="radio" name="rating" value="{{ $i }}" {{ old('rating') == $i ? 'checked' : '' }}><i></i>
                        @endfor
                    </div>
                    <div class="mt-2">
                        <span id="rating-value" class="fw-bold">0</span> out of 5 stars
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">How did it happen?</label>
                    <div id="editor">{!! old('story') !!}</div>
                    <input type="hidden" name="story" id="story-content">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-secondary">Submit Story</button>
                </div>
            </form>
        </div>
    </div>
</div>









<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
    const starRating = document.querySelector('.star-rating');
            const ratingValue = document.getElementById('rating-value');
    
            starRating.addEventListener('change', function(e) {
                ratingValue.textContent = e.target.value;
            });
</script>

<!-- Initialize Select2 -->
{{-- <script>
  $(document).ready(function() {
    $('.select2').select2({
      placeholder: "Select tags that match your story",
      allowClear: true
    });
  });
</script> --}}


<script>
    $(document).ready(function () {
        $('#tags').select2({
            placeholder: "Select tags that match your story",
            allowClear: true
        });
    });
</script>


<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>

<script>
    let editorInstance;

    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            editorInstance = editor;

            // Ensure value is set on form submit
            document.getElementById('story-form').addEventListener('submit', function () {
                const data = editorInstance.getData();
                document.getElementById('story-content').value = data;
                console.log('Submitting with story content:', data);
            });
        })
        .catch(error => {
            console.error('CKEditor error:', error);
        });
</script>

@endsection