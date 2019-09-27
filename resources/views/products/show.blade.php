@extends('layouts.app')
@section('title', 'View Product')

@section('content')
<div class="flex-center position-ref full-height">
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">

                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('home') }}"> <i
                                class="far fa-hand-point-left"></i> Back</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5">
                        <img src="/images/{{ $product->image }}" class="img-thumbnail" />
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7">
                    <div class="form-group">
                        <strong>Title:</strong>
                        {{ $product->title }}
                    </div>
                    <div class="form-group">
                        <strong>Author:</strong>
                        {{ $product->author }}
                    </div>
                    <div class="form-group">
                        <strong>Description:</strong>
                        {{ $product->description }}
                    </div>
                    <div class="form-group">
                        <strong>Released:</strong>
                        {{ $product->year }}
                    </div>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"><i
                                class="far fa-edit"></i> Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</button>
                    </form>
                </div>

            </div>
        </div>
    </main>
</div>
@endsection
