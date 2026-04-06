<!DOCTYPE html>
<html lang="bs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR evidencija</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f7fb; margin: 0; padding: 30px; color: #1f2937; }
        .container { max-width: 1100px; margin: 0 auto; }
        .header-box { background: #fff; padding: 20px; border-radius: 10px; margin-bottom: 20px; border: 1px solid #ddd; }
        .header-top { display: flex; justify-content: space-between; align-items: center; gap: 10px; flex-wrap: wrap; }
        .header-top h1 { margin: 0; }
        .header-actions { display: flex; gap: 10px; }
        .btn { display: inline-block; padding: 10px 14px; border-radius: 8px; text-decoration: none; border: none; cursor: pointer; }
        .btn-primary { background: #2563eb; color: #fff; }
        .btn-warning { background: #f59e0b; color: #fff; }
        .btn-danger { background: #dc2626; color: #fff; }
        .btn-secondary { background: #6b7280; color: #fff; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: #a5a5a5; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: center; }
        tr.selected { background: #e0f2fe; }
        .alert-success { background: #dcfce7; color: #166534; padding: 12px; border-radius: 8px; margin-bottom: 16px; }
        tr.selected {
    background: #e0f2fe;
}
    .form-container {
    max-width: 700px;
    margin: 0 auto;
    background: #ffffff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.form-container h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-weight: bold;
    margin-bottom: 5px;
}

.form-group input {
    padding: 8px 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
}

.full-width {
    grid-column: span 2;
}

.form-actions {
    margin-top: 20px;
    display: flex;
    gap: 10px;
    justify-content: center;
}
.title-with-logo {
    display: flex;
    align-items: center;
    gap: 10px;
}

.logo {
    width: 60px;
    height: 60px;
    object-fit: contain;
}
    </style>
</head>
<body>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html><?php /**PATH D:\uposlenici\resources\views/layouts/app.blade.php ENDPATH**/ ?>