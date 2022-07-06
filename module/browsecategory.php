<div class="container">
    <div class="row">
        <?php
        for($i = 0; $i < count($categories); $i++) {
            echo '        <div class="col">
            <button class="btn rounded-4 bg-light m-3 p-5 w-100"><img src="../assets/img/'.$category_icon[$i].'" alt=""> '.$categories[$i].'</button>
        </div>';
        }
        ?>
    </div>
</div>
