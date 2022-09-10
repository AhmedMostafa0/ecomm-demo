@extends('layouts.admin')

@section('content')
    <div class="card">

        <div class="card-header">

            <h4> Edit/Update Category</h4>
        </div>

        <div class="card-body">

            <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" class="form-control"  value="{{ $category->name }}" name="name">
                    </div>
                    <div class="col-md-6">
                        <label for="">Slug</label>
                        <input type="text" class="form-control"   value="{{ $category->slug }}" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Descriptio</label>
                        <textarea name="description" rows="3" class="form-control">{{ $category->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" class="form-control"   {{ $category->status == '1' ? 'checked': ''}} name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox" class="form-control"  {{ $category->popular == '1' ? 'checked': ''}}  name="popular">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" class="form-control"  value="{{ $category->meta_title }}"  name="meta_title">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Descrip</label>
                        <textarea rows="3" class="form-control" name="meta_descrip">{{ $category->meta_descrip}}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea rows="3" class="form-control" name="meta_keywords">{{ $category->meta_keywords}}</textarea>
                    </div>
                    @if ($category->image)
                         <img src="{{asset('uploads/category/'.$category->image)}}" alt="Category image">
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
