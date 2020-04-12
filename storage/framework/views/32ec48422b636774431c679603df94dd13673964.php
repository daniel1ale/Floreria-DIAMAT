<?php $__env->startSection('title', 'Resultados de la busqueda'); ?>

<?php $__env->startSection('body-class','profile-page'); ?> 

<?php $__env->startSection('styles'); ?>
    <style>
        .profile {
            margin-left: 380px;
        }
        .team {
            padding-bottom: 50px;
        }
        .team .row. .col-md-4 {
            margin-bottom: 5em;
        }
        .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
        }
        .row > [class*='col-']{
            display: flex;
            flex-direction: column;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="header header-filter" style="background-image: url('../public/images/logonegro3.png');"></div>

    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="profile text-center">
                        <div class="avatar">
                            <img src="../public/images/lupa2.jpg" alt="Imagen de lupa que representa una busqueda " class="img-circle img-responsive img-raised">
                        </div>
                        <div class="namer">
                            <h3 class="title">Resultados de la búsqueda </h3>
                        </div>
<!--                         <?php if(session('notification')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('notification')); ?>        
                            </div>
                        <?php endif; ?>     -->
                    </div>
                </div>

                <div class="description text-center">
                    <p>Se encontraron <?php echo e($products->count()); ?> resultados para el término <?php echo e($query); ?></p>
                </div>
                
                <div class="team text-center">
                    <div class="row">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="<?php echo e($product->featured_image_url_search); ?> " alt="FLORERIA DIAMAT" class="img-raised img-rounded">
                                <h4 class="title"> <a href="<?php echo e(url('/products/'.$product->id)); ?> "><?php echo e($product->name); ?> </a><br />
                                    <small class="text-muted"><?php echo e($product->category_name); ?></small>
                                </h4>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="text-center">
                        <?php echo e($products->links()); ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
<!-- Modal Core -->
<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>