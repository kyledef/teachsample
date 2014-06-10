<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/main.css">
		<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div id="org_form_sec"class="">
					<form id="form_org_save" class="form-horizontal" role="form" method="POST" action="organizations.php">
						<div class="form-group">
							<input type="text" class="form-control" id="name" name="name" placeholder="Name" />
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="address" name="address" placeholder="Address" />
						</div>
						<div class="form-group">
							<select class="form-control" name="orgType">
								<option value="select">Select Type</option>
								<option value="beneficiary">Beneficiary</option>
								<option value="funder">Funder</option>
								<option value="partner">Partner</option>
							</select>
						</div>
						<div class="form-group">
							<select class="form-control" name="country">
								<option value="select">Select Country</option>
								<option value="tnt">Trinidad and Tobago</option>
								<option value="eu">European Union</option>
								<option value="us">United States of America</option>
							</select>
						</div>
						<div class="form-group">
							<textarea id="description" name="description" class="form-control" rows="3"></textarea>
						</div>
						<input type="submit" value="Save Organization" id="btn_save" class="btn btn" />
					</form>
				</div>
				<div id="org_tbl_sec" class="">
					<table id="org_table">
						<thead>
							<tr>
								<th>Name</th><th>Address</th><th>Type</th><th>Country</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>

					</table>
				</div>
			</div>
		</div>
		<script src="js/vendor/jquery-1.11.0.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
