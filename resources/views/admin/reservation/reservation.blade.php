@extends('layouts.admin')

@section('content')

Manage Reservations
</div>

<div class="col-12 tm-block-col">
    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
        <h2 class="tm-block-title">Reservations List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Reservation id</th>
                    <th scope="col">User id</th>
                    <th scope="col">Car id</th>
                    <th scope="col">start date</th>
                    <th scope="col">end date</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["reservations"] as $reservation)
                <tr>  
                    <td>
                        {{ $reservation->id }}
                    </td>
                    <td>
                        {{ $reservation->user_id }}
                    </td>
                    <td><b>{{ $reservation->car_id }}</b></td>
                    <td><b>{{ $reservation->start_date }}</b></td>
                    <td><b>{{ $reservation->end_date }}</b></td>
                    <td>
                      <form id="delete-reservation-form-{{ $reservation->getId() }}" action="{{ route('admin.reservation.delete', $reservation->getId()) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirmDelete(event, {{ $reservation->getId() }});">
                          <img src="{{ asset('/img/delete.png') }}" width="30">
                        </button>
                      </form>
                    </td>
                    
                    <script>
                      function confirmDelete(event, reservationId) {
                        event.preventDefault();
                        var confirmation = confirm('Are you sure you want to delete this Reservation?');
                        
                        if (confirmation) {
                          document.getElementById('delete-reservation-form-' + reservationId).submit();
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