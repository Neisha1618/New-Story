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

<div class="dial-container" id="dial-container">
    
    <div class="dial-button-container" id="dial-button-container">

        <button id="ecology-btn" class="<?php echo $buttonClicked === 'ecology-btn' ? 'highlighted' : ""; ?>“><a href="
            ?ecology-btn">Ecology Button</a></button>
        <button id="equity-btn" class="<?php echo $buttonClicked === 'equity-btn' ? 'highlighted' : ""; ?>“><a href="
            ?equity-btn">Equity Button</a></button>
        <button id="economy-btn" class="<?php echo $buttonClicked === 'economy-btn' ? 'highlighted' : ""; ?>“><a href="
            ?economy-btn">Economy Button</a></button>
        <!-- html for conditional render of dial's-->


        <div class="tier-1-description" id="tier-1-description">
            <div id="ecology-description">
            <img src="assets/images/src/Group-34.png" alt="should be a hand"  />
                <?php
                $ecology_description = get_field('ecology_description');
                echo $ecology_description;
                ?>
            </div>
        
            <div id="equity-description" <?php if($buttonClicked) ?> >
                <img src="assets/images/src/Group-36.png" alt="should be balance" />
                <?php
                $equity_description = get_field('equity_description');
                echo $equity_description;
                ?>
            </div>
        
            <div <?php if($buttonClicked) ?> id="economy-description">
                <img src="assets/images/src/Group-38.png" alt="should be money" />
                <?php
                $economy_description = get_field('economy_description');
                echo $economy_description;
                ?>
            </div>
        
        </div>

    </div>
</div>


</div>
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




<script>
    // Function to remove the 'highlighted' class from all buttons
    function removeHighlight() {
        const buttons = document.querySelectorAll('button'); // Get all buttons
        buttons.forEach(button => {
            button.classList.remove('highlighted'); // Remove the 'highlighted' class from each button
        });
    }
    // Add event listeners to the buttons to dynamically update their classes

    document.getElementById('ecology-btn').addEventListener('click', function () {
        removeHighlight();
        this.classList.add('highlighted'); // Add the class 'highlighted' to the clicked button
        //show the dial containers whose button is highlighte, and hide the others
        document.getElementById("ecology-container").style.display = "inline";
        document.getElementById("equity-container").style.display = "none";
        document.getElementById("economy-container").style.display = "none";
        document.getElementById("ecology-description").style.display = "inline";
        document.getElementById("equity-description").style.display = "none";
        document.getElementById("economy-description").style.display = "none";

    });
    document.getElementById('equity-btn').addEventListener('click', function () {
        removeHighlight();
        this.classList.add('highlighted'); // Add the class 'highlighted' to the clicked button
        //show the dial containers whose button is highlighte, and hide the others
        document.getElementById("equity-container").style.display = "inline";
        document.getElementById("ecology-container").style.display = "none";
        document.getElementById("economy-container").style.display = "none";
        document.getElementById("ecology-description").style.display = "none";
        document.getElementById("equity-description").style.display = "inline";
        document.getElementById("economy-description").style.display = "none";
    });
    document.getElementById('economy-btn').addEventListener('click', function () {
        removeHighlight();
        this.classList.add('highlighted'); // Add the class 'highlighted' to the clicked button
        //show the dial containers whose button is highlighte, and hide the others
        document.getElementById("economy-container").style.display = "inline";
        document.getElementById("equity-container").style.display = "none";
        document.getElementById("ecology-container").style.display = "none";
        document.getElementById("ecology-description").style.display = "none";
        document.getElementById("equity-description").style.display = "none";
        document.getElementById("economy-description").style.display = "inline";
    });


</script>