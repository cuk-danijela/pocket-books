@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')

<div class="flex-center position-ref full-height">
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">

                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('products.create') }}"><i
                                class="far fa-plus-square"></i>
                            Create New Product</a>
                    </div>
                </div>
            </div>

            <table id="products_table" class="table table-bordered table-condensed table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Product</th>
                        {{-- <th>Author</th> --}}
                        {{-- <th>Description</th> --}}
                        {{-- <th>Year</th> --}}
                        {{-- <th width="280px">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td style="vertical-align: middle;text-align:center;">{{ ++$i }}</td>
                        <td style="width:180px;text-align:center;"><img src="/images/{{ $product->image }}"
                                class="img-thumbnail" /></td>
                        <td style="padding-top: 25px; padding-left: 50px; padding-right: 50px;">
                            <p><b>Title:</b> {{ $product->title }} </p>
                            <p><b>Author:</b> {{ $product->author }}</p>
                            <p><b>Description:</b> {{ str_limit($product->description, 150) }}</p>
                            <p><b>Published:</b> {{ $product->year }}</p>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST"
                                class="align-center">
                                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}"><i
                                        class="far fa-eye"></i>
                                    View</a>
                                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"><i
                                        class="far fa-edit"></i> Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i>
                                    Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</div>
<script>
    $(document).ready(function () {
        $('#products_table').DataTable({
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, 'All']
            ]
        });
    });

</script>
@endsection
