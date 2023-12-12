<?php require_once("config.php");$reg_no=$_GET['id'];?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration form 2023</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<style type="text/css">
	@page { size: auto;  margin: 10mm; margin-right: -70px; margin-left: -70px;}
@media print {
    a[href]:after {
        content: none !important;
    }
}
@media print {
        #printbtn {
        display: none !important;
    }
    .main-heading
    {
      font-size:30px !important;
    }

    .underline{
line-height: 27px !important;
 text-decoration-style: dotted !important;
}
}


</style>
</head>
<body>
<div class="container-fluid">
	<?php $sql="SELECT count(*) from registrations WHERE reg_no=:reg_no"; 
    	 $stmt = $db->prepare($sql);
           $stmt->bindParam(':reg_no', $reg_no, PDO::PARAM_STR);
           $stmt->execute();
          $count=$stmt->fetchcolumn();
      if($count==0) 
      {
      	echo 'Registration number is missing or invalid.Kindly filup <a href="form.php">admission form</a>..';
      }
      else {
  ?>
<div class="row">
  <div class="col-sm-1">
  </div>

    <div class="col-sm-10" style="border: 2px solid black; padding:10px;">
    	<?php 

         $sql="SELECT * from registrations WHERE reg_no=:reg_no"; 
         $stmt = $db->prepare($sql);
           $stmt->bindParam(':reg_no', $reg_no, PDO::PARAM_STR);
           $stmt->execute();
           $rows=$stmt->fetchall();
         foreach($rows as $row)
         {
    	 ?> 
         <div class="row">
          <div class="col-2">
            <img src="https://www.pust.ac.bd/includes/images/pust_logo.png" class="img-fluid">
          </div>
           <div class="col">
              <div class="main-heading">Pabna University Of Science And Technology</div>
     <p class="sub-heading"> PUST,BANGLADESH</p>

         <p class="email"> Email: pust.ac@bd</p>
          </div>
          <div class="col-sm-12">
            <hr class="hrcls"> 
          </div>
      </div>
      <div class="row">
  <p id="message"></p>
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8" style="text-align: center;padding-bottom: 5px;">
   <h3> <u>Registration form 2023</u></h3>
  </div>
  <div class="col-sm-2">
  </div>

  </div>

<div class="row">
    <div class="col-6">
        <div class="form-group row">
   <div class="col-4">

      <label class="lable">Registration No</label>
    </div>
     <div class="col-8">
      <strong><?php echo $row['reg_no']; ?></strong>
    </div>
    </div>

      <div class="form-group row">
   <div class="col-4">

      <label class="lable">Full Name</label>
    </div>
     <div class="col-8">
      <?php echo $row['name']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">

      <label class="lable">Father Name</label>
    </div>
     <div class="col-8">
      <?php echo $row['fname']; ?> 
    </div>
    </div>

    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Mother Name</label>
    </div>
     <div class="col-8">
       <?php echo $row['mname']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Address</label>
    </div>
     <div class="col-8">
      <?php echo $row['address']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Email</label>
    </div>
     <div class="col-8">
      <?php echo $row['email']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Mobile No</label>
    </div>
     <div class="col-8">
       <?php echo $row['mobile']; ?> 
    </div>
    </div>

<div class="form-group row">
   <div class="col-4">
      <label class="lable">DOB</label>
    </div>
     <div class="col-8" required>
   <?php echo $row['dob']; ?> 
    </div>
    </div>
    
<div class="form-group row">
   <div class="col-4">
      <label class="lable">Gender</label>
    </div>
     <div class="col-8">
           <?php echo $row['gender']; ?> 
    </div>
    </div>
    </div>
    <div class="col-6">
  <div class="row">
    <div class="col-12">
    <div class="form-group" style="float: right;">
         <label class="lable"> Photo </label>
   <div style="width: 150px; ">
      <img src="uploads/<?php echo $row['image']; ?> "  width="150" height="150">
  </div>

  </div>
  </div>
  </div>  
  
  <div class="row">
    <div class="col-12">
      <div class="form-group" style="float: right;">
         <label class="lable">Signature</label>
   <div style=" width: 150px; ">
      <img src="uploads/<?php echo $row['sign']; ?>"  width="151" height="120" />
  </div>
  </div>  
    </div>
  </div>

    </div>

</div> 
  <div class="row">
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Ctaegory</label>
    </div>
     <div class="col-8">
    <?php echo $row['category']; ?> 
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Course</label>
    </div>
     <div class="col-8">
    <?php echo $row['course']; ?> 
    </div>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Fees</label>
    </div>
     <div class="col-8">
    <?php echo $row['course_fees']; ?> INR  
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Payment Status</label>
    </div>
     <div class="col-8">
    <?php echo strtoupper($row['pay_status']); ?> 
    </div>
    </div>
    </div>
  </div>

  <!-- Row 4 end --> 
<?php } ?> 
</div>
 
<div class="col-2">
  </div>

</div>
<br>
<center><button type="button" class="btn btn-warning" id="printbtn" onclick="window.print()">Print Form</button></center>
<br>
<?php } ?> 

</div>

</body>
</html>
