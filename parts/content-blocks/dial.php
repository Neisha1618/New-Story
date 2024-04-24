<?php

// Check which button is clicked and set a variable accordingly
$buttonClicked = '';


if (isset($_GET['ecology-btn'])) {
    $buttonClicked = 'ecology-btn';
} elseif (isset($_GET['equity-btn'])) {
    $buttonClicked = 'equity-btn';
} elseif (isset($_GET['economy-btn'])) {
    $buttonClicked = 'economy-btn';
}
?>

<div class="dial-container ecology" id="dial-container">
    
    <div class="dial-button-container" id="dial-button-container">
       
        <button id="equity-btn" class="equity-btn">Equity</button>
        <button id="ecology-btn" class="ecology-btn">Ecology</button>
        <button id="economy-btn" class="economy-btn">Economy</button>
        <!-- html for conditional render of dial's-->


        <div class="tier-1-description" id="tier-1-description">
            <div id="ecology-description">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/src/Group-34.png" alt="Descriptive"/>

                <?php
                $ecology_description = get_field('ecology_description');
                echo $ecology_description;
                ?>
            </div>
        
            <div id="equity-description">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/src/Group-36.png" alt="Descriptive"/>
                <?php
                $equity_description = get_field('equity_description');
                echo $equity_description;
                ?>
            </div>
        
            <div id="economy-description">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/src/Group-38.png" alt="Descriptive"/>
                <?php
                $economy_description = get_field('economy_description');
                echo $economy_description;
                ?>
            </div>
        
        </div>

    </div>
</div>


</div>

<div class="tier-2-3-containers ecology" id="tier-2-3-containers">

<div id="ecology-container" class="ecology-container ecology-btn">

    <?php if (have_rows('ecology_tier_2')): ?>
        <?php while (have_rows('ecology_tier_2')):
            the_row();
            $tier_2_title = get_sub_field('tier_2_title');
            $tier_2_description = get_sub_field('tier_2_description');
            ?>

            <div class="tier-2-container" id="tier-2-container">
                <div id="tier-title" class="tier-title">
                    <?php echo $tier_2_title; ?>
                </div>

                <div class='tier-2-description' id='tier-2-description'>
                    <?php echo $tier_2_description; ?>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>


    <?php if (have_rows('ecology_tier_3')): ?>
        <?php while (have_rows('ecology_tier_3')):
            the_row();
            $title = get_sub_field('tier_3_title');
            $description = get_sub_field('tier_3_description');
            ?>
            <div id="tier-title" class="tier-title">
                <?php echo $title; ?>
                Theres a Title
            </div>

            <div class='tier-3-description' id='tier-3-description'>
                <?php echo $description; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>



<div id="equity-container" class="equity-container equity-btn">


    <?php if (have_rows('equity_tier_2')): ?>
        <?php while (have_rows('equity_tier_2')):
            the_row();
            $tier_2_title = get_sub_field('tier_2_title');
            $tier_2_description = get_sub_field('tier_2_description');
            ?>
             <div class="tier-2-container" id="tier-2-container">
                <div id="tier-title" class="tier-title">
                    <?php echo $tier_2_title; ?>
                </div>
    
                <div class='tier-2-description' id='tier-2-description'>
                    <?php echo $tier_2_description; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>



    <?php if (have_rows('equity_tier_3')): ?>
        <?php while (have_rows('equity_tier_3')):
            the_row();
            $title = get_sub_field('tier_3_title');
            $description = get_sub_field('tier_3_description');
            ?>
            <div class="tier-3-container" id="tier-3-container">
            <div id="tier-title" class="tier-title">
                <?php echo $title; ?>
            </div>

            <div class='tier-3-description' id='tier-3-description'>
                <?php echo $description; ?>
            </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>



<div id="economy-container" class="economy-container economy-btn">

    <?php if (have_rows('economy_tier_2')): ?>
        <?php while (have_rows('economy_tier_2')):
            the_row();
            $tier_2_title = get_sub_field('tier_2_title');
            $tier_2_description = get_sub_field('tier_2_description');
            ?>
            <div class="tier-2-container" id="tier-2-container">
                <div id="tier-title" class="tier-title">
                    <?php echo $tier_2_title; ?>
                </div>
    
                <div class='tier-2-description' id='tier-2-description'>
                    <?php echo $tier_2_description; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('economy_tier_3')): ?>
        <?php while (have_rows('economy_tier_3')):
            the_row();
            $title = get_sub_field('tier_3_title');
            $description = get_sub_field('tier_3_description');
            ?>
            <div class="tier-3-container" id="tier-3-container">

                <div id="tier-title" class="tier-title">
                <?php echo $title; ?>
                </div>
            
                <div class='tier-3-description' id='tier-3-description'>
                    <?php echo $description; ?>
                </div>
            
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</div>

</div>


   

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('ecology-btn').addEventListener('click', function () {
            document.getElementById("dial-container").classList = "dial-container ecology";
            document.getElementById("tier-2-3-containers").classList = "tier-2-3-containers ecology";
        });

        document.getElementById('equity-btn').addEventListener('click', function () {
            document.getElementById("dial-container").classList = "dial-container equity";
            document.getElementById("tier-2-3-containers").classList = "tier-2-3-containers equity";
        });

        document.getElementById('economy-btn').addEventListener('click', function () {
            document.getElementById("dial-container").classList = "dial-container economy";
            document.getElementById("tier-2-3-containers").classList = "tier-2-3-containers economy";
        });
    });
</script>



