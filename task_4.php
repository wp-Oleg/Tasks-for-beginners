<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <name>
            Подготовительные задания к курсу
        </name>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-name="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-name="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
						   <?php 
						   $cards = [
						   
								[
									"name" => "Sunny A. (UI/UX Expert)",
									"position" => "Lead Author",
									"image" => "sunny.png",
									"alt" => "Sunny A.",
									"href" => "https://twitter.com/@myplaneticket",
									"email_text" => "@myplaneticket",
									"contact_link" => "https://wrapbootstrap.com/user/myorange",
									"contact_name" => "Contact Sunny"
								],
								
								[
									"name" => "Jos K. (ASP.NET Developer)",
									"position" => "Partner &amp; Contributor",
									"image" => "josh.png",
									"alt" => "Jos K.",
									"href" => "https://twitter.com/@atlantez",
									"email_text" => "@lodev09",
									"contact_link" => "https://wrapbootstrap.com/user/lodev09",
									"contact_name" => "Contact Jos"
								],
								
								[
									"name" => "Jovanni L. (PHP Developer)",
									"position" => "Lead Author",
									"image" => "jovanni.png",
									"alt" => "Jovanni L.",
									"href" => "https://twitter.com/@lodev09",
									"email_text" => "@lodev09",
									"contact_link" => "https://wrapbootstrap.com/user/lodev09",
									"contact_name" => "Contact Jovanni"
								],
								
								[
									"name" => "Roberto R. (Rails Developer)",
									"position" => "Partner &amp; Contributor",
									"image" => "roberto.png",
									"alt" => "Roberto R.",
									"href" => "https://twitter.com/@sildur",
									"email_text" => "@sildur",
									"contact_link" => "https://wrapbootstrap.com/user/sildur",
									"contact_name" => "Contact Roberto"
								],
								
								[
									"name" => "Roberto R2. (Rails Developer)",
									"position" => "Partner &amp; Contributor",
									"image" => "roberto.png",
									"alt" => "Roberto R.",
									"href" => "https://twitter.com/@sildur",
									"email_text" => "@sildur",
									"contact_link" => "https://wrapbootstrap.com/user/sildur",
									"contact_name" => "Contact Roberto"
								]
						   ];
						   
						   foreach($cards as $card): ?>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/<?php echo $card["image"]; ?>" alt="<?php echo $card["alt"]; ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                <h5 class="m-0">
                                    <?php echo $card["name"]; ?>
                                      <small class="m-0 fw-300">
										<?php echo $card["position"]; ?>
                                      </small>
                                </h5>


                                <a href="<?php echo $card["href"]; ?>" class="text-info fs-sm" target="_blank"><?php echo $card["email_text"]; ?></a> 

                                    -
                                <a href="<?php echo $card["contact_link"]; ?>" class="text-info fs-sm" target="_blank" name="<?php echo $card["contact_name"]; ?>"><i class="fal fa-envelope"></i></a>
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
