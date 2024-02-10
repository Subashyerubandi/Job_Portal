<?php include 'header.php'?>
<div class="content">
<p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="position">
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">Skills</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="JobDesc" name="Jdesc"></textarea>
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  
 <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
</div>
</div>
<table class="table">
  <thead>

    <tr>
      <th scope="col" >No</th>
      <th scope="col" >Company</th>
      <th scope="col" >Position</th>
      <th scope="col" >CTC</th>
      
    </tr>
  </thead>
  <?php $sql = "SELECT `cname`,`position`,`CTC` FROM `jobs`";
  $result = mysqli_query($conn, $sql);
  $i = 0;
  if($result->num_rows>0){
      while($rows=$result->fetch_assoc()) {
        echo"
    <tbody>
     <tr>
      <td>".++$i."</td>
      <td>".$rows['cname']."</td>
      <td>".$rows['position']."</td>
      <td>".$rows['CTC']."</td>
     </tr>";
     }}
     else{
      echo"";
     }?>
  </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>