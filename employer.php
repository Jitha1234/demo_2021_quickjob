<?php
include('include/header.php');
include('include/sidebar.php');
?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
       <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="admin_dashboard.php">dashboard</a></li>
				<li class="breadcrumb-item"><a href="#">Employer</a></li>
				
			  </ol>
			</nav>


        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		 <h1 class="h2">Employer Details</h2>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              <a class="btn btn-primary" href="add_customer.php">Add Employer
              </a>
            </div>
          </div>


<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
                
                
                <th>Email</th>
				<th>First Name</th>
                <th>Last Name</th>
                <th>Mobile number</th>
                
				<th>Action</th>
            </tr>
        </thead>
        <tbody>
		
<?php
  include('connection/db.php');
  
  $query=mysqli_query($conn,"select * from employer");
  while($row=mysqli_fetch_array($query))
  {
	 
  
  ?>
           
           
            <tr>
                <td><?php echo $row['emp_id']; ?></td>
                <td><?php echo $row['emp_email']; ?></td>
                <td><?php echo $row['emp_name']; ?></td>
				<td><?php echo $row['emp_lname']; ?></td>
				<td><?php echo $row['emp_mobile']; ?></td>
				
				<td>
				    <div class="row">
				       <div class="btn-group">
					     <a href="view_employer.php?id=<?php echo $row['emp_id']; ?>"class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span></a>
				         </div>
				</td>
				
                
               
            </tr>
<?php  } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>SL</th>
                <th>Email</th>
				<th>First Name</th>
                <th>Last Name</th>
                <th>Mobile number</th>
                
				<th>Action</th>
                
            </tr>
        </tfoot>
    </table>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

         
          <div class="table-responsive">
         
          </div>
        </main>
      </div>
    </div>

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
    
  </body>
</html>