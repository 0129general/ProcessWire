<?php
// Define the breadcrumb and title text as variables
$breadcrumbText = 'Our Projects';
$pageTitle = 'Interior Designer, Expert Architect';
?>

<!--===== start wpo-page-title =====-->
<section class="wpo-page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <ol>
                        <!-- Use the breadcrumb variable -->
                        <li><?= $breadcrumbText ?></li>
                    </ol>
                    <!-- Use the title variable -->
                    <h2 class="poort-text poort-in-right"><?= $pageTitle ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>