<?php

/*
 * knihovna pro práci s emaily
 */

function odesliEmail($adresa,$predmet,$odesilatel,$zprava)
{
    $hlavicka = 'Form' . $odesilatel;
    $hlavicka .= "\nMIME-Version: 1.0\n";
    $hlavicka .= "Content-Type: text/html; charset=\"utf-8\"\n";
    $predmet = 'Nová zpráva z mailformu';
    $uspech = mb_send_mail($adresa,$predmet,$zprava,$hlavicka);
    return $uspech;
  
}