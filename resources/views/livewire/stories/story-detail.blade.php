<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    {{-- <flux:fieldset>
        <flux:heading size="xl" level="1">{{$post->where_it_happen}}</flux:heading>
        <br>
    
       
            <div class="space-y-4">
               
                    <flux:heading level="1">Posted by {{$post->user->name}}</flux:heading>
                        <flux:text class="mt-2">   
                            {!! nl2br(e($post->story)) !!}
                        </flux:text>
                        
                        <flux:button icon="heart" size="xs" wire:click="like()"> {{ $post->likes }} </flux:button> 

                        <flux:button icon="eye" size="xs">  {{ $post->views }}</flux:button>
                       
                    
                    <flux:separator variant="subtle" />
                    @foreach ($comments as $comment)
                            <flux:heading>{{$comment->user->name}}</flux:heading>
                            <flux:text class="mt-2">{{$comment->message}}.</flux:text>

                    @endforeach
                    
                    <form wire:submit="postComment">
                  

                    <flux:input.group>
                        <flux:input placeholder="Enter Comment"  wire:model="message" required/>
                        <flux:button icon="plus">Post Comment</flux:button>
                    </flux:input.group>


                    </form>
               
            </div>

    </flux:fieldset> --}}
   
        <div class="container-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-page-head">
                        <div class="nk-block-head-between">
                            <div class="nk-block-head-content">
                                <h2 class="display-6">{{$post->where_it_happen}}s</h2>
                                <p>Posted by - {{$post->user->name}} </p>
                            </div>
                        </div>
                    </div><!-- .nk-page-head -->
                    <div class="nk-block">
                        {{-- <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title">Custom Cards</h3>
                                
                            </div>
                        </div> --}}

                        <div class="card shadown-none">
                            <div class="card-body">
                                <div class="row g-gs">
                                    <div class="col-md-12 col-xxl-12">
                                        <div class="card">
                                            <div class="card-body">
                                            
                                                <span class="lead text-base" id="SocialMediaPost04"> 
                                                    <ul class="list gy-3 pe-xxl-7">
                                                        <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Age when it Happened: {{ $post->age }}</span></li>
                                                        <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Gender: {{ $post->gender }}</span></li>
                                                        <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Rating: {{ $post->rating }}/5</span></li>
                                                        <li><em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Category: {{ $post->category }}</span></li>
                                                    </ul>
                                                    <hr>
                                                    {!! $post->story !!} 
                                                    <br>
                                                </span>
                                                <ul class="nk-timeline-meta">
                                                   
                                                    <li>
                                                        <span class="nk-menu-icon" wire:click="like()" >
                                                            <em class="icon ni ni-heart"></em>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        {{ $post->likes }} like(s)
                                                    </li>
                                                    {{-- <li>
                                                        <span class="nk-menu-icon">
                                                            <em class="icon ni ni-eye"></em>
                                                        </span>
                                                    </li> --}}
                                                    {{-- <li>
                                                        <span class="nk-menu-icon">
                                                            <em class="icon ni ni-comments"></em>
                                                        </span>
                                                    </li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .col -->

                                    <div class="col-md-12 col-xxl-12">
                                        Comments - {{ $comments->count() }}
                                    </div>

                                    @foreach ($comments as $comment)
                                    
                                        <div class="col-md-12 col-xxl-12">
                                            <div class="card bg-primary-soft border-0 shadow-none">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <div class="badge bg-primary bg-opacity-10 text-primary rounded-pill"><em class="icon ni ni-user"></em><span>{{$comment->user->name}}</span></div>
                                                        {{-- <ul class="d-flex align-items-center gap gx-1">
                                                            <li><button class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-chevrons-left"></em></button></li>
                                                            <li><button class="js-copy has-tooltip" data-clipboard-target="#SocialMediaPost01"></button></li>
                                                        </ul> --}}
                                                    </div>
                                                    <p class="text-dark" id="SocialMediaPost01"> {{ $comment->message }} </p>
                                                    <div class="d-flex justify-content-between align-items-center fs-11px text-light">
                                                        <span>{{ $comment->created_at->diffForHumans() }}</span>
                                                        {{-- <span>42 Words</span> --}}
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    @endforeach
                                   
                                    
                                    <div class="col-12">
                                        <form wire:submit="postComment">
                                            <div class="form-floating">
            
                                                <textarea class="form-control" wire:model="message" required id="floatingTextarea"></textarea>
                                                <label for="floatingTextarea">Leave a comment here</label>
                                                
                                            </div>
                                            <button class="btn btn-secondary btn-sm mt-2">Post Comment</button>
                                        </form>
                                    </div>

                                    
                                </div><!-- .row -->
                            </div><!-- .card-body -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
   
                

</div>
