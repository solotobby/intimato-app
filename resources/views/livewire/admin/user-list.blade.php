<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="nk-block">
                   
        <div class="card shadown-none">
            <div class="card-body">
                <div class="row g-3 gx-gs">

                    <div class="d-flex justify-content-center">
                      
                        <div class="col-md-8">
                            Total Users - {{ $users->count() }}
                            <table class="table table-middle mb-0 table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $tag)
                                        <tr>
                                            <td>{{ $tag->name }}</td>
                                            <td>{{ $tag->email }}</td>
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
</div>
