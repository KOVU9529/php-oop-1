<!--Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà-->

<?php
//1. Creao la classe
class Movie{
    //2.Creo le mie variabili d'istanza
    public $title;
    public $year;
    public $author;
    public $trama;
    public $img;
    public $vote;
    //3.Definisco il costruttore
    public function __construct($_title,$_author){
        $this-> title = $_title;
        $this-> author = $_author;
    }
    //4.Definito altro metodo
    public function getTrama(){
        return $this -> trama;
    }
}

//Istanziati due oggetti
$interStellar = new Movie ('Interstellar','Christopher Nolan');
$interStellar -> img='download.jpeg';
$interStellar -> vote=8.6;
$interStellar->year=2014;
$interStellar->trama='In un futuro non precisato, un drastico cambiamento climatico colpisce duramente l\'agricoltura. Il granturco è l\'unica coltivazione ancora in grado di crescere ed un gruppo di scienziati è intenzionato ad attraversare lo spazio per trovare nuovi luoghi adatti a coltivarlo.';
//echo ($interStellar -> getTrama()); 

$tenet = new Movie ('Tenet','Christopher Nolan');
$tenet -> img='TENET.jpeg';
$tenet -> vote=7.3;
$tenet->year=2020;
$tenet-> trama='Un agente segreto riceve una sola parola come arma e viene inviato per prevenire l\'inizio della Terza Guerra Mondiale. Deve viaggiare nel tempo e piegare le leggi della natura per avere successo nella sua missione.';
//echo ($tenet -> getTrama()); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--Stampati a schermo i valori delle relative proprietà-->
    <h1>MOVIE</h1>
    <div>
        <h2> TITOLO : <?php echo $interStellar -> title;?></h2>
        <div>
            <img src="<?php echo $interStellar -> img;?>" alt="">
            <span>votoIMDb: <?php echo $interStellar -> vote;?></span>
        </div>
        <h3>TRAMA</h3>
        <p><?php echo ($interStellar -> getTrama());?></p>
    </div>
    <div>
        <h2> TITOLO : <?php echo $tenet -> title;?></h2>
        <div>
            <img src="<?php echo $tenet -> img;?>" alt="">
            <span>votoIMDb: <?php echo $tenet -> vote;?></span>
        </div>
        <h3>TRAMA</h3>
        <p><?php echo ($tenet -> getTrama());?></p>
    </div>
</body>
</html>