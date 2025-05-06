<div>
    <div class="nk-block">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="d-flex align-items-center justify-content-between border-bottom border-light mt-5 mb-4 pb-2">
        <h5>My Stories - {{ $list->count() }}</h5>
    </div>
    <div class="card">
        <table class="table table-middle mb-0 table-responsive">
            <thead class="table-light">
                <tr>
                    <th class="tb-col">
                        <div class="fs-13px text-base">where_it_happen</div>
                    </th>
                    <th class="tb-col">
                        <div class="fs-13px text-base">Category</div>
                    </th>
                    <th class="tb-col">
                        <div class="fs-13px text-base">Views</div>
                    </th>
                    <th class="tb-col">
                        <div class="fs-13px text-base">Likes</div>
                    </th>
                    <th class="tb-col">
                        <div class="fs-13px text-base">Comments</div>
                    </th>
                    <th class="tb-col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $ls)
                
                <tr>
                    <td class="tb-col">
                       
                            <div class="caption-text">{{$ls->where_it_happen}}
                            </div>
                        
                    </td>
                    <td class="tb-col">
                        {{$ls->category}}
                        {{-- <div  class="badge text-bg-success-soft rounded-pill px-2 py-1 fs-6 lh-sm"><span></span> </div> --}}
                    </td>
                    <td class="tb-col">
                        <div  class="badge text-bg-success-soft rounded-pill px-2 py-1 fs-6 lh-sm">{{$ls->views}}</div>
                    </td>
                    <td class="tb-col ">
                        <div class="badge text-bg-warning-soft rounded-pill px-2 py-1 fs-6 lh-sm">{{  $ls->likes}}</div>
                    </td>
                    <td class="tb-col ">
                        <div class="badge text-bg-primary-soft rounded-pill px-2 py-1 fs-6 lh-sm">{{  $ls->comments}}</div>
                    </td>
                    <td class="tb-col tb-col-ends">
                        <a href="{{ url('view/story/'.$ls->_id) }}" class="btn btn-primary btn-sm"> Read Story </a>
                        
                    </td>
                </tr>
            </a>
                @endforeach
               
            </tbody>
        </table>
    </div>
    </div>

</div>
