<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';
?>
<?php include './views/header.php'; ?>

<?php foreach($imageTitles AS $source => $title): ?>  
    <a href="image.php?<?php echo http_build_query(['image' => $source]); ?>" class="gallery-item" >
        <h3><?php echo e($title) ?> </h3>
        <img src="./images/<?php echo e($source) ?>" alt=" $title">
    </a>
<?php endforeach; ?>

<?php include './views/footer.php'; ?>
