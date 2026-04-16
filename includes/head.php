<?php
$pageTitle = htmlspecialchars($pageTitle ?? 'Lazzaro Laurels', ENT_QUOTES, 'UTF-8');
$pageDescription = htmlspecialchars($pageDescription ?? '', ENT_QUOTES, 'UTF-8');
$bodyClass = isset($bodyClass) ? (string) $bodyClass : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $pageTitle ?></title>
  <meta name="description" content="<?= $pageDescription ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,500;1,600&family=Outfit:wght@300;400;500;600&family=Urbanist:wght@300;400;500;600&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./styles.css" />
</head>

<?php if ($bodyClass !== ''): ?>
<body class="<?= htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8') ?>">
<?php else: ?>
<body>
<?php endif; ?>
