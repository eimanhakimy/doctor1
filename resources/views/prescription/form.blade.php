@if(count($bookings)>0)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$booking->user_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form action="{{route('prescription')}}" method="post">@csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Prescription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="app">

        <input type="hidden" name="user_id" value="{{$booking->user_id}}">
        <input type="hidden" name="doctor_id" value="{{$booking->doctor_id}}">
        <input type="hidden" name="date" value="{{$booking->date}}">
        
        <div class="form-group">
          <label>Services</label>
          <select name="name_of_disease" class="form-control" required="">
              <option value="">Select a Service</option>
              <option value="Dog License Service">Dog License Service</option>
              <option value="Grooming">Grooming</option>
              <option value="Pet Taxi">Pet Taxi</option>
              <option value="Dental Care">Dental Care</option>
              <option value="Consultant">Consultant</option>
              <option value="Pet Boarding">Pet Boarding</option>
              <option value="Surgery">Surgery</option>
              <option value="Pet Travel Agent">Pet Travel Agent</option>
              <option value="Housecall">Housecall</option>
              <option value="Preventive Care">Preventive Care</option>
          </select>
      </div>
      
          <div class="form-group">
            <label>Type of Pet</label>
         
            <textarea name="symptoms" class="form-control" placeholder="Type of pet" required=""></textarea>
        </div>

        <div class="form-group">
          <label>Medicine</label>
          <add-btn></add-btn>
          
        </div>
          <div class="form-group">
            <label>Procedure to use medicine</label>
           
              <textarea name="procedure_to_use_medicine" class="form-control" placeholder="Procedure to use medicine" required=""></textarea>
        </div>
          <div class="form-group">
            <label>Feedback</label>
            
            <textarea name="feedback" class="form-control" placeholder="feedback" required=""></textarea>


        </div>
        <div class="form-group">
            <label>Signature</label>
            <input type="text" name="signature" class="form-control" required="">
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </form>
  </div>
</div>
@endif