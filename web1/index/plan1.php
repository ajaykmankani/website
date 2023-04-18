<section class="plan1-section">
    <div class="container mb-4">

        <div class="row">




            <?php include('web1/variables/plans.php') ?>




            <?php
$x=0;
foreach($plans as $plan){
$x++;
?>

            <div class="col-md-4">
                <div class="plan1" <?php if($x == 1){} else {?>style="background-color: <?=$plan['color']?>; color:#000"
                    <?php }?>>
                    <strong><?= $plan['title'] ?></strong>
                    <p class="text-white" <?php if($x == 1){} else {?>style="color:#000 !important" <?php }?>>
                        <?= $plan['sub_title'] ?></p>

                </div>
            </div>


            <?php

} ?>
        </div>
    </div>

</section>