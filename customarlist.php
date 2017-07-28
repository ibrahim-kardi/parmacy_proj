  <?php include "inc/header.php";?> 
  <?php include "inc/sidebar.php";?> 

 <link href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css"
rel="stylesheet" type="text/css"/>     

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-users"></i>&nbsp;Customar Information List .</h1>
            <p>Your Customar Information List Page </p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
       
        </div>
        		
	<div class="row">
		<div class="col-md-12">
			<div class="card">
			<h3 class="card-title text-center"><b>
						<i class="fa fa-users"></i>&nbsp;Customar Information List</b></h3>	
			
			
				<table id="example" class="table table-hover table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<tr>
								<th>Customar Name</th>
								<th>Customar Mobile</th>
								<th>Company Address</th>
								<th>Action</th>
								
							</tr>
						</tr>
					</thead>
    
					<tbody>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td class="text-center">
                      
									<a class="me1 label label-primary" href="#"
                      	data-toggle="modal" data-target=".bs-example-modal-md"
                      	>&nbsp;&nbsp;&nbsp;
										<i class="fa fa-pencil-square" aria-hidden="true"></i> Edit&nbsp;&nbsp;&nbsp;
									</a>
									<br/>
                     	 
									<a class="me2 label label-danger" href="#"
								data-toggle="modal" data-target=".bs-example-modal-sm" 
								>&nbsp;&nbsp;
									
										<i class="fa fa-trash" aria-hidden="true"></i>	Delete&nbsp;&nbsp;
									</a>
                     
								</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>
 </div>
 
 
 
 
 
 
 <!--modal-->    
<form class="form-horizontal">      

<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title text-center">
						<i class="fa fa-pencil-square"></i>&nbsp;&nbsp;Update Product Details</h4>
				</div>
				<div class="modal-body">

			
			
						<div class="form-group">
							<label class="control-label col-md-3">Customar Name</label>
							<div class="col-md-8">
								<input class="form-control" type="text" autofocus="" placeholder="Enter Customar Name">
							</div>
							<sup style="color: red; font-size: 20px;">*</sup>
						</div>
                
                
						<div class="form-group">
							<label class="control-label col-md-3">Customar Mobile</label>
							<div class="col-md-8">
								<input class="form-control" type="text" placeholder="Enter Customar Mobile">
							</div>
							<sup style="color: red; font-size: 20px;">*</sup>
						</div>
						
						
						<div class="form-group">
							<label class="control-label col-md-3">Customar Address</label>
							<div class="col-md-8">
                      <textarea class="form-control" rows="4" placeholder="Enter Customar address"></textarea>
                    </div>
							<sup style="color: red; font-size: 20px;">*</sup>
						</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						<i class="fa fa-fw fa-lg fa-times-circle"></i>Close</button>
					<button type="button" class="btn btn-primary">
						<i class="fa fa-fw fa-lg fa-check-circle"></i>Save changes</button>
				</div>
			</div>
		</div>
	</div>    
</form> 





<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
       <br/>
      <div class="modal-body text-center">
        <h4><i class="fa fa-trash"></i>
        &nbsp;Are You Sure to Delete ?</h4>
      </div>
      <div class="text-center">
       	
       	<button class="btn btn-success">
       	<i class="fa fa-fw fa-lg fa-check-circle"></i>&nbsp;Yes</button>
       	<button class="btn btn-danger"  data-dismiss="modal">
       	<i class="fa fa-fw fa-lg fa-times-circle"></i>&nbsp;NO</button>
       	<br/><br/><br/>
       </div>
  </div>
</div>  
</div>   
      
	

<?php include "inc/footer.php";?>
