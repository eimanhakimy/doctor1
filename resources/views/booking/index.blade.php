@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="top-section">
            <div class="background-image"></div>
            <div class="text-block">
                <h1>Your Appointments</h1>
                <p>Manage your appointments and schedule with ease.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Appointments ({{ $appointments->count() }})</h2>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($appointments as $key=>$appointment)
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>{{ $appointment->doctor->name }}</td>
                                        <td>{{ $appointment->doctor->education}}</td>
                                        <td>{{ $appointment->time }}</td>
                                        <td>{{ $appointment->date }}</td>
                                        <td>{{ $appointment->created_at }}</td>
                                        <td>
                                            @if($appointment->status == 0)
                                                <span class="badge badge-primary">Not visited</span>
                                            @else
                                                <span class="badge badge-success">Checked</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($appointment->status == 0)
                                                <button class="btn btn-danger cancel-appointment" data-appointment-id="{{ $appointment->id }}">Cancel</button>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">You have no appointments.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cancel Appointment Confirmation Modal -->
    <div class="modal fade" id="cancelAppointmentModal" tabindex="-1" role="dialog" aria-labelledby="cancelAppointmentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cancelAppointmentModalLabel">Cancel Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to cancel the appointment?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-danger" id="confirmCancelAppointment">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Custom CSS for the top section */
        .top-section {
            position: relative;
            height: 300px;
            overflow: hidden;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0.5;
        }

        .text-block {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }

        .text-block h1 {
            font-size: 48px;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .text-block p {
            font-size: 18px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* Other styles remain the same */
    </style>

    <script>
        // JavaScript code remains the same
    </script>
@endsection
