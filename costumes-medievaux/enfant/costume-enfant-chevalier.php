<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Costume médiéval de chevalier pour enfant</title>
    <link rel="stylesheet" href="../../src/css/main.css">
    <link rel="stylesheet" type="text/css" href="../../src/librairies/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../../src/librairies/slick/slick-theme.css"/>

</head>
<body>
<div class="header">
    <img src="../../src/img/basics/logo.png" alt="Logo costume-medieval.com">
    <div class="rs">
        <a href="facebook.com">
            <img src="../../src/img/icons/fb.png" alt="Icon facebook">
        </a>
        <a href="twitter.com">
            <img src="../../src/img/icons/tw.png" alt="Icon twitter">
        </a>
    </div>
</div>

<div class="main">
    <?php
    $URL = $_SERVER['REQUEST_URI'];
    $chemin = explode('/', $URL);
    ?>
    <div class="fil-ariane">
        <?php
        foreach ($chemin as $step) {
            if ($step == '')
                $step = 'Accueil';
            $step = str_replace(".php", "", $step);
            echo "<a href='#'>" . $step . " > </a>";
        }
        ?>
    </div>

    <div class="top-content">
        <div class="left">
            <h1>Lorem Ipsum dolor sit amet</h1>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ea est ex laudantium molestias
                quam
                qui ratione repudiandae soluta tempore. Aspernatur dolorem doloremque earum eligendi mollitia, omnis
                quas
                reprehenderit suscipit.</p>
            <a href="#" class="button1">CTA Button</a>
        </div>
        <div class="right">
            <iframe width="560" height="315"
                    src="https://www.youtube-nocookie.com/embed/aVS4W7GZSq0?rel=0&amp;controls=0&amp;showinfo=0"
                    frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="slider">
        <div class="slider-for">
            <div class="slide slider1"><img src="http://lorempixel.com/output/abstract-q-c-400-200-6.jpg" alt=""/></div>
            <div class="slide slider2"><img src="http://lorempixel.com/output/animals-q-c-400-200-3.jpg" alt=""/></div>
            <div class="slide slider3"><img src="http://lorempixel.com/output/business-q-c-400-200-8.jpg" alt=""/></div>
            <div class="slide slider4"><img src="http://lorempixel.com/output/cats-q-c-400-200-8.jpg" alt=""/></div>
        </div>
        <div class="slider-nav">
            <div class="slide slider1"><img src="http://lorempixel.com/output/abstract-q-c-400-200-6.jpg" alt=""/></div>
            <div class="slide slider2"><img src="http://lorempixel.com/output/animals-q-c-400-200-3.jpg" alt=""/></div>
            <div class="slide slider3"><img src="http://lorempixel.com/output/business-q-c-400-200-8.jpg" alt=""/></div>
            <div class="slide slider4"><img src="http://lorempixel.com/output/cats-q-c-400-200-8.jpg" alt=""/></div>
        </div>
    </div>
    <div class="content">
        <div class="item">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid atque consequuntur eos esse
                fugiat, iure iusto laboriosam, maxime necessitatibus quaerat quis tenetur, unde velit voluptas? Alias
                placeat saepe veritatis.</p>
        </div>
        <div class="item">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid atque consequuntur eos esse
                fugiat, iure iusto laboriosam, maxime necessitatibus quaerat quis tenetur, unde velit voluptas? Alias
                placeat saepe veritatis.</p>
        </div>
        <div class="item">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid atque consequuntur eos esse
                fugiat, iure iusto laboriosam, maxime necessitatibus quaerat quis tenetur, unde velit voluptas? Alias
                placeat saepe veritatis.</p>
        </div>
        <div class="item">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid atque consequuntur eos esse
                fugiat, iure iusto laboriosam, maxime necessitatibus quaerat quis tenetur, unde velit voluptas? Alias
                placeat saepe veritatis.</p>
        </div>
        <div class="item">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid atque consequuntur eos esse
                fugiat, iure iusto laboriosam, maxime necessitatibus quaerat quis tenetur, unde velit voluptas? Alias
                placeat saepe veritatis.</p>
        </div>
    </div>
    <div class="comment">
        <div class="item">
            <img src="../../src/img/comment/avatar1.png" alt="Photo de profil michel homme">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid at dicta eligendi ex id impedit iure
                laborum nihil, non, officiis optio pariatur porro possimus quaerat, quas veritatis voluptates
                voluptatum!</p>
        </div>
        <div class="item">
            <img src="../../src/img/comment/avatar1.png" alt="Photo de profil michel homme">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid at dicta eligendi ex id impedit iure
                laborum nihil, non, officiis optio pariatur porro possimus quaerat, quas veritatis voluptates
                voluptatum!</p>
        </div>
    </div>
</div>
<div class="footer">
    FOOTER <3
</div>
</body>

<script src="../../src/js/jquery.min.js"></script>
<script src="../../src/js/script.js"></script>
<script type="text/javascript" src="../../src/librairies/slick/slick.min.js"></script>

</html>