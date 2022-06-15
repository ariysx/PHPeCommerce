<?php

if(empty($_SESSION['toast'])){
    return;
}

$toast = $_SESSION['toast'];
/*
 * 0 -> icon
 * 1 -> title
 * 2 -> message
 *
 * setting toast:
 * $_SESSION['toast'] = array("Icon", "Hello", "Test");
 */



?>
<section>
    <div class="container m-auto d-flex justify-content-center">
        <div class="toast-container m-3" id="alert">
            <div class="toast fade show">
                <div class="toast-header">
                    <strong class="me-auto"><?php echo '<i class="las '.$toast[0].'"></i>' ?> <?php echo $toast[1] ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                </div>
                <div class="toast-body">
                    <?php echo $toast[2] ?>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function(){
            var element = document.getElementById("myToast");
            // Create toast instance
            var myToast = new bootstrap.Toast(element);
            myToast.show();
        });
    </script>
</section>

<?php
unset($_SESSION['toast']);
?>