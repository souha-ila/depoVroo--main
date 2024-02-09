@extends('layouts.admin')
@section('content')

   
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Edit Car</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <form method="POST" enctype="multipart/form-data" class="tm-edit-product-form" action="{{ route('admin.car.update', ['id'=> $viewData['car']->getId()]) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label for="name">Car Name</label>
                                    <input name="name" value="{{ $viewData['car']->getName() }}" type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" rows="3" class="form-control validate">{{ $viewData['car']->getDescription() }}</textarea>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                                        <label for="expire_date">Model</label>
                                        <input name="model" value="{{ $viewData['car']->getModel() }}" type="text" class="form-control validate">
                                    </div>
                                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                                        <label for="stock">Price</label>
                                        <input name="price" value="{{ $viewData['car']->getPrice() }}" type="text" class="form-control validate">
                                    </div>
                                </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"></label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <div class="tm-product-img-dummy mx-auto">
                                        <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();"></i>
                                    </div>
                                    <div class="custom-file mt-3 mb-3">
                                        <input id="fileInput" class="form-control" type="file" style="display:none;" name="image">
                                        <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD Car IMAGE" onclick="document.getElementById('fileInput').click();">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block text-uppercase">Edit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
