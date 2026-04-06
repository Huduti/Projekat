<?php $__env->startSection('content'); ?>
    <?php
        $selectedId = request('selected');
        $selectedEmployee = $zaposleni->firstWhere('id', (int) $selectedId);
    ?>

    <?php if(session('success')): ?>
        <div class="alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="header-box">
        <div class="header-top">
            <div class="title-with-logo">
    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="logo" class="logo">
    <h1>HR evidencija</h1>
</div>

            <div class="header-actions">
                <a href="<?php echo e(route('zaposleni.create')); ?>" class="btn btn-primary">Dodaj zaposlenog</a>

                <?php if($selectedEmployee): ?>
                    <a href="<?php echo e(route('zaposleni.show', $selectedEmployee->id)); ?>" class="btn btn-secondary">Prikaži</a>
                    <a href="<?php echo e(route('zaposleni.edit', $selectedEmployee->id)); ?>" class="btn btn-warning">Uredi</a>

                    <form action="<?php echo e(route('zaposleni.destroy', $selectedEmployee->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Da li sigurno želiš obrisati zapis?')">
                            Obriši
                        </button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Email</th>
                <th>Pozicija</th>
                <th>Stručna sprema</th>
                <th>Odjeljenje</th>
                <th>Datum zaposlenja</th>
            </tr>
        </thead>

        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $zaposleni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr 
                    onclick="window.location='<?php echo e(route('zaposleni.index', ['selected' => $z->id])); ?>'"
                    style="cursor:pointer;"
                    class="<?php echo e($selectedId == $z->id ? 'selected' : ''); ?>"
                >
                    <td><?php echo e($z->id); ?></td>
                    <td><?php echo e($z->ime); ?></td>
                    <td><?php echo e($z->prezime); ?></td>
                    <td><?php echo e($z->email); ?></td>
                    <td><?php echo e($z->pozicija); ?></td>
                    <td><?php echo e($z->strucnasprema); ?></td>
                    <td><?php echo e($z->odjeljenje); ?></td>
                    <td><?php echo e($z->datum_zaposlenja); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="8" style="text-align:center;">
                        Nema unesenih zaposlenih.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\uposlenici\resources\views/zaposleni/index.blade.php ENDPATH**/ ?>