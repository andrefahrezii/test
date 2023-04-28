<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <!-- <a href="Icons/Icon/logo.svg"></a> -->
                <img src="Icons/Icon/logo.svg" alt="">
            </div>
            <ul class="menu">
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">MENU</a></li>
                <li><a href="#">MOODS</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="#"><i class="fa fa-search"></i></a></li>
                <li><a href="#"><i class="fa fa-user-secret"></i></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="hero-image">
            <div class="hero-text">
                <h1>Life Begins after Coffee.</h1>
            </div>
            <div class="view-more">
                <a href="#menu-section" class="btn">VIEW MENU</a>
            </div>
        </div>

        <!-- Bagian menu yang dituju oleh tombol "View More" -->
        <section id="menu-section">
            <div class="div-section">
                <h1 class="text-section">What would you like to have?</h1>
                <h5 class="text-section-2">Coffee plunger pot sweet barista, grounds acerbic coffee instant crema cream
                    in half and half. Spoon lungo</h5>
                <h5 class="text-section-2">variety, as, siphon, ristretto, iced brewed and acerbic affogato grinder.
                </h5>
            </div>
        </section>

        <?php
        // Mengambil data dari file JSON
        $data = file_get_contents('galery.json');
        $images = json_decode($data, true)['images'];
        ?>

        <div class="div-images">
            <?php foreach ($images as $image) : ?>
            <div class="image-overlay">
                <img src="<?= $image['src'] ?>" alt="<?= $image['alt'] ?>" alt="image" class="images">
                <div class="image-text">
                    <h2><?= $image['description'] ?></h2>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="div-contactus">
            <h2 class="h2-contactus">Extraction instant that variety
            </h2>
            <h2 class="h2-contactus">white robusta strong</h2>
            <h5 class="p-contactus">Coffee plunger pot sweet barista, grounds acerbic coffee instant crema cream in half
                and half. Spoon lungo</h5>
            <h5 class="p-contactus">variety, as, siphon, ristretto, iced brewed and acerbic affogato grinder. Mazagran
                café au lait wings
                spoon,</h5>
            <h5 class="p-contactus">percolator milk latte dark strong. Whipped, filter latte, filter aromatic grounds
                doppio caramelization
                half and half.</h5>
            <div class="div-btn">
                <a href="#menu-section" class="btn-contactus">CONTACT US</a>
            </div>
        </div>

        <div class="div-halth">
            <div>
                <h1 class="h1-halth">Health Benefits of Coffee</h1>
            </div>
            <div class="h2-halth">
                <div class="div2-halth">
                    <img src="Icons/Icon/battery-full.svg" alt="" class="img-halth">
                    <h4 class="h2-halth">BOOST ENERGY LEVEL</h4>
                </div>
                <div class="div2-halth">
                    <img src="Icons/Icon/sun.svg" alt="" class="img-halth1">
                    <h4 class="h2-sun">BOOST ENERGY LEVEL</h4>
                </div>
                <div class="div2-halth">
                    <img src="Icons/Icon/weight.svg" alt="" class="img-halth">
                    <h4 class="h2-weight">BOOST ENERGY LEVEL</h4>
                </div>
            </div>
        </div>


        <div class="div-image-blog">
            <div class="div-blog">
                <img src="image/Home/blog 1.jpg" alt="" class="img-blog">
            </div>
            <div class="div2-halth">
                <h3>BLOG</h3>
                <h5>Qui espresso, grounds
                    to go</h5>
                <h5 class="h5-blog">December 12, 2019 | Espresso</h5>
                <div>
                    <p class="p-blog">Skinny caffeine aged variety filter saucer redeye, sugar
                    </p>
                    <p class="p-blog">sit steamed eu extraction organic. Beans, crema half</p>
                    <p class="p-blog">and half fair trade carajillo in a variety dripper doppio</p>
                    <p class="p-blog">pumpkin spice cup lungo, doppio, est trifecta breve and,</p>
                    <p class="p-blog">rich, extraction robusta a eu instant. Body sugar</p>
                    <p class="p-blog">steamed, aftertaste, decaffeinated coffee fair trade sit,</p>
                    <p class="p-blog">white shop fair trade galão, dark crema breve</p>
                    <p class="p-blog">frappuccino iced strong siphon trifecta in a at viennese.</p>
                    <h4 class="h4-readmore">READ MORE</h4>
                </div>
            </div>
        </div>


        <div class="div-footer">
            <div>
                <img src="Icons/Icon/logo.svg" alt="" class="img-footer">
            </div>
            <div class="div2-footer">
                <div>
                    <h2>2</h2>
                    <div>
                        <h2>3</h2>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <script src="script.js"></script>
</body>

</html>