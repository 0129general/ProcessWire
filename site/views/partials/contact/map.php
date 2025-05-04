<?php
// Define PHP variables for dynamic map content
$mapLocation = "New York, NY, USA";  // Location name
$latitude = 40.69740344223377;      // Latitude
$longitude = -74.11976314309273;    // Longitude
$zoomLevel = 13;                    // Zoom level
$mapUrl = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d" . $longitude . "!3d" . $latitude . "!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2s" . urlencode($mapLocation) . "!5e0!3m2!1sen!2sbd!4v1547528325671";
?>

<!-- start wpo-contact-map -->
<section class="wpo-contact-map-section">
    <h2 class="hidden">Contact map</h2>
    <div class="wpo-contact-map">
        <iframe
            src="<?= $mapUrl ?>"
            allowfullscreen>
        </iframe>
    </div>
</section>
<!-- end wpo-contact-map -->