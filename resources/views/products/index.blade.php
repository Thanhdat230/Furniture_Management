@extends('products.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Products</h2>
        </div>
        <div class="col-lg-12 text-center">
            <a class="btn btn-success" href="{{ route('products.create') }}">Add Orders</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($products) > 0)
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Feature Image</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th width="300px">More</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->product_code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->feature_image }}</td>
                    {{--        thieu create_at va updated_at            --}}
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->product_id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('products.show',$product->product_id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->product_id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">Start Adding to the Database</div>
    @endif

    {!! $products->links() !!}
@endsection
