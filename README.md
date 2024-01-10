# Newsletter subscription with PHP

This code created a index.php page with a form that asks for an email address. It then checks that the email contains a '@' and a '.' (dot).

Using a Bootstrap alert, index.php will show a success alert or a negative alert depending on the input.

Creare una pagina index.php con un form (che richiama la stessa pagina) per l'inserimento di un indirizzo email.
Controllare che la mail passata in GET sia ben formata e contenga un punto e una chiocciola.
Usare un alert di Bootstrap (il componente HTML/CSS, non alert JS) per mostrare il messaggio di:
successo: la mail contiene un punto e una chiocciola;
errore: la mail NON contiene un punto e una chiocciola;
Milestone 1
Logica tutta dentro index.php, mostrare il messaggio di successo/errore dentro un alert di Bootstrap;
Milestone 2
Spostare la logica dentro functions.php (include);
BONUS
Milestone 3
invece di usare una classe statica per lo stile dell’alert, modificarla in base all’esito della funzione.
Milestone 4
invece di visualizzare il messaggio di success nella index.php, in caso di esito positivo effettuare un redirect ad una thankyou page
dove usiamo la session per mostrare anche l'indirizzo email con cui ci siamo "registrati"
