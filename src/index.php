<?php
class catImage # Purely a class because I want to add the ability to add image credits in the future and to add titles for example.
{
    public $url;
    public $description;
    public function __construct($url, $description)
    {
        $this->url = $url;
        $this->description = $description;
    }
}

function getCat()
{
    $cats = array(
        new catImage(
            "https://www.marthastewart.com/thmb/g-FunKfdiZombJQ7pB4wb8BF4C8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/cat-kitten-138468381-4cd82b91d7be45cb9f9aa8366e10bce4.jpg",
            ""
        ),
        new catImage(
            "https://d2zp5xs5cp8zlg.cloudfront.net/image-78806-800.jpg",
            ""
        ),
        new catImage(
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQT8ZSEWwF0rsqs4qiGRukSJewgQrvyChibZw&s",
            ""
        ),
        new catImage(
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2hIoAk-gqzO5hesR1ghHAksOJ-y5CsJAfjg&s",
            ""
        ),
        new catImage(
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVJCpCdWiUEXEM_XdSnqHcvfZkz3U5NOZLMQ&s",
            ""
        ),
        new catImage(
            "https://media-be.chewy.com/wp-content/uploads/temperament_kittens_Nov_RR_SB_LC.jpg",
            ""
        ),
        new catImage(
            "https://ahs.nyc3.cdn.digitaloceanspaces.com/live/public/styles/crop_16_9_960x540/public/media/image/2022-06/group-of-kittens.jpg?h=df37f6f0&itok=g3ayM11z",
            ""
        ),
        new catImage(
            "https://tenlives.com.au/wp-content/uploads/2020/09/Found-Kitten-0-8-Weeks-Quiet-scaled.jpg",
            "My personal favorite."
        ),
        new catImage(
            "https://d2zp5xs5cp8zlg.cloudfront.net/image-61209-800.jpg",
            ""
        ),
    );
    return $cats[array_rand($cats)];
}

function loadPage()
{
    $cat = getCat();
?>
    <html>

    <head>
        <link rel="stylesheet" href="/style.css">
        <meta charset="UTF-8">
        <title>lil.cat</title>
    </head>

    <body>
        <div class="parent">
            <a href="https://github.com/Axodouble/lil.cat">
                <h1>lil.cat</h1>
            </a>
            <img src="<?php echo $cat->url; ?>" alt="lil.cat"><br>
            <a><?php echo $cat->description; ?></a>
        </div>
    </body>

    </html>
<?php
}

loadPage();
