<?php
$title = "Client Form";
require_once './includes/header.php';
?>

<h1 class="text-center mb-4">Create a Form</h1>

<form method="post" action="receive.php" class="needs-validation" novalidate>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>

  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" required>
  </div>

  <div class="row mb-3">
    <div class="col-md-6">
      <label for="city" class="form-label">City</label>
      <input type="text" class="form-control" id="city" name="city" required>
    </div>
    <div class="col-md-4">
      <label for="province" class="form-label">Province</label>
      <select class="form-select" id="province" name="province" required>
        <option value="" disabled selected>Choose...</option>
        <option>Alberta</option>
        <option>British Columbia</option>
        <option>Manitoba</option>
        <option>New Brunswick</option>
        <option>Newfoundland and Labrador</option>
        <option>Northwest Territories</option>
        <option>Nova Scotia</option>
        <option>Nunavut</option>
        <option>Ontario</option>
        <option>Prince Edward Island</option>
        <option>Quebec</option>
        <option>Saskatchewan</option>
        <option>Yukon</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="postal_code" class="form-label">Area Code</label>
      <input type="text" class="form-control" id="postal_code" name="postal_code" required>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <div class="row justify-content-center mt-5">
  <div class="col-8">
    <a href="viewrecords.php" class="btn btn-info w-100">View Records</a>
    <div class="row justify-content-center mt-3">
  <div class="col-8 d-flex p-0">
    <div class="bg-success text-white text-center p-2 w-25 rounded-start">Primary Key</div>
    <a href="deleterecord.php" class="btn btn-danger w-75 rounded-0 rounded-end">
      To delete a record, click this button
    </a>
  </div>
</div>

  </div>
</div>

</form>

<?php require_once './includes/footer.php'; ?>
