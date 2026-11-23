<?php require_once __DIR__ . '/category-wheel.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zoogol Category Wheel</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@400;600;700;800&display=swap">
  <style>
    body { margin: 0; min-height: 100vh; display: grid; place-items: center; padding: 48px 16px;
           box-sizing: border-box; background: radial-gradient(ellipse at top, #FFF3E6 0%, #FFF9F4 45%, #FCE9D8 100%); }
  </style>
</head>
<body>
  <?php zgw_render(['default_index' => 2]); ?>
</body>
</html>
