<?php

$response = [

    [
        'poster' => '<img style="height: 50px; width: 50px;" src"https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg"><br>',
        'title' => "New Jersey",
        'author' => "Bon Jovi",
        'genre' => "Rock",
        'year' => "1988"
    ],
    [
        'poster' => '<img style="height: 50px; width: 50px;" src"https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg">',
        'title' => "Live at Wembley 86",
        'author' => "Queen",
        'genre' => "Pop",
        'year' => "1992"
    ],
    [
        'poster' => '<img style="height: 50px; width: 50px;" src"https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg">',
        'title' => "Ten's Summoner's Tales",
        'author' => "Sting",
        'genre' => "Pop",
        'year' => "1993"
    ],
    [
        'poster' => '<img style="height: 50px; width: 50px;" src"https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg">',
        'title' => "Steve Gadd Band",
        'author' => "Steve Gadd Band",
        'genre' => "Jazz",
        'year' => "2018"
    ],
    [
        'poster' => '<img style="height: 50px; width: 50px;" src"https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg">',
        'title' => "Brave new World",
        'author' => "Iron Maiden",
        'genre' => "Metal",
        'year' => "2000"
    ],
    [
        'poster' => '<img style="height: 50px; width: 50px;" src"https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg">',
        'title' => "One more car, one more raider",
        'author' => "Eric Clapton",
        'genre' => "Rock",
        'year' => "2002"
    ],
    [
        'poster' => '<img style="height: 50px; width: 50px;" src"https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg">',
        'title' => "Made in Japan",
        'author' => "Deep Purple",
        'genre' => "Rock",
        'year' => "1972"
    ],
    [
        'poster' => '<img style="height: 50px; width: 50px;" src"https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg">',
        'title' => "And Justice for All",
        'author' => "Metallica",
        'genre' => "Metal",
        'year' => "1988"
    ],
    [
        'poster' => '<img style="height: 50px; width: 50px;" src"https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg">',
        'title' => "Hard Wired",
        'author' => "Dave Weckl",
        'genre' => "Jazz",
        'year' => "1994"
    ],
    [
        'poster' => '<img style="height: 50px; width: 50px;" src"https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg">',
        'title' => "Bad",
        'author' => "Michael Jacjson",
        'genre' => "Pop",
        'year' => "1987"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone 1</title>
</head>
<body>
    <div>
        <?php
            foreach($response as $dischi){
                foreach($dischi as $key => $testo){
                    if($key == 'poster'){
                        echo $testo;
                    }
                    elseif($key == 'title'){
                        echo $testo;
                    }
                    elseif($key == 'author'){
                        echo $testo;
                    }
                    elseif($key == 'genre'){
                        echo $testo;
                    }
                    elseif($key == 'year'){
                        echo $testo;
                    }
                }
            }
        ?>
    </div>
    
<img src="" alt="">
</body>
</html>