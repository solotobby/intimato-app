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
                                <p>Posted by - {{$post->user->name}} @ {{$post->created_at}} </p>
                            </div>
                        </div>
                    </div><!-- .nk-page-head -->
                    <div class="nk-block">
                        {{-- <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title">Custom Cards</h3>
                                <p>Pre-built cards for copygen.</p>
                            </div>
                        </div> --}}

                        <div class="card shadown-none">
                            <div class="card-body">
                                <div class="row g-gs">
                                    <div class="col-md-12 col-xxl-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="media media-xs media-middle media-circle text-primary bg-primary bg-opacity-20">
                                                            <em class="icon ni ni-pen-fill"></em>
                                                        </div>
                                                        <h5 class="fs-14px fw-normal ms-2">Post category</h5>
                                                    </div>
                                                    {{-- <button class="js-copy" data-clipboard-target="#SocialMediaPost04"></button> --}}
                                                </div>
                                                <p class="lead text-base" id="SocialMediaPost04"> 
                                                    {!! nl2br(e($post->story)) !!}
                                                </p>
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
                                                        <div class="badge bg-primary bg-opacity-10 text-primary rounded-pill"><em class="icon ni ni-pen-fill"></em><span>{{$comment->user->name}}</span></div>
                                                        {{-- <ul class="d-flex align-items-center gap gx-1">
                                                            <li><button class="btn btn-sm btn-icon btn-zoom"><em class="icon ni ni-chevrons-left"></em></button></li>
                                                            <li><button class="js-copy has-tooltip" data-clipboard-target="#SocialMediaPost01"></button></li>
                                                        </ul> --}}
                                                    </div>
                                                    <p class="text-dark" id="SocialMediaPost01"> {{ $comment->message }} </p>
                                                    <div class="d-flex justify-content-between align-items-center fs-11px text-light">
                                                        <span>{{ $comment->created_at }}</span>
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
