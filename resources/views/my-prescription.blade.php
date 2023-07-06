@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">My prescriptions</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Service</th>
                                <th scope="col">Type of Pet</th>
                                <th scope="col">Medicine</th>
                                <th scope="col">Procedure to Use Medicine</th>
                                <th scope="col">Doctor Feedback</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($prescriptions as $prescription)
                            <tr>
                                <td>{{$prescription->date}}</td>
                                <td>{{$prescription->doctor->name}}</td>
                                <td>{{$prescription->name_of_disease}}</td>
                                <td>{{$prescription->symptoms}}</td>
                                <td>{{$prescription->medicine}}</td>
                                <td>{{$prescription->procedure_to_use_medicine}}</td>
                                <td>{{$prescription->feedback}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary view-prescription" data-toggle="modal" data-target="#prescriptionModal" data-date="{{$prescription->date}}" data-doctor="{{$prescription->doctor->name}}" data-disease="{{$prescription->name_of_disease}}" data-symptoms="{{$prescription->symptoms}}" data-medicine="{{$prescription->medicine}}" data-procedure="{{$prescription->procedure_to_use_medicine}}" data-feedback="{{$prescription->feedback}}">
                                        View
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">You have no prescriptions</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Prescription Modal -->
<div class="modal fade" id="prescriptionModal" tabindex="-1" role="dialog" aria-labelledby="prescriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="prescriptionModalLabel">Prescription Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="prescriptionDetails">
                    <!-- Prescription details will be dynamically populated here -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.view-prescription').click(function() {
            var date = $(this).data('date');
            var doctor = $(this).data('doctor');
            var disease = $(this).data('disease');
            var symptoms = $(this).data('symptoms');
            var medicine = $(this).data('medicine');
            var procedure = $(this).data('procedure');
            var feedback = $(this).data('feedback');

            var prescriptionDetails = `
                <p><strong>Date:</strong> ${date}</p>
                <p><strong>Doctor:</strong> ${doctor}</p>
                <p><strong>Service:</strong> ${disease}</p>
                <p><strong>Type of Pet:</strong> ${symptoms}</p>
                <p><strong>Medicine:</strong> ${medicine}</p>
                <p><strong>Procedure to Use Medicine:</strong> ${procedure}</p>
                <p><strong>Doctor Feedback:</strong> ${feedback}</p>
            `;

            $('#prescriptionDetails').html(prescriptionDetails);
        });
    });
</script>
@endsection
