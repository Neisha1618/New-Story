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
    <div class="dial-image" id="dial-svg">
    <svg xmlns="http://www.w3.org/2000/svg" width="1440" height="523" viewBox="0 0 1440 523" fill="none">
  <g filter="url(#filter0_d_2061_1690)">
    <path d="M717.453 490.51C715.883 489.73 704.783 484.43 627.163 448.62L627.083 448.58H626.993C592.543 446.3 557.983 442.68 524.263 437.81C491.033 433.02 457.863 426.91 425.683 419.65C393.893 412.48 362.343 404.03 331.923 394.54C301.793 385.14 272.093 374.5 243.653 362.92C215.403 351.42 187.773 338.74 161.533 325.24C135.393 311.79 110.053 297.22 86.2333 281.95C62.4233 266.68 39.6133 250.38 18.4133 233.49C-2.82672 216.56 -22.9067 198.66 -41.2467 180.31C-43.0067 178.55 -44.1567 176.8 -44.6767 175.11C-45.1767 173.47 -45.0967 171.84 -44.4367 170.24C-42.3867 165.29 -34.7667 66.69 -21.7967 62.09C-9.22672 57.64 8.55327 53.36 31.0733 49.38C73.8833 41.81 133.913 45.21 209.513 39.76C280.623 34.63 363.463 30.66 455.723 27.95C500.053 26.65 546.353 25.65 593.333 24.99C639.893 24.33 687.493 24 734.803 24C828.143 24 918.813 25.26 1004.3 27.74C1092.87 30.31 1172.15 34.09 1239.95 38.98C1311.96 44.17 1369.09 40.49 1409.77 47.76C1431.14 51.58 1466.53 62.98 1478.47 67.26C1490.78 71.68 1479.54 162.81 1481.53 167.59C1482.19 169.16 1482.27 170.77 1481.79 172.38C1481.29 174.05 1480.17 175.77 1478.47 177.5C1460.3 195.93 1440.38 213.91 1419.28 230.93C1398.23 247.91 1375.55 264.31 1351.85 279.67C1328.14 295.04 1302.91 309.71 1276.86 323.27C1250.71 336.88 1223.16 349.66 1194.98 361.27C1166.61 372.96 1136.97 383.71 1106.89 393.22C1076.52 402.83 1045.01 411.39 1013.26 418.68C981.113 426.05 947.973 432.28 914.763 437.19C881.063 442.17 846.513 445.91 812.073 448.3H811.983L811.903 448.34C742.483 479.04 720.223 489.14 717.443 490.54L717.453 490.51Z" fill="#3C6682"/>
  </g>
  <defs>
    <filter id="filter0_d_2061_1690" x="-73" y="0" width="1585.33" height="522.54" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      <feOffset dy="4"/>
      <feGaussianBlur stdDeviation="14"/>
      <feComposite in2="hardAlpha" operator="out"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2061_1690"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2061_1690" result="shape"/>
    </filter>
  </defs>
</svg>
</div>


    
    <div class="dial-button-container" id="dial-button-container">
        <button id="ecology-btn" class="ecology-btn">Ecology</button>
        <button id="economy-btn" class="economy-btn">Economy</button>
        <button id="equity-btn" class="equity-btn">Equity</button>
        
        
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
        const equityBtn = document.getElementById('equity-btn');
        const ecologyBtn = document.getElementById('ecology-btn');
        const economyBtn = document.getElementById('economy-btn');
        ecologyBtn.style.display = 'none';
        //change the path color of the dial-image
        const dialSvg = document.getElementById('dial-svg');
        const dialPath = dialSvg.querySelector('path');
        
        ecologyBtn.addEventListener('click', function () {
            this.style.display = 'none';
            economyBtn.style.display = 'inline';
            equityBtn.style.display = 'inline';
            
            document.getElementById("dial-container").classList = "dial-container ecology";
            document.getElementById("tier-2-3-containers").classList = "tier-2-3-containers ecology";
            dialPath.setAttribute('fill', '#3C6682');
        });

        equityBtn.addEventListener('click', function () {
            this.style.display = 'none';
            ecologyBtn.style.display = 'inline';
            economyBtn.style.display = 'inline';
            document.getElementById("dial-container").classList = "dial-container equity";
            document.getElementById("tier-2-3-containers").classList = "tier-2-3-containers equity";
            dialPath.setAttribute('fill', '#F15623');
        });

        economyBtn.addEventListener('click', function () {
            this.style.display = 'none';
            equityBtn.style.display = 'inline';
            ecologyBtn.style.display = 'inline';
            document.getElementById("dial-container").classList = "dial-container economy";
            document.getElementById("tier-2-3-containers").classList = "tier-2-3-containers economy";
            dialPath.setAttribute('fill', '#90A34A');
        });
    });
</script>



