<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo asset('css/bootstrap.min.css') ?>" rel="stylesheet">
    <script src="<?php echo asset('js/jquery.min.js') ?>"></script>
    <script src="<?php echo asset('js/bootstrap.min.js') ?>"></script> 
</head>
<body>
	<div class="container">
		<div class="row">
			<hr>
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<label>ejemplo 2</label>
					</div>
					<div class="panel-body">
						<form method="post" id="ejemplo3_res" >
							@csrf
							<div class="form-group">
								<label>valor1</label>
								<input type="text" class="form-control" name="valor1" required>
							</div>
							<div class="form-group">
								<label>valor2</label>
								<input type="text" class="form-control" name="valor2" required>
							</div>
							<div class="form-group">
								<label>RESULTADO</label>
								<input type="text" class="form-control" id="respuesta" disabled>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-success">calcular</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
  $("#ejemplo3_res").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url:'<?php echo route('prueba.ejemplo3_res') ?>',
            type:'POST',
            data:$("form").serialize(),
            success:function(dat){
               var valores = eval(dat);
               $("#respuesta").val(valores[0])
            }
        });
    });
</script>
</body>
</html>

