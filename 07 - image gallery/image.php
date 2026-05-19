<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<?php if (!empty($_GET['image']) && !empty($imageTitles[$_GET['image']])): ?>
    <?php $imasdge= $_GET['image']; ?>

    <h3 class="h3inimage"><?php echo $imageTitles[$_GET['image']]; ?> </h3>
    
    <img src="./images/<?php echo rawurldecode($imasdge); ?>" /> 
    <p class="pinimage"><?php echo str_replace("\n", "<br />", e( $imageDescriptions[$_GET['image']])); ?> </p>

    <?php else: ?>
        <div class="notiice" >
            The image is not loading
        </div>

        
        <?php endif; ?>
 <a href="gallery.php"> Back to Gallery </a>

<?php include './views/footer.php'; ?>
