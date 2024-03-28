<?php
class catImage # Purely a class because I want to add the ability to add image credits in the future and to add titles for example.
{
    public $url;
    public $description;
    public function __construct($url, $description)
    {
        $this->url = "https://github.com/Axodouble/lil.cat/blob/main/src" . $url . "?raw=true";
        $this->description = $description;
    }
}

function getCat()
{
    $cats = array(
        new catImage(
            "/img/ham_01.jpg",
            "It was probably dark? Not sure how his pupils are so big."
        ),
        new catImage(
            "/img/ham_02.png",
            "It appears he is hungry."
        ),
        new catImage(
            "/img/ham_sope_01.png",
            "They were but 'wee lads."
        ),
        new catImage(
            "/img/ham_sope_02.png",
            "They were but 'wee lads."
        ),
        new catImage(
            "/img/jinx_01.jpg",
            "Courtesy of my Girlfriend, this wee ladd is Jinx."
        ),
        new catImage(
            "/img/sope_01.jpg",
            "This is Sope, he is pretty shy but he is majestic as could be."
        ),
        new catImage(
            "/img/sope_02.jpg",
            "This is Sope, he is pretty shy but he is majestic as could be."
        ),
        new catImage(
            "/img/zazu_01.png",
            "This is Zazu, the black and white menace. Image supplied by <a href='https://stanro.chat'>Stan</a>."
        )
    );
    return $cats[array_rand($cats)];
}

function loadPage()
{
    $cat = getCat();
?>
    <html>
        <head>
            <link rel="stylesheet" href="/style.php">
            <meta charset="UTF-8">
            <title>lil.cat</title>
        </head>
        <body>
            <div class="parent">
                <b><?php echo $cat->description; ?></b><br><br>
                <a href="https://github.com/Axodouble/lil.cat"><img src="<?php echo $cat->url; ?>" alt="lil.cat"></a>
            </div>
        </body>
    </html>
<?php
}

loadPage();
