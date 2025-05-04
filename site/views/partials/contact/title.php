<?php
// Dynamic Page Title and Breadcrumb
$pageTitle = "Contact Us";  // Example dynamic title
$breadcrumb = "Contact Us"; // Dynamic breadcrumb
?>

<!--===== start wpo-page-title =====-->
<section class="wpo-page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <ol>
                        <li><?= $breadcrumb ?></li>
                    </ol>
                    <h2 class="d-none"><?= $pageTitle ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>