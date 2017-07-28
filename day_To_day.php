  <?php include "inc/header.php";?> 
  <?php include "inc/sidebar.php";?> 
      
<link href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css"
rel="stylesheet" type="text/css"/>

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-calendar"></i>&nbsp;Selling Day to Day Information </h1>
            <p>Your Selling Day to Day Page</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
       
        </div>
       	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="card">
				
				<form class="form-horizontal">
					<div class="card-body text-center">
					
                
						<div class="form-group">
							<label class="control-label col-md-1">Day</label>
							<div class="col-md-4">
							
								<div class="inner-addon right-addon">
									<i class="glyphicon glyphicon-calendar"></i>
									<input class="form-control" id="demoDate" type="text" placeholder="Select Date">
								</div>
                        	
								
							</div>
							
							<label class="control-label col-md-1">To</label>
							<label class="control-label col-md-1"> Day</label>
							
							
							<div class="col-md-4">
							
								<div class="inner-addon right-addon">
									<i class="glyphicon glyphicon-calendar"></i>
									<input class="form-control" id="demoDate2" type="text" placeholder="Select Date">
								</div>
                        	
								
							</div>
							
							<div class="col-md-1">
								<button class="btn btn-primary">
									<i class="fa fa-book"></i>
								</button>
							</div>
						</div>
              
					</div>
				
				
				</form>
			</div>
		</div>
	</div>
	
	
	
	
	
	
		
	<div class="row">
		<div class="col-md-12">
			<div class="card">
			<h3 class="card-title text-center"><b>
						<i class="fa fa-product-hunt"></i>&nbsp;Day Selling Details</b></h3>	
			
			
				<table id="example" class="table table-hover table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<tr>
								<th>Product Name</th>
								<th>Product Code</th>
								<th>Company Name</th>
								<th>Catagory Type</th>
								<th>Buying Price</th>
								<th>Receive Date</th>
								<th>Manufacture Date</th>
								<th>Expire Date</th>
								<th>Product Pice</th>
								<th>Product Type</th>
								
							</tr>
						</tr>
					</thead>
      
					<tbody>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
							<td>$320,800</td>
							<td>$320,800</td>
							<td>$320,800</td>
							<td>$320,800</td>
							<td>$320,800</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	
	
	
      </div>
  
	


<?php include "inc/footer.php";?>
         