<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Task</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">


</head>
<body>
<!-- partial:index.partial.html -->
<nav class="mnb navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <i class="ic fa fa-bars"></i>
      </button>
      <div style="padding: 15px 0;">
         <a href="#" id="msbo"><i class="ic fa fa-bars"></i></a>
      </div>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">En</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
         
            <li><a href="<?php echo e(route('logout')); ?>">Cerrar sesión</a></li>
          </ul>
        </li>
       
      </ul>
    
    </div>
  </div>
</nav>
<!--msb: main sidebar-->
<div class="msb" id="msb">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<div class="brand-wrapper">
					<!-- Brand -->
					<div class="brand-name-wrapper">
						<a class="navbar-brand" href="<?php echo e(route('dashboard')); ?>">
							ADMINISTRADOR
						</a>
					</div>

				</div>

			</div>

			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">

					<li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				
								</ul>
							</div>
						</div>
					</li>
			
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>  
</div>
<!--main content wrapper-->
<div class="mcw" >
  <!--navigation here-->
  <!--main content view-->
  <div class="cv">
    <div>
     <div class="inbox">
       <div class="inbox-sb">
         
       </div>
       <div class="inbox-bx container">
         <div class="row">
           
           <div class="col-md-12">
             
           <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('actualizar', $task->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo e(old('title', $task->title)); ?>">
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" id="description" name="description"><?php echo e(old('description', $task->description)); ?></textarea>
    </div>
    <div class="form-group">
        <label for="status">Estado</label>
        <select class="form-control" id="status" name="status">
            <option value="pendiente" <?php echo e(old('status', $task->status) == 'pendiente' ? 'selected' : ''); ?>>Pendiente</option>
            <option value="en progreso" <?php echo e(old('status', $task->status) == 'en progreso' ? 'selected' : ''); ?>>En Progreso</option>
            <option value="completada" <?php echo e(old('status', $task->status) == 'completada' ? 'selected' : ''); ?>>Completada</option>
        </select>
    </div>
    <div class="form-group">
        <label for="due_date">Fecha Límite</label>
        <input type="text" class="form-control" id="due_date" name="due_date" value="<?php echo e(old('due_date', $task->due_date)->format('Y/m/d')); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar Tarea</button>
</form>


           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

<script src="<?php echo e(asset('script.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\prueba\resources\views/task/edit.blade.php ENDPATH**/ ?>