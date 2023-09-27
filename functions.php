<?php 
    // Funzione per generare un password random
    function generatePassword($length) {
        // Definisco i caratteri disponibili per la password
        $characters = 'abcdefghABCDEFGH1234567890%&$';
        // Inizializza la password generata
        $password = '';
        // Genero la password casuale
        for ($i = 0; $i < $length; $i++) {
            $randomCharacter = $characters[rand(0, strlen($characters) - 1)];
            $password .= $randomCharacter;
        }
        return $password;
    }
?>