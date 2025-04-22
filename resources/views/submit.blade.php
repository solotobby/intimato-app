@extends('components.layouts.landingpage.master')
@section('title', 'Intitmato - Submit Story')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<!-- Include Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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

<section class="section section-bottom-0 has-shape has-mask">
    <div class="nk-shape bg-shape-blur-m mt-8 start-50 top-0 translate-middle-x"></div>
    <div class="nk-mask bg-pattern-dot bg-blend-around mt-n5 mb-10p mh-50vh"></div>
    <div class="container">
        <div class="section-head">
            <div class="row justify-content-center text-center">
                <div class="col-lg-11 col-xl-10 col-xxl-9">
                    <h6 class="overline-title text-primary">Submit Story</h6>
                    <h1 class="title">Got an intimate memory that lingers? What’s your secret? Share it anonymously and let the world hear your intimate story.</h1>
                </div>
            </div>
        </div><!-- .section-head -->
        <div class="section-content">
            <div class="row g-gs justify-content-center justify-content-lg-between">
                {{-- <div class="col-xl-5 col-lg-6 col-md-8 text-lg-start text-center">
                    <div class="block-text pt-lg-4">
                        <h3 class="title h2">Let's talk</h3>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising born and I will give you a complete account of the system.</p>
                        <ul class="row gy-4 pt-4">
                            <li class="col-12">
                                <h5>Contact</h5>
                                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-start">
                                    <em class="icon text-base fs-5 mb-2 mb-lg-0 me-lg-2 ni ni-call-alt-fill"></em>
                                    <span>+(642) 342 762 44</span>
                                </div>
                            </li>
                            <li class="col-12">
                                <h5>Email</h5>
                                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-start">
                                    <em class="icon text-base fs-5 mb-2 mb-lg-0 me-lg-2 ni ni-mail-fill"></em>
                                    <span>support@copygen.com</span>
                                </div>
                            </li>
                            <li class="col-12">
                                <h5>Office</h5>
                                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-start">
                                    <em class="icon text-base fs-5 mb-2 mb-lg-0 me-lg-2 ni ni-map-pin-fill"></em>
                                    <span>442 Belle Terre St Floor 7, San Francisco, AV 4206</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <div class="d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="card border-0 shadow-sm rounded-4">
                            <div class="card-body">
                                {{-- <h3 class="title fw-medium mb-4">Please feel free to contact us using form below</h3> --}}
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
                                <form action="{{ route('submit.story') }}"  method="post">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" name="title" class="form-control form-control-lg" placeholder="Title (Optional)" value="{{ old('title') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Your Email Address(Option)" value="{{ old('email') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" value="{{ old('where_it_happen') }}"  name="where_it_happen" id="exampleFormControlInputText1" placeholder="Where it happened?" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control"  value="{{ old('age') }}"  name="age" id="exampleFormControlInputText1" placeholder="How old were you?" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                               
                                                <div class="form-control-wrap">
                                                    <select name="gender" class="form-control" required>
                                                        <option value="">What’s your Gender</option>
                                                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                                        <option value="Non-Binary" {{ old('gender') == 'Non-Binary' ? 'selected' : '' }}>Non-Binary</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                       

                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <select name="category" class="form-control" required>
                                                        <option value="">Orientation</option>
                                                        <option value="Straight" {{ old('category') == 'Straight' ? 'selected' : '' }}>Straight</option>
                                                        <option value="Gay" {{ old('category') == 'Gay' ? 'selected' : '' }}>Gay</option>
                                                        <option value="Bi-Sexual" {{ old('category') == 'Bi-Sexual' ? 'selected' : '' }}>Bi-Sexual</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <label for="tags">Choose your tags:</label>
                                                        <select id="tags" name="tags[]" multiple="multiple" class="form-control select2" style="width: 100%;">
                                                            @php
                                                                $oldTags = old('tags', []);
                                                            @endphp

                                                            @foreach ($tags as $item)
                                                                <option value="{{ $item->id }}" {{ in_array($item->id, $oldTags) ? 'selected' : '' }}>
                                                                    {{ $item->name }}
                                                                </option>
                                                            @endforeach


                                                        
                                                           

                                                          
                                                            
                                                            {{-- <optgroup label="Mood / Emotion">
                                                                <option>Romantic</option>
                                                                <option>Passionate</option>
                                                                <option>Sweet</option>
                                                                <option>Awkward</option>
                                                                <option>Emotional</option>
                                                                <option>Vulnerable</option>
                                                                <option>Forbidden</option>
                                                                <option>Confessional</option>
                                                            </optgroup>
                                                            <optgroup label="Experience / Theme">
                                                            <option>First Time</option>
                                                            <option>One Night Stand</option>
                                                            <option>Vacation Romance</option>
                                                            <option>Breakup</option>
                                                            <option>Fantasy Realized</option>
                                                            <option>Public Place</option>
                                                            <option>Reunion</option>
                                                            <option>Drunk Night</option>
                                                            </optgroup>
                                                            <optgroup label="Relationship / Role">
                                                            <option>Partner</option>
                                                            <option>Ex</option>
                                                            <option>Stranger</option>
                                                            <option>Crush</option>
                                                            <option>Roommate</option>
                                                            <option>High School Love</option>
                                                            <option>Online Match</option>
                                                            <option>Neighbor</option>
                                                            </optgroup>
                                                            <optgroup label="Other">
                                                            <option>LGBTQ+</option>
                                                            <option>NSFW</option>
                                                            <option>Complicated</option>
                                                            <option>Still Thinking About It</option>
                                                            <option>No Regrets</option>
                                                            <option>Memory Lane</option> 
                                                            </optgroup>--}}
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlInputText1" class="form-label">What would you Rate the experience</label>
                                                <div class="form-control-wrap">
                                                    <div class="star-rating">
                                                        @for($i = 1; $i <= 5; $i++)
                                                        <input type="radio" name="rating" value="{{ $i }}" {{ old('rating') == $i ? 'checked' : '' }}><i></i>
                                                        @endfor
                                                    </div>
                                                    <div class="mt-3">
                                                        <span id="rating-value" class="h4">0</span> out of 5 stars
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       

                                        <!-- .col -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <textarea name="story" class="form-control form-control-lg" placeholder="Describe everything that happened and how you felt. Be detailed as much as you can" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="captcha">What is {{ session('question') ?? '5 + 2' }} = </label>
                                             <input type="text" name="ans" required placeholder="Your answer">
                                        </div>
                                        <!-- .col -->
                                        <div class="col-12">
                                            <div class="form-group mb-2" for="id-terms">
                                                <input type="checkbox" name="terms" {{ old('terms') ? 'checked' : '' }} required id="id-terms"> Accept our terms and condition 
                                            </div>

                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit" id="submit-btn">Send Message</button>
                                            </div>
                                            <div class="form-result mt-4"></div>
                                        </div>
                                    </div>
                                    <!-- .row -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .section-content -->
    </div><!-- .container -->
</section><!-- .section -->
{{-- <section class="section section-bottom-0">
    <div class="container">
        <div class="section-content">
            <div class="row g-gs justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card h-100 rounded-4 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="feature">
                                <div class="feature-text">
                                    <h3 class="title">Get 1:1 Demo</h3>
                                    <p>Finding it difficult to navigate our suite of products? Get on a call with our product experts for personalized demo</p>
                                    <a class="link link-primary" href="#"><span class="fw-bold">Schedule a call</span><em class="icon fs-5 ni ni-arrow-long-right"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-md-6 col-xl-4">
                    <div class="card h-100 rounded-4 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="feature">
                                <div class="feature-text">
                                    <h3 class="title">24X7 Chat Support</h3>
                                    <p>Get on a call with our excellent customer support team by using our 24X7 live chat support. We are here to help!</p>
                                    <a class="link link-primary" href="#"><span class="fw-bold">Talk to Support</span><em class="icon fs-5 ni ni-arrow-long-right"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-md-6 col-xl-4">
                    <div class="card h-100 rounded-4 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="feature">
                                <div class="feature-text">
                                    <h3 class="title">Request Feature</h3>
                                    <p>Have an out of the box idea for a new AI feature to add. We are all ears.</p>
                                    <a class="link link-primary" href="#"><span class="fw-bold">Request a feature</span><em class="icon fs-5 ni ni-arrow-long-right"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .section-content -->
    </div><!-- .container -->
</section><!-- .section --> --}}
<section class="section section-bottom-0">
    <div class="container">
        <div class="section-wrap bg-primary bg-opacity-10 rounded-4">
            <div class="section-content bg-pattern-dot-sm p-4 p-sm-6">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-8 col-xxl-9">
                        <div class="block-text">
                            {{-- <h6 class="overline-title text-primary">Boost your writing productivity</h6> --}}
                            <h2 class="title">You’re one click away from a story you won’t forget.</h2>
                            <p class="lead mt-3">Real moments. Anonymous voices. Dive into the secrets that stay with us forever.</p>
                            <ul class="btn-list btn-list-inline">
                                <li><a href="{{ url('/') }}" class="btn btn-lg btn-primary"><span>Start Reading </span><em class="icon ni ni-arrow-long-right"></em></a></li>
                            </ul>
                            <ul class="list list-row gy-0 gx-3">
                                <li><em class="icon ni ni-check-circle-fill text-success"></em><span>Read</span></li>
                                <li><em class="icon ni ni-check-circle-fill text-success"></em><span>Write</span></li>
                                <li><em class="icon ni ni-check-circle-fill text-success"></em><span>Connect</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- .section-content -->
        </div><!-- .section-wrap -->
    </div><!-- .container -->
</section><!-- .section -->



<!-- Include jQuery and Select2 JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
    const starRating = document.querySelector('.star-rating');
            const ratingValue = document.getElementById('rating-value');
    
            starRating.addEventListener('change', function(e) {
                ratingValue.textContent = e.target.value;
            });
</script>

<!-- Initialize Select2 -->
<script>
  $(document).ready(function() {
    $('.select2').select2({
      placeholder: "Select tags that match your story",
      allowClear: true
    });
  });
</script>


@endsection
