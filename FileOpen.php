<?php
    //Sola lettura
    $file = fopen("testo.txt", "r");

    //Lettura e Scrittura
    $file = fopen("testo.txt", "r+");

    //Sola Scrittura: il contenuto viene perso
    $file = fopen("testo.txt", "w");

    //Lettura e Scrittura, ma perdendo il contenuto
    $file = fopen("testo.txt", "w+");

    //Solo per aggiunta
    $file = fopen("testo.txt", "a");

    //Per lettura e aggiunta
    $file = fopen("testo.txt", "a+");

    //Da aggiungere ai precedenti per trattare il file come file binario
    $file = fopen("testo.txt", "b");
?>