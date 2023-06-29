@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit data</div>

                <div class="card-body">
                    <form action="{{ route('update_product', $product)}}" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{$product->name}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="description" name="description"
                                    value="{{$product->description}}">

                            </div>

                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="price" name="price"
                                    value="{{$product->price}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="stock" name="stock"
                                    value="{{$product->stock}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="formFile" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">

                                <input class="form-control" type="file" id="formFile" name="image">
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Update Data</button>
                            </div>
                        </div>

                    </form>
                    <div class="col">
                        <form action="{{route('show_product', $product)}}" method="GET">
                            <button type="submit" class="btn btn-warning">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection