<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="nk-block">
                   
        <div class="card shadown-none">
            <div class="card-body">
                <div class="row g-3 gx-gs">
                    <form wire:submit="submitTag">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-6">
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
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

                                <h4>Tags Mgt</h4>
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlInputText1" class="form-label">Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control"  wire:model="name" required id="exampleFormControlInputText1" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-secondary btn-sm mt-2">Submit</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                <hr>
                <div class="d-flex justify-content-center">
                    <div class="col-md-6">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tags as $tag)
                                    <tr>
                                        <th scope="row">{{ $tag->id }}.</th>
                                        <td>{{ $tag->name }}</td>
                                        <td>{{ $tag->slug }}</td>
                                        <td>{{ $tag->created_at }}</td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                  </table>
                    </div>
                </div>
            
            </div>
        </div>
    </div>

</div>
