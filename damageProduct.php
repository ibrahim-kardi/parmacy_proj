  <?php include "inc/header.php";?> 
<?php include "inc/sidebar.php";?> 
      

<div class="content-wrapper">
	<div class="page-title">
		<div>
			<h1><i class="fa fa-forumbee"></i>&nbsp;Damage Product Information</h1>
			<p>Your home Page </p>
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
						<i class="fa fa-product-hunt"></i>&nbsp;Damage Product Details</b></h3>	
				<div class="card-body">
					<table class="table table-hover table-bordered" id="sampleTable">
						<thead>
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
								<th>Action</th>
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
								<td class="text-center">
									<cite title="Delete">
									<a class="btn btn-danger btn-sm" href="#"
									data-toggle="modal" data-target=".bs-example-modal-sm">
										<i class="fa fa-trash" aria-hidden="true"></i>
									
									</a>
                     </cite>
								</td>
							</tr>
						</tbody>
                   
					</table>
                    
				</div>
			</div>
		</div>
	</div>
</div>


     
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