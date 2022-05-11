<?php error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                        <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
						   <?php 
						   $cards = [
								[
									"image" => "img/demo/authors/sunny.png",
									"title" => "Sunny A. (UI/UX Expert)",
									"position" => "Lead Author",
									"twitter_href" => "https://twitter.com/@myplaneticket",
									"twitter_text" => "@myplaneticket",
									"author_link" => "https://wrapbootstrap.com/user/myorange",
									"author_contact" => "Contact Sunny",
									"status" => "active"
								],
								[
									"image" => "img/demo/authors/josh.png",
									"title" => "Jos K. (ASP.NET Developer)",
									"position" => "Partner &amp; Contributor",
									"twitter_href" => "https://twitter.com/@myplaneticket",
									"twitter_text" => "@atlantez",
									"author_link" => "https://wrapbootstrap.com/user/Walapa",
									"author_contact" => "Contact Jos",
									"status" => "banned",
								],
								[
									"image" => "img/demo/authors/jovanni.png",
									"title" => "Jovanni L. (PHP Developer)",
									"position" => "Partner &amp; Contributor",
									"twitter_href" => "https://twitter.com/@lodev09",
									"twitter_text" => "@lodev09",
									"author_link" => "https://wrapbootstrap.com/user/lodev09",
									"author_contact" => "Contact Jovanni",
									"status" => "active"
								],
								[
									"image" => "img/demo/authors/roberto.png",
									"title" => "Roberto R. (Rails Developer)",
									"position" => "Partner &amp; Contributor",
									"twitter_href" => "https://twitter.com/@sildur",
									"twitter_text" => "@sildur",
									"author_link" => "https://wrapbootstrap.com/user/sildur",
									"author_contact" => "Contact Roberto",
									"status" => "banned"
								]
						   ]; 						   
							foreach($cards as $card): ?>
                            <div class="<?php echo $card['status'] == 'banned' ? 'banned' : '' ?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?php echo $card["image"]; ?>" alt="Sunny A." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        <?php echo $card["title"]; ?>"
                                        <small class="m-0 fw-300">
                                            <?php echo $card["position"]; ?>
                                        </small>
                                    </h5>
                                    <a href="<?php echo $card["twitter_href"]; ?>" class="text-info fs-sm" target="_blank"><?php echo $card["twitter_text"]; ?></a> -
                                    <a href="<?php echo $card["author_text"]; ?>" class="text-info fs-sm" target="_blank" title="<?php echo $card["author_contact"]; ?>"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
							<?php endforeach; ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
