@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')

<div class="flex-center position-ref full-height">
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <div class="dropdown pull-right" aria-labelledby="navbarDropdown">
                            <button class="btn dropdown-toggle" type="button" style="margin-right:10px;"
                                data-toggle="dropdown">Author
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                  @foreach ($products as $product)
                                   <li> {{ $product->author }}</li>
                                    @endforeach
                            </ul>
                        </div>
                        <div class="dropdown pull-right" aria-labelledby="navbarDropdown">
                            <button class="btn dropdown-toggle" type="button" style="margin-right:10px;"
                                data-toggle="dropdown">Year
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                    @foreach ($products as $product)
                                   <li> {{ $product->year }}</li>
                                    @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('products.create') }}"><i class="far fa-plus-square"></i> Create New Product</a>
                    </div>
                </div>
            </div>

            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Year</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><img src="/images/{{ Session::get('path') }}" class="img-thumbnail" width="200" /></td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->author }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->year }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>

            {!! $products->links() !!}
        </div>
    </main>
</div>

@endsection
