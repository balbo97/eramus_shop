1. Aggiunta di surname e birthdate al modello User e al form di registrazione:
 -Aggiunti i campi 'surname' e 'birthdate' al modello User e al form di registrazione dell'utente.  -Aggiornate le regole di validazione e la creazione dell'utente.
2. Aggiunta della gestione degli utenti e dei prodotti al pannello di amministrazione:
 -Aggiunta della gestione degli utenti e dei prodotti al pannello di amministrazione con rotte, controller e viste per la creazione e la visualizzazione degli utenti e dei prodotti.
3. Implementazione della funzionalità di creazione e gestione dei prodotti:
 -Aggiunta la possibilità di creare e gestire prodotti nel pannello di amministrazione. Questo include la visualizzazione, la modifica e l'eliminazione dei prodotti, nonché la creazione di nuovi prodotti con una relazione many-to-many con i tipi.
4. Aggiornamento del controller NewPasswordController per semplificare la regola di validazione della password:
 -Aggiornata la regola di validazione della password nel controller NewPasswordController per richiedere solo la password, confermata e che soddisfi i requisiti di complessità predefiniti.





Progetto Web di Prova 
Questo progetto è un'applicazione web sviluppata come parte di una prova. 

Tecnologie Utilizzate
Backend: Laravel (linguaggio di programmazione PHP)
Frontend: Vue.js
Database: MySQL
Framework CSS: Bootstrap
Sicurezza: Autenticazione delle sessioni Laravel, middleware per la gestione degli accessi
Struttura dell'Applicazione

L'applicazione è divisa in tre principali maschere:

- Maschera di Login: L'utente accede all'applicazione tramite un'interfaccia di login. Le credenziali vengono verificate con i dati nel database e, in caso di errore, viene visualizzato un alert appropriato.
- Maschera di Gestione degli Utenti: Dopo il login, l'utente ha accesso a un'interfaccia che consente la gestione completa degli utenti. È possibile visualizzare gli utenti attraverso una tabella e inserire nuovi utenti tramite un piccolo modulo.
- Maschera di Gestione dell'Inventario: Questa maschera permette la gestione dell'inventario del negozio. Gli utenti possono inserire, modificare ed eliminare i prodotti dall'inventario. I tipi di prodotti supportati sono Buste, Carta e Toner.
Sicurezza dell'Applicativo

Per garantire la sicurezza dell'applicativo, viene utilizzata l'autenticazione delle sessioni di Laravel. Al momento del login, viene generato un token da backend per autenticare tutte le chiamate successive. Senza questo token, l'applicativo non consente l'accesso a nessuna informazione sensibile.
