<?php 

	$action = 'pendingTask';
	require 'task_controller.php';

?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
		<script>
		
		function edit(id, task_text) {
							
			//Creat a form to edit the information
			let form = document.createElement('form');
			form.action = 'task_controller.php?pag=pending&action=update';
			form.method = 'post';
			form.className = 'row';

			//Create a input to the new information
			let taskInput = document.createElement('input');
			taskInput.type = 'text';
			taskInput.name = 'task';
			taskInput.className = 'form-control col-9';
			taskInput.value = task_text;

			//Create a hidden input to store the task id
			let inputId = document.createElement('input');
			inputId.type = 'hidden';
			inputId.name = 'id';
			inputId.value = id;

			//Create a button to send the changes
			let button = document.createElement('button');
			button.type = 'submit';
			button.className = 'btn btn-info col-3';
			button.innerHTML = 'Atualizar';
			

			//Including the elements
			form.appendChild(taskInput);
			form.appendChild(inputId);
			form.appendChild(button);
			
			let task = document.getElementById('task_' + id);
			task.innerHTML = '';
			task.insertBefore(form, task[0]) = form;
		}
		
		function remove(id) {
							
			//Removing the task by ID
			location.href = 'tarefas_pendentes.php?pag=pending&action=remove&id='+id
		}
		
		function completed(id) {
							
			//Completing the task by ID
			location.href = 'tarefas_pendentes.php?pag=pending&action=completed&id='+id
			
		}
		
		</script>
	
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App Lista Tarefas
				</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-sm-3 menu">
					<ul class="list-group">
						<li class="list-group-item active"><a href="#">Tarefas pendentes</a></li>
						<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Tarefas Pendentes</h4>
								<hr />

                                <? foreach($tasks as $index => $task) { ?>
										<div class="row mb-3 d-flex align-items-center tarefa" id="squaretask_<?= $task->id;?>">
											<div class="col-sm-9" id="task_<?= $task->id;?>">
												<?= $task->task;?>
											</div>
											<div class="col-sm-3 mt-2 d-flex justify-content-between">
												<i class="fas fa-trash-alt fa-lg text-danger" onclick="remove(<?= $task->id;?>)"></i>
												<i class="fas fa-edit fa-lg text-info" onclick="edit(<?= $task->id;?>, '<?= $task->task;?>')"></i>
												<i class="fas fa-check-square fa-lg text-success" onclick="completed(<?= $task->id;?>)"></i>
											</div>
											</div>
									<? } ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>