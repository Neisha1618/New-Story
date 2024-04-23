              

<?php


function add_gravity_form_popup_script() {
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            function openPopup() {  
                document.getElementById('gravityFormPopup').style.display = 'block';
                console.log('pop up clicked')
            }
            
            function closePopup() {
                document.getElementById('gravityFormPopup').style.display = 'none'
            }
            
            document.getElementById('openPopupBtn').addEventListener('click', openPopup)

        });
    </script>
    <?php
}
add_action('wp_footer', 'add_gravity_form_popup_script');
