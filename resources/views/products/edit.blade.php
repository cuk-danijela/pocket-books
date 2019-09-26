@extends('layouts.app')
@section('title', 'Edit Product')

@section('content')
<div class="flex-center position-ref full-height">
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('products.index') }}"> <i
                                class="far fa-hand-point-left"></i> Back</a>
                    </div>
                </div>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('products.update',$product->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" value="{{ $product->title }}" class="form-control"
                                placeholder="Title">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Author:</strong>
                            <input type="text" name="author" value="{{ $product->author }}" class="form-control"
                                placeholder="Author">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea class="form-control" rows="4" cols="50" name="description" placeholder="Description">
                                {{ $product->description }}
                            </textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Released:</strong>
                            <input type="number" name="year" min="1" limit="4" value="{{ $product->year }}" class="form-control" placeholder="Year">
                        </div>
                    </div>
                      @if ($message = Session::get('success'))
                    <img src="/images/{{ Session::get('path') }}" width="300" />
                    @endif
                    <form method="post" action="{{url('/uploadfile')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-3">Select File for Upload:</label>
                            <div class="col-md-8">
                               <input type="file" name="select_file" />
                            </div>
                        </div>
                        </form>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Submit</button>
                    </div>
                </div>

            </form>



        </div>
    </main>
</div>
@endsection
