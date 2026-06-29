<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
        }
        input {
            padding: 10px;
            margin-top: 5px;
        }
        button {
            margin-top: 20px;
            padding: 10px;
            padding-left: 20px;
            padding-right: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        a {
            color: #007bff;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form action="<?php echo e(route('login')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php if($errors->any()): ?>
            <div style="color: red;">
                <?php echo e($errors->first()); ?>

            </div>
        <?php endif; ?>

        <label >Email</label>
        <input type="email" name="email" value="<?php echo e(old('email')); ?>" required>
        <label >Password</label>
        <input type="password" name="password" required>
        <div style="width: 100%; display: flex; justify-content: space-evenly; align-items: center;">
            <button type="submit">Login</button>
            <a href="/register">Belum punya akun?Register</a>
        </div>
    </form>
</body>
</html><?php /**PATH E:\laragon\www\rest-api_sakubudget\resources\views/auth/login.blade.php ENDPATH**/ ?>