<?php
include('connection/db.php');
include('include/header.php');

include('include/sidebar.php');

?>

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
         <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="admin_dashboard.php">Employer Details</a></li>
			  </ol>
			</nav>


        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		 <h1 class="h2">Employer Details</h2>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>     
            </div>
          </div>
		<form action="" style="border: 1px solid gray; width: 80%; margin-left: 10%; padding: 10px;">
<?php
  include('connection/db.php');
   $id=$_GET['id'];
  $sql="select * from employer where emp_id='$id' ";
  $query=mysqli_query($conn,$sql);
 
 
  while($row=mysqli_fetch_array($query))
  { 
    
  ?>
               
			    <div class="form-group">
               <label for=""> Employer Name: </label>
			   <td><?php echo $row['emp_name']; ?> <?php echo $row['emp_lname']; ?> </td>
			   </div>
			   
			  
			  <div class="form-group">
               <label for="">Employer Email: </label>
			   <td><?php echo $email=$row['emp_email']; ?></td>
			   </div>
			   
			    <div class="form-group">
               <label for="">Employer Mobile number: </label>
			   <td><?php echo $row['emp_mobile']; ?></td>
			   </div>
			   
			  
				
			
      
<?php  } ?>




<a href="reject_employer.php?id=<?php echo $emp_id; ?>" class="btn btn-danger">Reject</a>


        </form>
		
		<br>
		<br>
	
	
		
		
		
		<form action="" style="border: 1px solid gray; width: 80%; margin-left: 10%; padding: 10px;">
		<h3> <b>Employer Created Jobs </b></h3><br><br>
<?php
  include('connection/db.php');
  $sql1="select * from all_jobs where customer_email='$email' ";
  $query1=mysqli_query($conn,$sql1);
 
  
  while($rows=mysqli_fetch_array($query1))
  {
  ?>
               
			    <div class="form-group">
               <label for=""> Job Title: </label>
			   <td><?php echo $rows['job_title']; ?>  </td>
			   </div>
			   
			  
			  <div class="form-group">
               <label for=""> Description: </label>
			   <td><?php echo $rows['des']; ?></td>
			   </div>
			   
			    <div class="form-group">
               <label for=""> Required No of Jobseekers : </label>
			   <td><?php echo $rows['req_no_employees']; ?></td>
			   </div>
			   
				
			   <div class="form-group">
               <label for="">Last Date: </label>
			   <td><?php echo $rows['end_date']; ?></td>
			   </div>
			   
			   <div class="form-group">
               <label for=""> Location: </label>
			   <td><?php echo $rows['country']; ?> <?php echo $rows['state']; ?> <?php echo $rows['city']; ?></td>
			   </div>
			   
			   
				<div class="form-group">
               <label for=""> Category: </label>
			   <td><?php echo $rows['category']; ?></td>
			   </div>
			   <br>
			   <br>
			   <br>
			   <br>
			
      
<?php  } ?>



        </form>
		
		
		
		
		
		
		
		
		
		

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

         
          <div class="table-responsive">
         
          </div>
        </main>
 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  <!--datatables plugin -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script>
   $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
    
