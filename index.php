<?php
$nama = "Hermansyah";
$profesi = "Web Developer";
$tentang = "Saya adalah web developer yang fokus pada PHP, HTML, CSS, dan JavaScript.";
$skills = ["PHP", "HTML", "CSS", "JavaScript", "MySQL"];
$projects = [
    ["title" => "Website Portofolio", "desc" => "Portofolio pribadi menggunakan PHP native"],
    ["title" => "Sistem Login", "desc" => "Login & register dengan PHP dan MySQL"],
    ["title" => "CRUD App", "desc" => "Aplikasi CRUD sederhana"]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portofolio <?= $nama ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <h1><?= $nama ?></h1>
    <p><?= $profesi ?></p>
</header>

<section class="about">
    <h2>Tentang Saya</h2>
    <p><?= $tentang ?></p>
</section>

<section class="skills">
    <h2>Skill</h2>
    <ul>
        <?php foreach ($skills as $skill): ?>
            <li><?= $skill ?></li>
        <?php endforeach; ?>
    </ul>
</section>

<section class="projects">
    <h2>Project</h2>
    <div class="project-list">
        <?php foreach ($projects as $project): ?>
            <div class="project-card">
                <h3><?= $project["title"] ?></h3>
                <p><?= $project["desc"] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<footer class="footer">
    <p>© <?= date("Y") ?> <?= $nama ?> | All Rights Reserved</p>
</footer>

</body>
</html>
