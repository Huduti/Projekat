<?php $__env->startSection('content'); ?>

<div class="form-container">
    <h1>Uredi zaposlenog</h1>

    <?php if($errors->any()): ?>
        <div class="alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('zaposleni.update', $zaposleni->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-grid">

            <div class="form-group">
                <label>Ime</label>
                <input type="text" name="ime" value="<?php echo e(old('ime', $zaposleni->ime)); ?>">
            </div>

            <div class="form-group">
                <label>Prezime</label>
                <input type="text" name="prezime" value="<?php echo e(old('prezime', $zaposleni->prezime)); ?>">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo e(old('email', $zaposleni->email)); ?>">
            </div>

            <div class="form-group">
                <label>Pozicija</label>
                <input type="text" name="pozicija" value="<?php echo e(old('pozicija', $zaposleni->pozicija)); ?>">
            </div>

            <div class="form-group">
                <label>Stručna sprema</label>
                <input type="text" name="strucnasprema" value="<?php echo e(old('strucnasprema', $zaposleni->strucnasprema)); ?>">
            </div>

            <div class="form-group">
                <label>Odjeljenje</label>
                <input type="text" name="odjeljenje" value="<?php echo e(old('odjeljenje', $zaposleni->odjeljenje)); ?>">
            </div>

            <div class="form-group full-width">
                <label>Datum zaposlenja</label>
                <input type="date" name="datum_zaposlenja" value="<?php echo e(old('datum_zaposlenja', $zaposleni->datum_zaposlenja)); ?>">
            </div>

        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Sačuvaj izmjene</button>
            <a href="<?php echo e(route('zaposleni.index')); ?>" class="btn btn-secondary">Nazad</a>
        </div>

    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\uposlenici\resources\views/zaposleni/edit.blade.php ENDPATH**/ ?>