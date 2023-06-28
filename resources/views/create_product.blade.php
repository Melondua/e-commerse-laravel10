@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">create data</div>

                <div class="card-body">
                    <form action="{{ route('store_product')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="price" name="price">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="stock" name="stock">
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
                                <button type="submit" class="btn btn-primary">Create Data</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- <form action="{{ route('store_product')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <br>
        <input type="text" name="description" placeholder="Description">
        <br>
        <input type="number" name="price" placeholder="price">
        <br>
        <input type="number" name="stock" placeholder="stock">
        <br>
        <input type="file" name="image"><br>

        <button type="submit">Submit data</button>
    </form> --}}
</div>
@endsection