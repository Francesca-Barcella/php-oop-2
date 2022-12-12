<?php

/* 
TRACCIA ESERCIZIO:
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende PRODOTTI per animali.
I prodotti sono categorizzati, le CATEGORIE sono CANI o GATTI.
I prodotti saranno oltre al CIBO, anche GIOCHI, CUCCE, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

BONUS (Opzionale):
Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta.
Confermate lettura come al solito e buon lavoro! :baby-yoda: (modificato) 

*/

/* 
LE CLASSI:
- Product
- DogCategory
- CatCategory
- Food
- Toys
- Kennels
*/

/* proprietà di porduct:
- name
- category
- image
- price
*/


/* collegamento di tutti i file delle classi */
require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/DogCategory.php';
require __DIR__ . '/Models/CatCategory.php';
require __DIR__ . '/Models/Food.php';
require __DIR__ . '/Models/Toys.php';
require __DIR__ . '/Models/Kennels.php';