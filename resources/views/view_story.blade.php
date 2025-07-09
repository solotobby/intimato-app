@extends('components.layouts.landingpage.master')
@section('title', $post->title ?? 'Read anonymous confessions | Intimatu')
@section('content')

<section class="section has-mask">
    <div class="nk-mask bg-pattern-dot bg-blend-around mt-n5 mb-10p mh-50vh"></div>
    <div class="container">
        <div class="section-content">
            <div class="row g-gs justify-content-center">
                <div class="col-xxl-8 col-xl-9 col-lg-10">
                    <div class="text-center">
                        <h6 class="overline-title text-primary">{{ $post->category }}</h6>
                        <h1 class="title">{{ $post->title }}</h1>
                        <ul class="list list-row gx-2">
                            {{-- <li>
                                <div class="sub-text fs-5">Feb 10, 2023</div>
                            </li> --}}
                            {{-- <li><em class="icon mx-0 ni ni-eye"></em></li> --}}
                            {{-- <li>
                                <div class="sub-text fs-5" >{{ $deviceHash }} </div>
                                - {{ session('readCount') }}
                            </li> --}}
                        </ul>
                        <div class="my-5">
                            <img class="rounded-4 w-100" src="images/blog/cover.jpg" alt="">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="block-typo">
                            <ul class="list gy-3 pe-xxl-7">
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Age when it Happened: {{ $post->age }}</span></li>
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Gender: {{ $post->gender }}</span></li>
                                <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Rating: {{ $post->rating }}/5</span></li>
                            </ul>

                            {!! $post->story !!}

                        </div>
                        {{-- <ul class="btn-list gy-3 ps-xl-6 ps-lg-4 ps-3">
                            <li><a class="link-secondary" href="#"><em class="icon fs-3 ni ni-facebook-circle"></em></a></li>
                            <li><a class="link-secondary" href="#"><em class="icon fs-3 ni ni-twitter"></em></a></li>
                            <li><a class="link-secondary" href="#"><em class="icon fs-3 ni ni-linkedin-round"></em></a></li>
                        </ul> --}}

                       
                    </div>

                     <hr>
                        <div class="col-md-12">

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="d-flex align-items-center">
                                <button class="btn btn-sm btn-outline-danger me-2"  
                                    data-story-id="{{ $post->id }}"
                                    data-device-hash="{{ $deviceHash }}" 
                                    onclick="toggleHeart(this)">
                                    ❤️ <span id="like-count">   {{ $post->likes }} </span>
                                </button>
                                <span class="text-muted me-3">💬 <span id="comment-count">{{ $comments->count() }}</span> comments</span>
                                </div>
                                <div>
                                <small class="text-muted">👁️ {{ $post->views }}  page views</small>
                                </div>
                            </div>

                        <div class="mt-4">
                             <h5>Comments</h5>
                                @foreach($comments as $comment)
                                <div class="card mb-2">
                                    <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="mb-1">Anonymous</h6>
                                        <small class="text-muted">{{$comment->created_at->format('F j, Y \a\t g:i A')}}</small>
                                    </div>
                                    <p>{{$comment->message}}</p>
                                    </div>
                                </div>
                                @endforeach

                                <!-- Comment Input -->
                                <div class="card" id="comment-form" data-story-id="{{ $post->id }}" data-device-hash="{{ $deviceHash }}">
                                    <div class="card-body">
                                    <h6 class="card-title">Add a comment</h6>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="content"  rows="3" placeholder="Write your comment..."></textarea>
                                    </div>
                                    <button class="btn btn-primary submit-comment">Post Comment</button>
                                    </div>
                                </div>
                            </div>

                        </div>


                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .section-content -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section section-sm section-0">
    <div class="container">
        <div class="section-head">
            <div class="row justify-content-center text-center">
                <div class="col-lg-9 col-xl-8 col-xxl-6">
                    <h2 class="title">Similar Posts</h2>
                </div>
            </div>
        </div><!-- .section-head -->
        <div class="section-content">
            <div class="swiper-init position-relative swiper-button-hide-disabled" data-breakpoints='{"0":{"slidesPerView":1}, "778": {"slidesPerView": 2},"1200":{"slidesPerView":3}}' data-space-between="32">
                <div class="swiper-wrapper">
                    @foreach($relatedStories as $story)
                        <div class="swiper-slide">
                            <div class="card border-0 shadow-tiny rounded-4">
                                <div class="card-body p-4">
                                    {{-- <a class="d-block" href="blog-single.html"><img class="rounded-4 w-100" src="images/blog/a.jpg" alt=""></a> --}}
                                    <a href="#" class="badge px-3 py-2 mt-4 mb-3 text-bg-primary-soft fw-normal rounded-pill">{{ $story->category}}</a>
                                    <h3><a href="{{ url('story/'.$story->_id) }}" class="link-dark line-clamp-2">{{$story->title}}</a></h3>
                                    <div class="d-flex pt-4">
                                        <div class="media media-lg media-middle media-lg rounded-pill">
                                            <em class="icon mx-0 ni ni-user"></em>
                                            {{-- <img src="images/avatar/author/sm-d.jpg" alt=""> --}}
                                        </div>
                                        <div class="media-info ms-3">
                                            <h6 class="mb-1">Anonymous</h6>
                                            <ul class="list list-row gx-1">
                                                {{-- <li>
                                                    <div class="sub-text">Feb 10, 2023</div>
                                                </li> --}}
                                                <li><em class="icon mx-0 ni ni-eye"></em></li>
                                                <li>
                                                    <div class="sub-text">{{ $story->views }}</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .swiper-slide -->

                      
                    @endforeach
                    {{-- <div class="swiper-slide">
                        <div class="card border-0 shadow-tiny rounded-4">
                            <div class="card-body p-4">
                                <a class="d-block" href="blog-single.html"><img class="rounded-4 w-100" src="images/blog/b.jpg" alt=""></a>
                                <a href="#" class="badge px-3 py-2 mt-4 mb-3 text-bg-primary-soft fw-normal rounded-pill">Artificial Intelligence</a>
                                <h3><a href="blog-single.html" class="link-dark line-clamp-2">What Is An AI Writing Assistant, And How Is It Beneficial?</a></h3>
                                <div class="d-flex pt-4">
                                    <div class="media media-lg media-middle media-lg rounded-pill">
                                        <img src="images/avatar/author/sm-e.jpg" alt="">
                                    </div>
                                    <div class="media-info ms-3">
                                        <h6 class="mb-1">Frances Burns</h6>
                                        <ul class="list list-row gx-1">
                                            <li>
                                                <div class="sub-text">Feb 9, 2023</div>
                                            </li>
                                            <li><em class="icon mx-0 ni ni-dot"></em></li>
                                            <li>
                                                <div class="sub-text">8 min read</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card -->
                    </div><!-- .swiper-slide -->
                    <div class="swiper-slide">
                        <div class="card border-0 shadow-tiny rounded-4">
                            <div class="card-body p-4">
                                <a class="d-block" href="blog-single.html"><img class="rounded-4 w-100" src="images/blog/c.jpg" alt=""></a>
                                <a href="#" class="badge px-3 py-2 mt-4 mb-3 text-bg-primary-soft fw-normal rounded-pill">Content Marketing</a>
                                <h3><a href="blog-single.html" class="link-dark line-clamp-2">15 Uses of Content Generator Tools and Why You Need Them</a></h3>
                                <div class="d-flex pt-4">
                                    <div class="media media-lg media-middle media-lg rounded-pill">
                                        <img src="images/avatar/author/sm-g.jpg" alt="">
                                    </div>
                                    <div class="media-info ms-3">
                                        <h6 class="mb-1">John Carter</h6>
                                        <ul class="list list-row gx-1">
                                            <li>
                                                <div class="sub-text">Feb 9, 2023</div>
                                            </li>
                                            <li><em class="icon mx-0 ni ni-dot"></em></li>
                                            <li>
                                                <div class="sub-text">10 min read</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card -->
                    </div><!-- .swiper-slide --> --}}
                </div><!-- .swiper-wrapper -->
                <div class="swiper-button-prev btn btn-icon btn-dark btn-soft rounded-pill position-absolute top-50 start-0 translate-middle z-index-1"><em class="icon ni ni-arrow-long-left"></em></div>
                <div class="swiper-button-next btn btn-icon btn-dark btn-soft rounded-pill position-absolute top-50 start-100 translate-middle z-index-1"><em class="icon ni ni-arrow-long-right"></em></div>
            </div>
        </div><!-- .section-content -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section section-bottom-0">
    <div class="container">
        <div class="section-wrap bg-primary bg-opacity-10 rounded-4">
            <div class="section-content bg-pattern-dot-sm p-4 p-sm-6">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-8 col-xxl-9">
                        <div class="block-text">
                            <h6 class="overline-title text-primary">Share your Story</h6>
                            <h2 class="title">Got a moment you can’t forget? Tell us.</h2>
                            <p class="lead mt-3">Share your most intimate memory anonymously — and let someone out there feel a little less alone.</p>
                            <ul class="btn-list btn-list-inline">
                                <li><a href="{{ url('submit') }}" class="btn btn-lg btn-primary"><span>Start writing</span><em class="icon ni ni-arrow-long-right"></em></a></li>
                            </ul>
                            {{-- <ul class="list list-row gy-0 gx-3">
                                <li><em class="icon ni ni-check-circle-fill text-success"></em><span>No credit card required</span></li>
                                <li><em class="icon ni ni-check-circle-fill text-success"></em><span>Cancel anytime</span></li>
                                <li><em class="icon ni ni-check-circle-fill text-success"></em><span>10+ tools to expolore</span></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div><!-- .section-content -->
        </div><!-- .section-wrap -->
    </div><!-- .container -->
</section>

<script>

function toggleHeart(button) {
  const storyId = button.getAttribute('data-story-id');
  const deviceHash = button.getAttribute('data-device-hash');

   
   fetch('/like/story', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    body: JSON.stringify({ story_id: storyId, hash: deviceHash})
  })
  .then(res => res.json())
  .then(data => {
    console.log(data);
    button.classList.toggle("btn-danger", data.liked);
    button.classList.toggle("btn-outline-danger", !data.liked);
    button.querySelector("#like-count").textContent = data.likes;
  });
}



document.querySelector(".submit-comment").addEventListener("click", function () {
    const wrapper = document.getElementById("comment-form");
  const content = wrapper.querySelector("textarea").value;
  const storyId = wrapper.getAttribute("data-story-id");
  const hash = wrapper.getAttribute("data-device-hash");

//   alert([content, storyId, hash, wrapper]);
    fetch('/story/comment', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ story_id: storyId, content: content, hash: hash })
    })
    .then(res => res.json())
    .then(data => {
        const commentHTML = `
        <div class="card mb-2">
            <div class="card-body">
            <div class="d-flex justify-content-between">
                <h6 class="mb-1">${data.username}</h6>
                <small class="text-muted">${data.timestamp}</small>
            </div>
            <p>${data.message}</p>
            </div>
        </div>`;
        
        // Insert new comment above the textarea
        document.querySelector("h5 + .card").insertAdjacentHTML("beforebegin", commentHTML);
        
        // Clear input
        wrapper.querySelector("textarea").value = '';

        // Update comment count
        const countEl = document.getElementById("comment-count");
        countEl.textContent = parseInt(countEl.textContent) + 1;
    });
  });

</script>


@endsection