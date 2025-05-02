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

<div class="container-xl">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-page-head">
                <div class="nk-block-head-between">
                    <div class="nk-block-head-content">
                        <h2 class="display-6">Create Story</h2>
                        {{-- <p>Give textual form controls like <code>inputs, select, checkbox, radio and textareas</code> an upgrade with custom styles, sizing, focus states, and more.</p> --}}
                    </div>
                </div>
            </div><!-- .nk-page-head -->

            <div class="nk-block">
                   
                <div class="card shadown-none">
                    <div class="card-body">
                        <div class="row g-3 gx-gs">
                             
                            <form method="POST" action="{{ route('store.post') }}" id="story-form">
                                @csrf
                                <div class="d-flex justify-content-center">
                                    <div class="col-md-6">

                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
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
                            
                                        <div class="form-group mb-3">
                                            <label for="exampleFormControlInputText1" class="form-label">Title(Optional)</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" value="{{ old('title') }}" name="title" id="exampleFormControlInputText1" placeholder="Enter Title (Optional) ">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="exampleFormControlInputText1" class="form-label">Where it Happened</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" required value="{{ old('where_it_happen') }}" name="where_it_happen" id="exampleFormControlInputText1" placeholder="Where did it happen">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="exampleFormControlInputText1" class="form-label">How old were you</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" required value="{{ old('age') }}" name="age" id="exampleFormControlInputText1" placeholder="How old were you">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="exampleFormControlInputText1" class="form-label">Gender</label>
                                            <div class="form-control-wrap">
                                                <select name="gender" class="form-control" required>
                                                    <option value="">Select One</option>
                                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                                        <option value="Non-Binary" {{ old('gender') == 'Non-Binary' ? 'selected' : '' }}>Non-Binary</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="exampleFormControlInputText1" class="form-label">Orientation</label>
                                            <div class="form-control-wrap">
                                                <select name="category" class="form-control" required>
                                                    <option value="">Select One</option>
                                                    <option value="Straight" {{ old('category') == 'Straight' ? 'selected' : '' }}>Straight</option>
                                                    <option value="Gay" {{ old('category') == 'Gay' ? 'selected' : '' }}>Gay</option>
                                                    <option value="Bi-Sexual" {{ old('category') == 'Bi-Sexual' ? 'selected' : '' }}>Bi-Sexual</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                                <label for="tags" class="form-label">Choose your tags</label>
                                                <div class="form-control-wrap">
                                                    <select name="tags[]" id="tags" multiple="multiple" class="form-control select2">
                                                        <option value="">Select One</option>
                                                            @php
                                                                $oldTags = old('tags', []);
                                                            @endphp

                                                            @foreach ($tagList as $item)
                                                                <option value="{{ $item->id }}" {{ in_array($item->id, $oldTags) ? 'selected' : '' }}>
                                                                    {{ $item->name }}
                                                                </option>
                                                            @endforeach
                                                            {{-- @foreach($tagList as $tag)
                                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                            @endforeach --}}
                                                    </select>
                                                </div>
                                        </div>

                                        <div class="form-group mb-3">
                                                <label for="exampleFormControlInputText1" class="form-label">What would you Rate the experience</label>
                                                <div class="form-control-wrap">
                                                    <div class="star-rating">
                                                        @for($i = 1; $i <= 5; $i++)
                                                       
                                                        <input type="radio" name="rating" value="{{ $i }}" {{ old('rating') == $i ? 'checked' : '' }}><i></i>
                                                        @endfor
                                                        {{-- <input type="radio" name="rating" value="1"><i></i>
                                                        <input type="radio" name="rating" value="2"><i></i>
                                                        <input type="radio" name="rating" value="3"><i></i>
                                                        <input type="radio" name="rating" value="4"><i></i>
                                                        <input type="radio" name="rating" value="5"><i></i> --}}
                                                    </div>
                                                    <div class="mt-3">
                                                        <span id="rating-value" class="h4">0</span> out of 5 stars
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-groupmb-3">
                                                <label for="exampleFormControlTextarea" class="form-label">How did it happen?</label>
                                                <div class="form-control-wrap">

                                                    <div id="editor">{!! old('story') !!}</div>
                                                    <input type="hidden" name="story" id="story-content">

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button class="btn btn-secondary btn-sm mt-2">Submit Story</button>
                                            </div>
                                       
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



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
            placeholder: "Select tags",
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