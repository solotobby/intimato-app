<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <flux:fieldset>
        <flux:heading size="xl" level="1">{{$post->where_it_happen}}</flux:heading>
        <br>
        {{-- <flux:legend size="xl" level="1" >Lastest Story</flux:legend> --}}
       
            <div class="space-y-4">
               
                    <flux:heading level="1">Posted by {{$post->user->name}}</flux:heading>
                        <flux:text class="mt-2">   
                            {!! nl2br(e($post->story)) !!}
                        </flux:text>
                        
                        <flux:button icon="heart" size="xs" wire:click="like()"> {{ $post->likes }} </flux:button> 

                        <flux:button icon="eye" size="xs">  {{ $post->views }}</flux:button>
                       
                        {{-- <flux:button>Button</flux:button> --}}
                    <flux:separator variant="subtle" />
                    @foreach ($comments as $comment)
                            <flux:heading>{{$comment->user->name}}</flux:heading>
                            <flux:text class="mt-2">{{$comment->message}}.</flux:text>

                    @endforeach
                    
                    <form wire:submit="postComment">
                    {{-- <flux:textarea rows="2" label="Enter Comment"  /> --}}

                    <flux:input.group>
                        <flux:input placeholder="Enter Comment"  wire:model="message" required/>
                        <flux:button icon="plus">Post Comment</flux:button>
                    </flux:input.group>


                    </form>
               
            </div>

    </flux:fieldset>
</div>
