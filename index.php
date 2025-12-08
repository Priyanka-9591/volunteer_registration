<!DOCTYPE html>
<html lang="en">
<head>
  <title>Volunteer Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="container mt-5">
  <h2>Event Volunteer Registration</h2>
  <form id="volunteerForm" action="php/submit.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Name:</label>
      <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Phone:</label>
      <input type="text" name="phone" id="phone" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Skills:</label><br>
      <input type="checkbox" name="skills[]" value="Communication"> Communication<br>
      <input type="checkbox" name="skills[]" value="First Aid"> First Aid<br>
      <input type="checkbox" name="skills[]" value="Management"> Management<br>
    </div>
    <div class="mb-3">
      <label>Availability:</label>
      <select name="availability" class="form-control" required>
        <option value="">Select</option>
        <option value="Weekdays">Weekdays</option>
        <option value="Weekends">Weekends</option>
      </select>
    </div>
    <div class="mb-3">
      <label>Upload ID (jpg/png):</label>
      <input type="file" name="id_photo" accept=".jpg,.jpeg,.png" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script>
  $("#volunteerForm").submit(function(){
    if($("#name").val() == ""){
      alert("Please enter your name");
      return false;
    }
    if($("#phone").val() == ""){
      alert("Please enter your phone");
      return false;
    }
    if($("input[name='skills[]']:checked").length == 0){
      alert("Please select at least one skill");
      return false;
    }
    if($("select[name='availability']").val() == ""){
      alert("Please select availability");
      return false;
    }
    return true;
  });
</script>
</body>
</html>
