<?php /* Template Name: Event form */ ?>

<?php
get_header();


?>


<form method="post" enctype="multipart/form-data">
    <label for="event_name">Event Name:</label>
    <input type="text" name="event_name" id="event_name"><br>

    <label for="event_description">Event Description:</label>
    <textarea name="event_description" id="event_description"></textarea><br>

    <label for="event_date">Event Date:</label>
    <input type="text" name="event_date" id="event_date"><br>

    <label for="event_city">Event City:</label>
    <select name="event_city" id="event_city">
        <option value="">Select City</option>
        <?php
        $args = array(
            'taxonomy' => 'event_city', 
            'hide_empty' => false, 
        );
        $categories = get_categories($args);
        foreach ($categories as $category) {
            echo '<option value="' . $category->term_id . '">' . esc_html($category->name) . '</option>';
        }
        ?>
    </select><br>

    <label for="event_photo">Event Photo:</label>
    <input type="file" name="event_photo" id="event_photo" accept="image/*" ><br>

    <input type="submit" name="submit_event" value="Submit Event">
</form>
<style>
    .ui-datepicker {
        background-color: #fff;
        color: #000;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    
    jQuery(function() {
        jQuery("#event_date").datepicker({
            dateFormat: 'dd/mm/yy',
            //minDate: 0
        });
    });
</script>
<?php

get_footer();
