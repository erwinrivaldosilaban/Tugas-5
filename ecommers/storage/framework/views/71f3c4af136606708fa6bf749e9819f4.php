<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet">
</head>
<body class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <?php if(session('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span><?php echo e(session('msg')); ?></span>
                <a href="<?php echo e(route('product.form')); ?>" class="btn btn-primary">Tambah</a>

            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td>
                        <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                        <form method="POST" action="<?php echo e(route('products.destroy', $product->id)); ?>" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger">Hapus</button>

                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH E:\laragon\www\rest-api_sakubudget\resources\views/product/index.blade.php ENDPATH**/ ?>