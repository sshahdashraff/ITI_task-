<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>


        <tbody>

            <h2>name : <?php echo e($product->product_name); ?></h2>
            <h2>price: <?php echo e($product->product_price); ?></h2>
            <h2>availablity: <?php echo e($product->product_availability); ?></h2>
            <h2>category: <?php echo e($product->category_id); ?></h2>



        </tbody>
    </table>

</body>

</html><?php /**PATH C:\Users\_^SMS^_\Desktop\New folder (2)\example-app\resources\views/show.blade.php ENDPATH**/ ?>