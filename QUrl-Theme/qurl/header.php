<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="robots" content="<?php echo $robots; ?>">
    <title><?php echo $shorttitle; ?> <?php echo $currentpagetitle ?> - <?php echo $sitetitle; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="/qurl/custom.css" rel="stylesheet">
    <!-- Matomo -->
    <script>
      var _paq = window._paq = window._paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//qurlpl.usermd.net/matomo/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <!-- /Matomo Code -->
</head>
<body>

<!-- START container -->
<!-- header -->
<div class="container header-bg">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <img src="<?php echo $logo; ?>" style="height:50px; padding-right:10px;">
        <span class="fs-4"><span class="fs-4"><strong><?php echo $shorttitle; ?></strong> <span class="text-secondary fw-light fs-5"><small><?php echo $sitetitle; ?></small></span></span></span>
      </a>

      <ul class="nav nav-pills">
      <?php foreach ($headerLinks as $key => $val): ?>
            <li class="nav-item"><a href="<?php echo $val ?>" class="nav-link link-body-emphasis px-2"><?php echo $key ?></a></li>
        <?php endforeach ?>
      </ul>
    </header>
  </div>

<div class="container mt-3">
<!-- /header -->