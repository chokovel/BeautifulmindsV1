@extends('layouts.app')


@section('content')
<div class="container">

    <div class="card card-default">
        <div class="card-header">
            {{ isset($album) ? 'Edit Album' : 'Create Album'}}
        </div>
        <div class="card-body">
        
            @include('partials.errors')

            <form action="{{ isset($album) ? route('albums.update', $album->id ) : route('albums.store') }}" method="POST" enctype= multipart/form-data>
                @csrf

            @if(isset($album))
                @method('PUT')
            @endif

        
                <!-- <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" name="name" value=" {{ isset($album) ? $album->name : '' }} ">
                </div> -->
                <!-- <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" id="description" col="3" class="form-control" name="description">{{ isset($album) ? $album->description : '' }}</textarea>
                </div> -->

                @if(isset($album))

                    <div class="form-group">
                       <img src="{{ asset($album->image)}}" alt="" style="width:75px">
                    </div>

                @endif

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" class="form-control" name="cover_image" value=" {{ isset($album) ? $album->image : '' }} "> 
                </div>

                <div class="form-group">
                    <button class="btn btn-success">{{ isset($album) ? 'Update Album' : 'Create Album'}}</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
@endsection
