@extends('components.layouts.landingpage.master')
@section('title', 'Intitmato - Feedback')
@section('content')


<section class="section has-shape has-mask">
    <div class="nk-shape bg-shape-blur-m mt-8 start-50 top-0 translate-middle-x"></div>
    <div class="nk-mask bg-pattern-dot bg-blend-around mt-n5 mb-10p mh-50vh"></div>
    <div class="container">
        <div class="section-head">
            <div class="row justify-content-center text-center">
                <div class="col-lg-9 col-xl-8 col-xxl-7">
                    {{-- <h6 class="overline-title text-primary">About Us</h6> --}}
                    <h2 class="title h1">We'd love your Feedback</h2>
                </div>
            </div>
        </div><!-- .section-head -->
        <div class="section-content">

           
            <div class="container">
                <div class="row">
                    <div class="card mt-4 col-md-8 mx-auto">
                         @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                         @endif

                        <div class="card-body">
                            {{-- <h5 class="card-title">We'd love your feedback</h5> --}}
                            
                            <form action="{{ route('feedback.store') }}" method="POST">
                            @csrf

                        {{-- Emoji sentiment --}}
                            <div class="mb-3">
                                <label class="form-label d-block">How did you feel?</label>
                                @foreach (['happy' => '😊 Happy', 'neutral' => '😐 Neutral', 'sad' => '😞 Sad'] as $val => $label)
                                <div class="form-check form-check-inline">
                                    <input 
                                    class="form-check-input @error('sentiment') is-invalid @enderror" 
                                    type="radio"
                                    name="sentiment" 
                                    id="sentiment_{{ $val }}" 
                                    value="{{ $val }}"
                                    {{ old('sentiment') === $val ? 'checked' : '' }}
                                    >
                                    <label class="form-check-label" for="sentiment_{{ $val }}">{{ $label }}</label>
                                </div>
                                @endforeach
                                @error('sentiment')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                    <label for="content" class="form-label">Your thoughts</label>
                                    <textarea 
                                    class="form-control @error('content') is-invalid @enderror" 
                                    name="content" id="content" rows="3"
                                    placeholder="Write something..."
                                    required
                                    >{{ old('content') }}</textarea>
                                    @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Submit Feedback</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
</section>


@endsection