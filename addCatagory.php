  <?php include "inc/header.php";?> 
  <?php include "inc/sidebar.php";?> 
      

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-cogs"></i>&nbsp;Please Add your Catagory </h1>
            <p>Your Catagory Page..</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
          </div>
          
           <div class="row">
          <div class="col-md-8 col-md-offset-2">
          	<div class="card">
				<h3 class="card-title text-center"><b>
				<i class="fa fa-cogs"></i>&nbsp;Add Catagory</b></h3>		
			<form name="add_name" id="add_name" method="post">  
							<div class="table-responsive">  
								<table class="table table-bordered" id="dynamic_field"> 
									<tr>
										<td colspan="2">
										<b style="font-size: 15px;">&nbsp;&nbsp;Catagory</b>					
										</td>
									</tr> 
									<tr>  
										<td>
										
										<input type="text" name="name[]" placeholder="Enter company Name" autofocus="" required="" class="form-control name_list" />
										
										</td>  
										<td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add More</button></td>  
									</tr>  
								</table> 
								<button type="submit" class="btn btn-info text-right" name="save" id="submit">
									<i class="fa fa-check" aria-hidden="true"></i>
									&nbsp;&nbsp;Save</button>
                              
							</div>  
						</form> 
			</div>
        </div>
      </div>
      
      
      
      
      
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="card">
            
          <h3 class="card-title text-center"><b>
				<i class="fa fa-cogs"></i>&nbsp;Catagory</b></h3>	
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th class="text-center">Sl No.</th>
                      <th class="text-center">Catagory</th>
                      <th class="text-center">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">
                      	<h5>
                      		1.
                      	</h5>
                      </td>
                      <td class="text-center">
                      	<h5>
                      		Looking for more? Check out the examples.
                      	</h5>
                      	 
                      </td>
                     <td class="text-center">
                     	 <a class="btn btn-primary" href="#" style="border-radius: 3px;
    						font-size: 12px;line-height: 1.5;padding: 5px; width: 80px;"
    						data-toggle="modal" data-target=".bs-example-modal-md">
                     	 
                     	 <i class="fa fa-pencil-square" aria-hidden="true"></i>	Edit
                     	
                     	 </a>
                     	
                     	 
                     	 <a class="btn btn-danger" href="#" style="border-radius: 3px;
    						font-size: 12px;line-height: 1.5;padding: 5px; width: 80px;"
    						data-toggle="modal" data-target=".bs-example-modal-sm">
                     	 
                     	 <i class="fa fa-trash" aria-hidden="true"></i>	Delete
                     	 
                     	 </a>
                      </td>
                     
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      
  <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">
        <i class="fa fa-pencil-square"></i>&nbsp;&nbsp;Update Catagory</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
			<label class="control-label col-md-3 text-right">Catagory</label>
			<div class="col-md-9">
				<input class="form-control" type="text" autofocus="">
			</div><br/>
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
      
        	<script>  
		$(document).ready(function(){  
				var i=1;  
				$('#add').click(function(){  
						i++;  
						$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter Company Name" class="form-control name_list" required="" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;&nbsp;Delete</button></td></tr>');  
					});  
				$(document).on('click', '.btn_remove', function(){  
						var button_id = $(this).attr("id");   
						$('#row'+button_id+'').remove();  
					});  
				$('#submit').click(function(){            
						$.ajax({  
								url:"php/copmany_ins.php",  
								method:"POST",  
								data:$('#add_name').serialize(),  
								success:function(data)  
								{  
								 
									$('#add_name')[0].reset();  
								}  
							});  
					});  
			});  
	</script> 
      
      
  <?php include "inc/footer.php";?> 