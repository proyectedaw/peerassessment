<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Testing - Bootstrap FileStyle</title>

		<link rel="icon" type="image/png" href="icons/favicon.png">
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../src/bootstrap-filestyle.js"></script>
	</head>

	<body>
		<div class="container" style="margin-top: 30px;margin-bottom: 30px">
			<div class="row">
				<div class="span12">
					<h2 style="text-align: center;">Testing - Bootstrap FileStyle</h2>
					<div class="well">
						<form role="form" action="upload.php" enctype="multipart/form-data" method="post">
							<h3>Testing Upload</h3>
							<hr>
							<div class="row">
  								<div class="col-xs-6">
									<div class="form-group">
										<input type="file" name="example" id="input01">
									</div>
								</div>
								<div class="col-xs-2">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">
											<span class="glyphicon glyphicon-ok"></span> Send
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="well">
						<form role="form">
							<h3>Testing Options</h3>
							<hr>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>Default browser</label>
										<input type="file" id="input00">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>Custom button text</label>
										<input type="file" id="input02">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>Placeholder</label>
										<input type="file" id="input001">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>No input and file count</label>
										<input type="file" id="input03" multiple="multiple">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>No icon</label>
										<input type="file" id="input04">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>Class bootstrap button</label>
										<input type="file" id="input05">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>Change icon</label>
										<input type="file" id="input07">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>
											Clear button 
											<button id="clear" class="btn btn-default btn-xs" type="button">
												Clear
											</button>
										</label>
										<input type="file" id="input08">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>
											Toggle button
											<button id="toggleInput" class="btn btn-default btn-xs" type="button">
												Toggle input
											</button>
										</label>
										<input type="file" id="input09">
										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>
											Toggle icon
											<button id="toggleIcon" class="btn btn-default btn-xs" type="button">
												Toggle icon
											</button>
										</label>
										<input type="file" id="input10">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>Multiple selection</label>
										<input type="file" multiple="multiple" id="input11">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>Remove text button</label>
										<input type="file" id="input12">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>Disabled button</label>
										<input type="file" id="input13">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>Button before</label>
										<input type="file" id="input14">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>Size</label>
										<input type="file" id="input15">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>Badge</label>
										<input type="file" id="input16">
									</div>
								</div>
							</div>
						</form>
					</div>
					
					<div class="well">
						<form role="form">
							<h3>Testing multiple initialize</h3>
							<hr>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>Multiple initialize</label>
										<input type="file" class="test">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>Multiple initialize</label>
										<input type="file" class="test">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>Multiple initialize</label>
										<input type="file" class="test">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label>Multiple initialize</label>
										<input type="file" class="test">
									</div>
								</div>
							</div>
						</form>
					</div>

					<div class="well">
						<form role="form">
							<h3>Testing initialize via data attributes</h3>
							<hr>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label class="control-label">No icon</label>
										<input type="file" class="filestyle" data-icon="false">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label class="control-label">Change text button</label>
										<input type="file" class="filestyle" data-buttonText="Find">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label class="control-label">Class input</label>
										<input type="file" class="filestyle" data-classInput="input-xxlarge">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label class="control-label">Multiples data attributes</label>
										<input type="file" class="filestyle" data-buttonText="Open" data-input="false" data-iconName="glyphicon-plus" data-classButton="btn btn-primary">
									</div>
								</div>
							</div>
						</form>
					</div>

					<p>
						View documentation: <a href="//markusslima.github.io/bootstrap-filestyle" target="_blank">Doc bootstrap filestyle</a>
					</p>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">
			$('#input01').filestyle()
			$('#input001').filestyle({
				'placeholder' : 'Placeholder test'
			});
			$('#input02').filestyle({
				buttonText : 'My filestyle'
			});

			$('#input03').filestyle({
				input : false,
				buttonName : 'btn-primary'
			});

			$('#input04').filestyle({
				icon : false
			});

			$('#input05').filestyle({
				buttonName : 'btn-warning'
			});

			$('#input07').filestyle({
				iconName : 'glyphicon glyphicon-plus',
				buttonText : 'Add'
			});

			$('#input08').filestyle({
				buttonText : ' File',
				buttonName : 'btn-success'
			});

			$('#clear').click(function() {
				$('#input08').filestyle('clear');
			});

			$('#input09').filestyle({
				buttonText : 'File',
				buttonName : 'btn-primary'
			});

			$('#toggleInput').click(function() {
				var fs = $('#input09');
				if (fs.filestyle('input'))
					fs.filestyle('input', false);
				else
					fs.filestyle('input', true);
			});

			$('#input10').filestyle({
				buttonText : 'File',
				buttonName : 'btn-primary'
			});

			$('#toggleIcon').click(function() {
				var fs = $('#input10');
				if (fs.filestyle('icon'))
					fs.filestyle('icon', false);
				else
					fs.filestyle('icon', true);
			});

			$('#input11').filestyle({
				buttonText : 'Multiple',
				buttonName : 'btn-danger'
			});

			$('#input12').filestyle({
				buttonText : ''
			});

			$('#input13').filestyle({
				disabled : true
			});

			$('#input14').filestyle({
				buttonBefore : true
			});
			$('#input15').filestyle({
				size : 'lg'
			});
			$('#input15').filestyle({
				input : false,
				badge: false
			});

			// nultiple initialize
			$('.test').filestyle({
				buttonName : 'btn-primary'
			});
		</script>
	</body>
</html>
