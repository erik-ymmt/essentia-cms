<?php
if (isset($originalCustomer)) {
  $originalName = $originalCustomer->name;
  $originalEmail = $originalCustomer->email;
  $originalPhone = $originalCustomer->phone;
  $originalCompany = $originalCustomer->company;
  $originalImage = $originalCustomer->image;
}
?>

<div style="max-width: 40%" class="container">
  <form method="post">
    <h3> <?php echo isset($originalCustomer) ? 'Edit Customer' : 'Add Customer' ?></h3>
  
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" name="inputName" placeholder="<?php echo isset($originalName) ? $originalName : ''; ?>">
      
    </div>

    <div class="form-group">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="<?php echo isset($originalEmail) ? $originalEmail : ''; ?>">
    </div>

    <div class="form-group">
      <label for="inputPhone">Phone</label>
      <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="<?php echo isset($originalPhone) ? $originalPhone : '(00) 12345 6789'; ?>">
    </div>

    <div class="form-group">
      <label for="inputImg">Image</label>
      <input type="file" class="form-control" id="inputImg" name="inputImg" value="" />
    </div>

    <div class="form-group">
      <label for="inputCompany">Company</label>
      <select id="inputCompany" name="inputCompany" class="form-control">
        <option selected></option>
        <option value="pharma">Pharma</option>
        <option value="nutrition">Nutrition</option>
        <option value="tech">Technology</option>
        <option value="noorskin">Noorskin</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary"> <?php echo isset($originalCustomer) ? 'Save Customer' : 'Create Customer' ?></button>

  </form>
</div>