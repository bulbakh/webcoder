<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/worker/index" class="nav-link px-2 text-white">Workers</a></li>
                <li><a href="/department/index" class="nav-link px-2 text-white">Departments</a></li>
            </ul>
            <h3><?= APP_NAME ?></h3>
        </div>
    </div>
</header>
<div class="container pt-4">
    <?php extract($parameters); ?>

    <?php if (!empty($msgs)):
    foreach (\App\Core\Alerts::getAlerts($msgs) as $msg) : ?>
        <div class="alert alert-<?= $msg['class'] ?>" role="alert">
            <?= $msg['text'] ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>