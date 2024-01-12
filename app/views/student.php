<?php require_once 'inc/appstart.php'; ?>

<div class="container">
  <div class="bg-success text-center text-white fw-bold fs-4 py-2">
    Student CRUD Operation
  </div>
</div>

<div class="container my-5">
  <div class="btn btn-danger">
    Add New Student
  </div>
</div>

<div class="container my-5">
  <form class="row g-3 needs-validation" action="<?php echo BASEURL . 'addstudent' ?>" method="POST" novalidate>

    <div class="col-md-4">
      <label for="firstName" class="form-label">First name</label>
      <input type="text" class="form-control" id="firstName" name="firstname value="" required>
      </div>
      <div class=" col-md-4">
      <label for="middleName" class="form-label">Middle name</label>
      <input type="text" class="form-control" id="middleName" name="middlename" value="">
    </div>
    <div class="col-md-4">
      <label for="lastName" class="form-label">Last name</label>
      <input type="text" class="form-control" id="lastName" name="lastname" value="" required>
    </div>

    <div class="col-md-6">
      <label for="address" class="form-label">Address</label>
      <input type="text" class="form-control" name="address" id="address" required>
    </div>

    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">State</label>
      <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>

    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit" name="create">Create</button>
    </div>
  </form>
</div>


<?php require_once 'inc/append.php'; ?>