<?php

    //definisco una classe
    class Movie {

        //dichiaro gli attributi della classe 
        public $title;
        public $original_title;
        public $genre;
        public $release_date;
        public $running_time;

        //costrutto che viene invocato nella creazione dell'istanza della classe
        function __construct($title, $original_title, $genre, $release_date, $running_time){
            $this->title = $title;
            $this->original_title = $original_title;
            $this->genre = $genre;
            $this->release_date = $release_date;
            $this->running_time = $running_time;
        }

    }

    //creazione delle istanze della classe Movie
    $movie_1 = new Movie('Howl/s Moving Castle', 'ハウルの動く城 (Hauru no Ugoku Shiro)', 'Animation', '5 September 2004', '119 minutes');

    var_dump($movie_1);

    $movie_2  = new Movie('5 Centimeters per Second', '秒速5センチメートル (Byōsoku Go Senchimētoru)', 'Animation', '3 March 2007', '63 minutes');

    var_dump($movie_2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>