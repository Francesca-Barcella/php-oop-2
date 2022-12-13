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
require_once __DIR__ . '/Models/Product.php';
// require __DIR__ . '/Models/DogCategory.php';
// require __DIR__ . '/Models/CatCategory.php';
require_once __DIR__ . '/Models/Food.php';
// require __DIR__ . '/Models/Toys.php';
// require __DIR__ . '/Models/Kennels.php';


$dogActivity = new Product('Dog Activity Flip Board', 'https://arcaplanet.vtexassets.com/arquivos/ids/265067/PHO_PRO_CLIP_32026-1_-SALL_-AWK_-V1.jpg?v=1757236810', 15, 'DogCategory', 'Activity Flip Board di Trixie è un gioco strategico per cani, particolarmente indicato per cani piccoli.');

var_dump($dogActivity);

$mongeAllBreedsAdult = new Food('Monge All Breeds Adult Salmone e Riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1757317402', 46, 'DogCategory', 'Le crocchette di Monge Salmone e Riso All Breeds Adult sono un alimento completo per cani adulti di tutte le taglie formulato con un\'unica fonte proteica: il salmone.', '10-12-2025', 500);

var_dump($mongeAllBreedsAdult);

$purinaProPlan = new Food('Purina Pro Plan Veterinary Diets Ha Hypoallergenic Cane', 'https://arcaplanet.vtexassets.com/arquivos/ids/276183/MAIN.jpg?v=1757293941', 70, 'DogCategory', 'Purina Pro Plan Veterinary Diets HA Hypoallergenic è un alimento secco completo formulato per aiutare a livello nutrizionale i cani che soffrono di allergie alimentari.', '01-03-2030', 1500);

var_dump($purinaProPlan);
