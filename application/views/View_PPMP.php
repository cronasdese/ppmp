<!DOCTYPE html>
<html>
<head>
	<title>Create PPMP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap.css'); ?>">
	<script src ="<?php echo base_url('assets/js/jquery-2.2.1.js'); ?>"></script>
	<script src ="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
</head>
<body>
	<div class="container-fluid">
		<h3>View PPMP</h3>
		<div class="form-group">
			<label>
				End User/Unit:
			</label>
			<input id="create_office_name" class="form-control" name="create_office_name" type="text" value="<?php echo $project[0]->office_name ?>" readonly=""/>
		</div>
		<div class="form-group">
			<label>
				Project/Title:
			</label>
			<input id="create_project_title" class="form-control" name="create_project_title" type="text" value="<?php echo $project[0]->project_title ?>" readonly="" />
		</div>

		<br/>
		
		<div class="form-group">
			<table id="create_table" class="table">
				<thead>
					<tr>
						<th class="col-xs-3">
							Category
						</th>
						<th class="col-xs-3">
							Item Specification
						</th>
						<th class="col-xs-1">
							Quantity
						</th>
						<th class="col-xs-1">
							Unit
						</th>
						<th class="col-xs-2">
							Unit Price
						</th>
						<th class="col-xs-1">
							Jan
						</th>
						<th class="col-xs-1">
							Feb
						</th>
						<th class="col-xs-1">
							Mar
						</th>
						<th class="col-xs-1">
							Apr
						</th>
						<th class="col-xs-1">
							May
						</th>
						<th class="col-xs-1">
							Jun
						</th>
						<th class="col-xs-1">
							Jul
						</th>
						<th class="col-xs-1">
							Aug
						</th>
						<th class="col-xs-1">
							Sep
						</th>
						<th class="col-xs-1">
							Oct
						</th>
						<th class="col-xs-1">
							Nov
						</th>
						<th class="col-xs-1">
							Dec
						</th>
						<th class="col-xs-2">
							Subtotal
						</th>
					</tr>
				</thead>
				<tbody id="tablebody">
					<?php
						if(is_array($project_details) || is_object($project_details)){
							foreach ($project_details as $project_data) {
								$subtotal = $project_data->quantity*$project_data->price;
								echo '<tr>
									<td>'. $project_data->category .'</td>
									<td>'. $project_data->description .'</td>
									<td>'. $project_data->quantity .'</td>
									<td>'. $project_data->unit .'</td>
									<td>'. $project_data->price .'</td>
									<td>'. $project_data->jan .'</td>
									<td>'. $project_data->feb .'</td>
									<td>'. $project_data->mar .'</td>
									<td>'. $project_data->apr .'</td>
									<td>'. $project_data->may .'</td>
									<td>'. $project_data->jun .'</td>
									<td>'. $project_data->jul .'</td>
									<td>'. $project_data->aug .'</td>
									<td>'. $project_data->sep .'</td>
									<td>'. $project_data->oct .'</td>
									<td>'. $project_data->nov .'</td>
									<td>'. $project_data->dec .'</td>
									<td>'. number_format((float)$subtotal, 2, '.', '') .'</td>
								</tr>';
							}
						}
					?>					
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>