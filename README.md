# Password Generator

Un semplice generatore di password sicure realizzato in PHP con interfaccia front-end basata su Bootstrap 5.

## Descrizione

Questa web app permette di generare password casuali e robuste, con lunghezza personalizzabile e opzioni per includere lettere (maiuscole e minuscole), numeri e caratteri speciali. 

Il progetto è stato realizzato con:

- HTML e CSS (Bootstrap 5) per l’interfaccia utente
- PHP per la logica di generazione della password
- Form con input per la lunghezza e checkbox per selezionare i tipi di caratteri da includere

## Funzionalità

- Password di lunghezza personalizzata (minimo 6 caratteri)
- Opzioni per includere lettere, numeri e caratteri speciali
- Validazione lato server per lunghezza minima
- Password generata casualmente con almeno un carattere per ogni tipo selezionato

## Come usare

1. Apri `index.php` nel browser (server PHP richiesto)
2. Inserisci la lunghezza desiderata della password (minimo 6)
3. Seleziona quali tipi di caratteri includere (lettere, numeri, caratteri speciali)
4. Premi "Invia" per generare la password
5. Premi "Annulla" per resettare il form

## Tecnologie

- PHP 7+
- Bootstrap 5
- HTML5 e CSS

## Note

- Se non si seleziona alcuna opzione, vengono inclusi automaticamente tutti i tipi di caratteri.
- La password generata contiene almeno un carattere di ogni categoria selezionata.
- Il progetto è pensato come esercizio didattico per la generazione di password sicure.