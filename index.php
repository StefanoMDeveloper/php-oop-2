<?php
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);


    require_once __DIR__. '/classes/Film.php';
    require_once __DIR__. '/classes/Sala.php';
    require_once __DIR__. '/classes/Sala_4d.php';
    require_once __DIR__. '/classes/Spettacoli.php';


    
    $attoriLista = [
        new Attore ("Mario", "Rossi", 1984),
        new Attore ("Mario", "Verdi", 1984),
        new Attore ("Mario", "Bianchi", 1984),
    ];

    $filmLista = [
        new Film ("Ritorno al Futuro", 115, "Fantascienza", [$attoriLista[0], $attoriLista[2]]),
        new Film ("Ritorno al Passato", 115, "Storico"),
        new Film ("Ritorno Domani", 115, "Commedia"),
    ];

    $filmLista[1]->setAttori($attoriLista);

    $saleLista = [
        new Sala ("A", 55, 7),
        new Sala ("B", 55, 7),
        new Sala_4d ("C", 55, 7,["fumo", "vibro"]),
        new Sala ("D", 145, 21),

    ];

    $spettaoliLista = [];
    $spettaoliLista[] = new Spettacoli ("2022-03-01", "21:30", $filmLista[1], $saleLista[3]);

    // 1) Recupera l’elenco delle sale con relative informazioni, facendo particolare attenzione 
    //     alle informazioni aggiuntive per le sale immersive.
    var_dump($saleLista);



    try{
        $filmLista[1]->setTitolo(1);
    }catch (Exception $e){
        echo "Eccezione: " . $e->getMessage();

    }


