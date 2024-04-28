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
            <button id="ecology-btn" class="ecology-btn">ECOLOGY</button>
            <button id="economy-btn" class="economy-btn">ECONOMY</button>
            <button id="equity-btn" class="equity-btn">EQUITY</button>
        </div>   

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
        
            <div class="dial-arrow-svg">
            <div class="prev-arrow" id="prev-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="31" viewBox="0 0 38 31" fill="none">
                <path d="M37.5758 15.4995C37.5758 16.6925 36.6352 17.6568 35.4763 17.6568H7.16664L16.5703 27.3174C17.3891 28.1609 17.3891 29.5265 16.5703 30.3701C16.1588 30.7907 15.6213 31 15.0838 31C14.5464 31 14.011 30.7907 13.5995 30.3701L0.614103 17.0247C-0.204701 16.1833 -0.204701 14.8177 0.614103 13.9742L13.6016 0.631024C14.4225 -0.210341 15.7515 -0.210341 16.5724 0.631024C17.3912 1.47455 17.3912 2.84015 16.5724 3.68151L7.16873 13.3421H35.4763C36.6352 13.3421 37.5758 14.3086 37.5758 15.4995Z" fill="#F6F4F4"/>
                </svg>
            </div>

            <div class="next-arrow" id="next-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="31" viewBox="0 0 38 31" fill="none">
                <path d="M0.363639 15.5004C0.363638 14.3797 1.30421 13.4738 2.46314 13.4738L30.7728 13.4738L21.3691 4.39874C20.5503 3.60634 20.5503 2.3235 21.3691 1.5311C21.7806 1.13591 22.3181 0.939332 22.8556 0.939332C23.393 0.939332 23.9284 1.13591 24.3399 1.5311L37.3253 14.0676C38.1441 14.858 38.1441 16.1409 37.3253 16.9333L24.3378 29.4678C23.5169 30.2581 22.1879 30.2581 21.367 29.4678C20.5482 28.6754 20.5482 27.3925 21.367 26.6022L30.7707 17.527L2.46314 17.527C1.30421 17.527 0.363639 16.6191 0.363639 15.5004Z" fill="#F6F4F4"/>
                </svg>
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
    <div class="ecology-tier-3-container">
        <?php while (have_rows('ecology_tier_3')): the_row(); ?>
            <div class="ecology-tier-3-item">
                <div class="tier-title">
                    <?php the_sub_field('tier_3_title'); ?>
                </div>
                <div class="tier-3-description">
                    <?php the_sub_field('tier_3_description'); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
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
    <div class="equity-tier-3-container">
        <?php while (have_rows('equity_tier_3')): the_row(); ?>
            <div class="equity-tier-3-item">
                <div class="tier-title">
                    <?php the_sub_field('tier_3_title'); ?>
                </div>
                <div class="tier-3-description">
                    <?php the_sub_field('tier_3_description'); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
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
    <div class="economy-tier-3-container">
        <?php while (have_rows('economy_tier_3')): the_row(); ?>
            <div class="economy-tier-3-item">
                <div class="tier-title">
                    <?php the_sub_field('tier_3_title'); ?>
                </div>
                <div class="tier-3-description">
                    <?php the_sub_field('tier_3_description'); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

    </div>

</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const prevArrow = document.getElementById('prev-arrow');
        const nextArrow = document.querySelector('#next-arrow svg');
        const targetContainer = document.querySelector('.dial-container equity');


        const equityBtn = document.getElementById('equity-btn');
        const ecologyBtn = document.getElementById('ecology-btn');
        const economyBtn = document.getElementById('economy-btn');
        ecologyBtn.style.display = 'none';
        
        ecologyBtn.addEventListener('click', function () {
            this.style.display = 'none';
            economyBtn.style.display = 'inline';
            equityBtn.style.display = 'inline';
            
            document.getElementById("dial-container").classList = "dial-container ecology";
            document.getElementById("tier-2-3-containers").classList = "tier-2-3-containers ecology";
            
        });

        equityBtn.addEventListener('click', function () {
            this.style.display = 'none';
            ecologyBtn.style.display = 'inline';
            economyBtn.style.display = 'inline';
            document.getElementById("dial-container").classList = "dial-container equity";
            document.getElementById("tier-2-3-containers").classList = "tier-2-3-containers equity";
            
        });

        economyBtn.addEventListener('click', function () {
            this.style.display = 'none';
            equityBtn.style.display = 'inline';
            ecologyBtn.style.display = 'inline';
            document.getElementById("dial-container").classList = "dial-container economy";
            document.getElementById("tier-2-3-containers").classList = "tier-2-3-containers economy";
           
        });


        prevArrow.addEventListener('click', function() {
            const closestContainer = prevArrow.closest('.container');
       
    });

    
    nextArrow.addEventListener('click', function() {
       targetContainer.style.display = 'block';
    });
});

</script>



