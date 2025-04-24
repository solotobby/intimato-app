<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
        
        {{-- <flux:heading size="xl">Create Story</flux:heading>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

    </center> --}}


    {{-- <form wire:submit="post" class="max-w-lg mx-auto flex flex-col gap-6  shadow-2l rounded-2xl p-4">
        <flux:input
            wire:model="where_it_happen"
            :label="__('Where It Happened')"
            type="text"
            required
            autofocus
            placeholder="In the house"
        />

        <flux:input
            wire:model="age"
            :label="__('How old were you')"
            type="text"
            required
            placeholder="18"
        />
        <flux:select  wire:model="gender" placeholder="Select Gender"  :label="__('Gender')" required>
            <flux:select.option value="">Select Gender</flux:select.option>    
            <flux:select.option>Male</flux:select.option>
            <flux:select.option>Female</flux:select.option>
        </flux:select>

        <flux:fieldset>
            <flux:legend>How would you rate the experience</flux:legend>
            <flux:radio.group wire:model="rating">
                <div class="flex gap-4 *:gap-x-2">
                    <flux:radio  value="2" label="1"  />
                    <flux:radio  value="4" label="2"  />
                    <flux:radio  value="6" label="3" />
                    <flux:radio  value="8" label="4" />
                    <flux:radio  value="10" label="5" />
                </div>
            </flux:radio.group>
        </flux:fieldset>

        <flux:select  wire:model="category" placeholder="Select Category"  :label="__('Category')" required>
            <flux:select.option value="">Select One</flux:select.option>
            <flux:select.option>Straight</flux:select.option>
            <flux:select.option>Bi-sexual</flux:select.option>
            
        </flux:select>

        <flux:textarea
            wire:model="story"
            label="Order notes"
            placeholder="Describe everything that happened and how you felt. Be detailed as much as you can"
        />
    
        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Submit Story') }}</flux:button>
        </div>
    </form> --}}
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

    <div class="container-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-page-head">
                    <div class="nk-block-head-between">
                        <div class="nk-block-head-content">
                            <h2 class="display-6">Create Story</h2>
                            <p>Give textual form controls like <code>inputs, select, checkbox, radio and textareas</code> an upgrade with custom styles, sizing, focus states, and more.</p>
                        </div>
                    </div>
                </div><!-- .nk-page-head -->
                <div class="nk-block">
                   
                    <div class="card shadown-none">
                        <div class="card-body">
                            <div class="row g-3 gx-gs">
                                <form wire:submit="post">
                                    <div class="d-flex justify-content-center">
                                        <div class="col-md-6">

                                            <div class="form-group mb-3">
                                                <label for="exampleFormControlInputText1" class="form-label">Title(Optional)</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control"  wire:model="title" id="exampleFormControlInputText1" placeholder="Enter Title (Optional) ">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group mb-3">
                                                <label for="exampleFormControlInputText1" class="form-label">Where it Happened</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control"  wire:model="where_it_happen" id="exampleFormControlInputText1" placeholder="Where did it happen">
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="exampleFormControlInputText1" class="form-label">How old were you</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control"   wire:model="age" id="exampleFormControlInputText1" placeholder="How old were you">
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="exampleFormControlInputText1" class="form-label">Gender</label>
                                                <div class="form-control-wrap">
                                                    <select wire:model="gender" class="form-control">
                                                        <option value="">Select One</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="exampleFormControlInputText1" class="form-label">Orientation</label>
                                                <div class="form-control-wrap">
                                                    <select wire:model="category" class="form-control">
                                                        <option value="">Select One</option>
                                                        <option value="Straight">Straight</option>
                                                        <option value="Gay">Gay</option>
                                                        <option value="Bi-Sexual">Bi-Sexual</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="exampleFormControlInputText1" class="form-label">Choose your tags</label>
                                                <div class="form-control-wrap">
                                                    <select wire:model="tags" id="tags" multiple="multiple" class="form-control select2">
                                                        <option value="">Select One</option>
                                                            @foreach($tagList as $tag)
                                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            

                                         
                                            

                                            <div class="form-group mb-3">
                                                <label for="exampleFormControlInputText1" class="form-label">What would you Rate the experience</label>
                                                <div class="form-control-wrap">
                                                    <div class="star-rating">
                                                        {{-- @for($i = 1; $i <= 5; $i++)
                                                        <input type="radio" wire:model="rating" value="1"><i></i>
                                                        <input type="radio" name="rating" value="{{ $i }}" {{ old('rating') == $i ? 'checked' : '' }}><i></i>
                                                        @endfor --}}
                                                        <input type="radio" wire:model="rating" value="1"><i></i>
                                                        <input type="radio" wire:model="rating" value="2"><i></i>
                                                        <input type="radio" wire:model="rating" value="3"><i></i>
                                                        <input type="radio" wire:model="rating" value="4"><i></i>
                                                        <input type="radio" wire:model="rating" value="5"><i></i>
                                                    </div>
                                                    <div class="mt-3">
                                                        <span id="rating-value" class="h4">0</span> out of 5 stars
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-groupmb-3">
                                                <label for="exampleFormControlTextarea8" class="form-label">How did it happen?</label>
                                                <div class="form-control-wrap">
                                                    <textarea placeholder="Describe everything that happened and how you felt. Be detailed as much as you can" wire:model="story" class="form-control" id="exampleFormControlTextarea8" rows="3"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button class="btn btn-secondary btn-sm mt-2">Submit</button>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </form>

                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInputText2" class="form-label">Input with hint</label>
                                        <div class="form-control-wrap">
                                            <div class="form-control-hint"><span>hint</span></div>
                                            <input type="text" class="form-control" id="exampleFormControlInputText2" placeholder="Input text placeholder">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInputText3" class="form-label">Input with start icon</label>
                                        <div class="form-control-wrap">
                                            <div class="form-control-icon start"><em class="icon ni ni-eye"></em></div>
                                            <input type="text" class="form-control" id="exampleFormControlInputText3" placeholder="Input text placeholder">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInputText4" class="form-label">Input with end icon</label>
                                        <div class="form-control-wrap">
                                            <div class="form-control-icon end"><em class="icon ni ni-eye"></em></div>
                                            <input type="text" class="form-control" id="exampleFormControlInputText4" placeholder="Input text placeholder">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInputText5" class="form-label">Default Select</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" id="exampleFormControlInputText5" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInputText6" class="form-label">Default file input example</label>
                                        <div class="form-control-wrap">
                                            <input class="form-control" type="file" id="exampleFormControlInputText6">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInputText7" class="form-label">Multiple Select</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" id="exampleFormControlInputText7" multiple aria-label="multiple select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea8" class="form-label">Example textarea</label>
                                        <div class="form-control-wrap">
                                            <textarea placeholder="Textarea Placeholder" class="form-control" id="exampleFormControlTextarea8" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div><!-- .card-body -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->

            </div>
        </div>
    </div>

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



</div>
