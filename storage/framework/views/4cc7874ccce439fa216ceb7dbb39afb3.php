<?php $__env->startSection('content'); ?>
    <h1>Detalji zaposlenog</h1>

    <p><strong>ID:</strong> <?php echo e($zaposleni->id); ?></p>
    <p><strong>Ime:</strong> <?php echo e($zaposleni->ime); ?></p>
    <p><strong>Prezime:</strong> <?php echo e($zaposleni->prezime); ?></p>
    <p><strong>Email:</strong> <?php echo e($zaposleni->email); ?></p>
    <p><strong>Pozicija:</strong> <?php echo e($zaposleni->pozicija); ?></p>
    <p><strong>Stručna sprema:</strong> <?php echo e($zaposleni->strucnasprema); ?></p>
    <p><strong>Odjeljenje:</strong> <?php echo e($zaposleni->odjeljenje); ?></p>
    <p><strong>Datum zaposlenja:</strong> <?php echo e($zaposleni->datum_zaposlenja); ?></p>

    <a href="<?php echo e(route('zaposleni.index')); ?>" class="btn btn-secondary">Nazad</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\uposlenici\resources\views/zaposleni/show.blade.php ENDPATH**/ ?>