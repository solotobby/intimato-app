<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <flux:fieldset>
        <flux:heading size="xl" level="1">Latest Story</flux:heading>
        <br>
        {{-- <flux:legend size="xl" level="1" >Lastest Story</flux:legend> --}}
       
            <div class="space-y-4">
                @foreach ($list as $ls)
                    <flux:heading level="1">{{$ls->where_it_happen}}</flux:heading>
                        <flux:text class="mt-2">   {!! \Illuminate\Support\Str::words($ls->story, 35) !!}</flux:text>
                        <flux:button size="sm"><a href="{{ url('story/'.$ls->_id) }}">Continue Reading</a></flux:button>
                    <flux:separator variant="subtle" />
                @endforeach
            </div>

    </flux:fieldset>
</div>
