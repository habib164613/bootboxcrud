
<form id="createStudentForm" action="{{route('students.store')}}" method="post">
  @csrf
  @method('POST')

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>

  <div class="mb-3">
    <label for="photo" class="form-label">Photo</label>
    <input type="file" class="form-control" id="photo" name="photo">
  </div>

  
  <div class="mb-4 form-check">
    <input type="checkbox" class="form-check-input" id="accepeted">
    <label class="form-check-label" for="accepeted">Check me out</label>
  </div>

  <div class=" button mt-4 text-end">
    <button type="button" class="btn btn-danger bootbox-cancel">Cansel</button>
    <!-- bootbox-accept -->
    <button type="submit" class="btn btn-primary ">Save</button>
  </div>
 
</form>
