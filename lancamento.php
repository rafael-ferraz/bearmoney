<?php
include "header.php";
echo"<script src='js/script.js'></script>";

$conn = connect();
$tipo = $_GET['type'];

	if($tipo==1){
		$title = 'Lançar Entrada';
	}else{
		$title = 'Lançar Saída';
	}

$sqlListaCategoria = "SELECT c.cod,c.name
FROM categoria c
WHERE tipo=$tipo
AND valid=1
ORDER BY name";
$execListaCategoria= $conn->query($sqlListaCategoria);

echo"<h2>$title</h2>
<p>Inclua um</p>";

echo"<div class='container'>
	<div class='row'>
		<div class='col-2'>
		</div>
		
		<div class='col-4'>
			<div class='form-group'>
			<label for='categoria'>Categoria</label>
			<select class='form-control' id='categoria'>
				<option value='0' selected>Selecione...</option>";
				foreach($execListaCategoria as $key => $value){
					$cod = $value['cod'];
					$name = $value['name'];

					echo "<option value='$cod'>$name</option>";
				}
			echo"</select>
			</div>
		</div>
		<div class='col-4'>
			<label for='categoria'>Valor</label>
			<div class='input-group mb-2'>
				<div class='input-group-prepend'>
					<div class='input-group-text'>R$</div>
				</div>
				<input type='text' class='form-control' id='amount'>
			</div>
			<small class='form-text text-muted'>Ex: 1.234 | 1234 | 1234,56 | 1.234,56</small>
		</div>
		
		<div class='col-2'>	
		</div>
	</div>
	<div class='row'>
		<div class='col-2'>
		</div>
		
		<div class='col-8'>
			<div class='form-group'>
				<label for='observacoes'>Observações <small class='form-text text-muted'>(Opcional)</small></label>
				<textarea class='form-control' id='observacoes' rows='3'></textarea>
			</div>
		</div>
		
		<div class='col-2'>	
		</div>
	</div>
</div>";

include "footer.php";
?>