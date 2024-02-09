@extends('layouts.admin')

@section('content')
{{-- Ajouter ici le formulaire d'ajout de voiture --}}

    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
          <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <div class="row">
                <div class="col-12">
                  <h2 class="tm-block-title d-inline-block">Add Car</h2>
                </div>
                @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                @foreach($errors->all() as $error)
                <li>- {{ $error }}</li>
                @endforeach
                </ul>
                @endif
              </div>
              <div class="row tm-edit-product-row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    
                <form method="POST"  enctype="multipart/form-data"  class="tm-edit-product-form" action="{{ route('admin.car.store') }}">
                    @csrf
                  
                    <div class="form-group mb-3">
                      <label
                        for="name"
                        >Car Name
                      </label>
                      <input name="name" value="{{ old('name') }}" type="text" class="form-control validate">
                      
                    </div>
                    <div class="form-group mb-3">
                      <label
                        for="description"
                        >Description</label
                      >
                      <textarea name="description" rows="3" class="form-control validate">{{ old('description') }}</textarea>
                     
                    </div>
                    
                    <div class="row">
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                            <label
                              for="expire_date"
                              >Model
                            </label>
                            <input name="model" value="{{ old('model') }}" type="text" class="form-control validate">
                           
                          </div>
                          <div class="form-group mb-3 col-xs-12 col-sm-6">
                            <label
                              for="stock"
                              >Price
                            </label>
                            <input name="price" value="{{ old('price') }}" type="text" class="form-control validate">
                           
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
                    &nbsp;
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Car Now</button>
                </div>
            </form>
        </div>
    </div>

</div>
        </div>
    </div>
    


<div class="card">
<div class="card-header">
Manage Cars
</div>

<div class="col-12 tm-block-col">
    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
        <h2 class="tm-block-title">Cars List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Model</th>
                    <th scope="col">Description</th>
                    <th scope="col">price</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["cars"] as $car)
                <tr>
                    
                    
                    <td>
                        {{ $car->id }}
                    </td>
                    <td><b>{{ $car->name }}</b></td>
                    <td><b>{{ $car->model }}</b></td>
                    <td><b>{{ $car->description }}</b></td>
                    <td><b>{{ $car->price }}</b></td>
                    <td>

                      <a href="{{route('admin.car.edit', ['id'=> $car->getId()])}}" class="btn btn-primary">
                        <img src="{{ asset('/img/edit.png') }}" width="30">
                      </a>
 
                    </td>
                    <td>
                      <form id="delete-car-form-{{ $car->getId() }}" action="{{ route('admin.car.delete', $car->getId()) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirmDelete(event, {{ $car->getId() }});">
                          <img src="{{ asset('/img/delete.png') }}" width="30">
                        </button>
                      </form>
                    </td>
                    
                    <script>
                      function confirmDelete(event, carId) {
                        event.preventDefault();
                        var confirmation = confirm('Are you sure you want to delete this car?');
                        
                        if (confirmation) {
                          document.getElementById('delete-car-form-' + carId).submit();
                        }
                        
                        return false;
                      }
                    </script>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>

</div>
</div>
@endsection