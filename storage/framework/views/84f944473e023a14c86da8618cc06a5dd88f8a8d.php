<?php $__env->startSection('title', 'Editar departamento'); ?>

<?php $__env->startSection('body-class','product-page'); ?>

<?php $__env->startSection('content'); ?>
<div class="header header-filter" style="background-image: url('<?php echo e(asset('images/logodiamat.png')); ?>');">
</div>

<div class="main main-raised">
<div class="container"> 

    <div class="section">
        <h2 class="title text-center">Editar departamento seleccionado</h2>
        
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li> <?php echo e($error); ?> </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="post" action="<?php echo e(url('/admin/departments/'.$department->id.'/edit')); ?>" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            
            <div class="col-sm-6 col-sm-offset-3">
                <div class="form-group label-floating">
                    <label class="control-label">Nombre del departamento</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e(old('name', $department->name)); ?>">
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                <div class="form-group label-floating">
                    <label class="control-label">Descripción</label>
                    <input type="text" class="form-control" name="description" value="<?php echo e(old('description', $department->description)); ?>">
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                <label class="control-label">Selecciona una imagen para la categoria</label>
                    <input type="file"name="image">
                    <?php if($department->image): ?>
                    <p class="help-block">
                        Subir sólo si se desea reemplazar <a href="<?php echo e(asset('/images/departments/'.$department->image)); ?> " target="_blank"> la imagen actual</a>
                    </p>
                <?php endif; ?>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="col-sm-6">
                
            </div>
            <button class="btn btn-primary">Guardar cambios</button>
            <a href="<?php echo e(url('/admin/departments')); ?> " class="btn btn-default">Cancelar</a>
        </form>
    </div>

</div>

</div>

<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>