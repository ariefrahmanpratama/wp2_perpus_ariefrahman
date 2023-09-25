<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merancang Template sederhana dengan codeigniter</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/stylebuku.css')  ?> ">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>Rentalbuku.web</h1>
                <h3>Membuat Template Sederhana Dengan Codeigniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?= base_url('/web') ?>">HOME</a></li>
                    <li><a href="<?= base_url('/web/about') ?>">ABOUT</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
    </div>
</body>
</html>