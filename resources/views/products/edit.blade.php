@extends('products.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Edit Product</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>Check your input data<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->product_id ) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Code:</strong>
                <input type="text" name="product_code" value="{{ $product->product_code }}"
                       class="form-control"  placeholder="Customer id">
            </div>
            <div class="form-group">
                <strong>Product Name:</strong>
                <input type="text" name="name" value="{{ $product->name }}"
                       class="form-control"  placeholder="Customer id">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price :</strong>
                    <input type="text" name="price" value="{{ $product->price}}"
                           class="form-control"  placeholder="Price">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price :</strong>
                    <input type="text" name="feature_image" value="{{ $product->feature_image}}"
                           class="form-control"  placeholder="Price">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
