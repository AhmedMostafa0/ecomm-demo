
    @extends('layouts.front')

    @section('title')
        Category
    @endsection

    @section('content')

    <div class="py-5">
       <div class="container">
          <div class="row">
            <div class="col-md-12">
                <h2>All categories</h2>
                <div class="row">
                @foreach ($category as $cate)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="{{ asset('uploads/category/' .$cate->image) }}" alt="Category image">
                        <div class="card-body">
                            <h5>{{ $cate->name }}</h5>
                            <P>
                                {{$cate->meta_descrip}}
                            </P>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
          </div>
       </div>
    </div>
    @endsection
