@extends('layouts.admin')

@section('content')

Manage Users
</div>

<div class="col-12 tm-block-col">
    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
        <h2 class="tm-block-title">Users List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Delete</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["users"] as $user)
                <tr>  
                    <td>
                        {{ $user->id }}
                    </td>
                    <td><b>{{ $user->name }}</b></td>
                    <td><b>{{ $user->email }}</b></td>
                    <td><b>{{ $user->role }}</b></td>
                    <td>
                      <form id="delete-user-form-{{ $user->getId() }}" action="{{ route('admin.user.delete', $user->getId()) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirmDelete(event, {{ $user->getId() }});">
                          <img src="{{ asset('/img/delete.png') }}" width="30">
                        </button>
                      </form>
                    </td>
                    
                    <script>
                      function confirmDelete(event, userId) {
                        event.preventDefault();
                        var confirmation = confirm('Are you sure you want to delete this car?');
                        
                        if (confirmation) {
                          document.getElementById('delete-user-form-' + userId).submit();
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