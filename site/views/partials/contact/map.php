<?php
// Build map URL dynamically
$lat = $page->map_latitude;
$lng = $page->map_longitude;
$location = urlencode($page->map_location);
$zoom = $page->map_zoom ?: 13;

$mapUrl = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d$lng!3d$lat!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2s$location!5e0!3m2!1sen!2sbd!4v1547528325671";
?>

<section class="wpo-contact-map-section">
    <h2 class="hidden">Contact map</h2>
    <div class="wpo-contact-map">
        <iframe src="<?= $mapUrl ?>" allowfullscreen></iframe>
    </div>
</section>