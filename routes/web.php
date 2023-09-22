<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        "arguments" => [
            [
                "name" => "HTML: HyperText Markup Language",
                "description" => "HTML è il linguaggio di markup per la creazione di pagine web. Utilizza tag per strutturare il contenuto. I browser web lo interpretano per visualizzare le pagine.",
                "img" => "https://play-lh.googleusercontent.com/RslBy1o2NEBYUdRjQtUqLbN-ZM2hpks1mHPMiHMrpAuLqxeBPcFSAjo65nQHbTA53YYn=w240-h480-rw",
                "route" => "1"
            ],
            [
                "name" => "CSS: Cascading Style Sheets",
                "description" => "CSS è un linguaggio utilizzato per definire lo stile e la formattazione di pagine web. Attraverso regole di stile, specifica come gli elementi HTML dovrebbero essere visualizzati sullo schermo.",
                "img" => "https://play-lh.googleusercontent.com/RTAZb9E639F4JBcuBRTPEk9_92I-kaKgBMw4LFxTGhdCQeqWukXh74rTngbQpBVGxqo=w240-h480-rw",
                "route" => "2"
            ],
            [
                "name" => "Bootstrap",
                "description" => "Bootstrap: Framework front-end per lo sviluppo web rapido e responsive.",
                "img" => "https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-shadow.png",
                "route" => "3"
            ],
            [
                "name" => "SASS",
                "description" => "Sass: Linguaggio di estensione CSS per semplificare e migliorare la scrittura di fogli di stile.",
                "img" => "https://cdn.mos.cms.futurecdn.net/TTgVoW3Q5WPkMBHi2VD59Q-970-80.jpg.webp",
                "route" => "4"
            ],
            [
                "name" => "Javascript",
                "description" => "JavaScript: Linguaggio di programmazione web per rendere le pagine interattive e dinamiche nei browser.",
                "img" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/512px-Unofficial_JavaScript_logo_2.svg.png",
                "route" => "5"
            ],
            [
                "name" => "Vue.js",
                "description" => "Vue.js: Libreria JavaScript per la creazione di interfacce utente reattive e componentizzate nelle applicazioni web.",
                "img" => "https://i2.wp.com/www.onasus.com/wp-content/uploads/2018/04/vuejs-javascript-framework.jpg?fit=544%2C550&ssl=1",
                "route" => "6"
            ],
            [
                "name" => "PHP",
                "description" => "PHP: Linguaggio di scripting ampiamente utilizzato per lo sviluppo web server-side.",
                "img" => "https://images.sftcdn.net/images/t_app-icon-s/p/f8f40004-96d5-11e6-88c2-00163ec9f5fa/1688065098/php-logo.jpg",
                "route" => "7"
            ],
            [
                "name" => "MySql",
                "description" => "PHP: Linguaggio di scripting ampiamente utilizzato per lo sviluppo web server-side.",
                "img" => "https://styles.redditmedia.com/t5_2qm6k/styles/communityIcon_dhjr6guc03x51.png?width=256&s=3e825b7205c7f497d4695028e358d26ee359f84b",
                "route" => "8"
            ],
            [
                "name" => "Laravel",
                "description" => "Laravel: Framework PHP open-source per lo sviluppo di applicazioni web scalabili e robuste con un'elevata produttività.",
                "img" => "https://customcodefactory.com/wp-content/uploads/2019/11/Laravel-logo-300x300.jpg",
                "route" => "9"
            ],
        ]
    ];

    return view('home', $data);
});

Route::get('1', function() {
    $data = [
        "html" => [
            "name" => "HTML: HyperText Markup Language",
            "description" => "HTML (HyperText Markup Language) è un linguaggio utilizzato per la creazione e la strutturazione di pagine web.  HTML è fondamentalmente basato su tag, e questi tag sono ciò che definisce la struttura e il contenuto delle pagine web.

                HTML è un linguaggio utilizzato per definire la struttura e il contenuto di una pagina web. Con HTML, puoi organizzare il testo e i media sulla pagina in modo logico e strutturato. Questo linguaggio ti consente di includere testo, immagini, collegamenti e altri elementi all'interno di una pagina web in modo che possano essere visualizzati e interagiti dagli utenti attraverso un browser web.
                
                HTML è progettato per essere flessibile e adattabile a una vasta gamma di scopi. Puoi utilizzare HTML per creare pagine web semplici con testo e immagini o pagine web più complesse con tabelle, formulari, video e audio. Inoltre, HTML fornisce anche elementi semantici che consentono di comunicare il significato del contenuto, migliorando l'accessibilità e l'indicizzazione delle pagine web da parte dei motori di ricerca.
                
                In sintesi, HTML è il linguaggio di base che consente di creare il tessuto di Internet, strutturando e presentando le informazioni in modo coerente e accessibile. È il fondamento di quasi tutte le pagine web presenti su Internet.",
            "img" => "https://play-lh.googleusercontent.com/RslBy1o2NEBYUdRjQtUqLbN-ZM2hpks1mHPMiHMrpAuLqxeBPcFSAjo65nQHbTA53YYn=w240-h480-rw",
        ]

    ];
    return view('languageHtml', $data );
});

Route::get('2', function() {
    $data = [
        "css" => [
            "name" => "CSS: Cascading Style Sheets",

            "description" => "CSS (Cascading Style Sheets) è un linguaggio utilizzato per definire la presentazione e la formattazione del contenuto in una pagina web. A differenza di HTML, CSS non contiene tag o elementi, ma fornisce istruzioni per controllare l'aspetto degli elementi HTML presenti in una pagina web.

                CSS è un linguaggio di stile utilizzato per definire l'aspetto visivo di una pagina web. Attraverso CSS, è possibile specificare proprietà come colori, tipi di carattere, margini, padding, allineamento, dimensioni e molti altri attributi che influenzano l'aspetto dei contenuti HTML su una pagina.
                
                CSS consente di separare la struttura del contenuto HTML dalla sua presentazione. Questo significa che puoi definire uno stile di formattazione uniforme per tutti gli elementi HTML di un sito web senza dover modificare ogni singolo elemento HTML. Inoltre, CSS supporta la cascata, il che significa che puoi definire stili di base e sovrascriverli o estenderli per elementi specifici.
                
                Ad esempio, puoi definire che tutti i paragrafi sul tuo sito web siano di colore blu e con un certo margine, ma poi puoi specificare che un paragrafo particolare dovrebbe essere di colore rosso e con un margine diverso, se lo desideri.
                
                CSS è ampiamente utilizzato nei siti web moderni per garantire che il contenuto sia presentato in modo attraente, leggibile e coerente su diverse piattaforme e dispositivi. È uno strumento essenziale per i designer e gli sviluppatori web per controllare l'aspetto visivo delle pagine web.",

            "img" => "https://play-lh.googleusercontent.com/RTAZb9E639F4JBcuBRTPEk9_92I-kaKgBMw4LFxTGhdCQeqWukXh74rTngbQpBVGxqo=w240-h480-rw",
        ]

    ];
    return view('languageCss', $data );
});

Route::get('3', function() {
    $data = [
        "bootstrap" => [
            "name" => "Bootstrap",
            "description" => "Bootstrap è un framework front-end che fornisce un set di strumenti e risorse per la creazione di pagine web responsive e interattive.

                Bootstrap è un framework di sviluppo web che offre un insieme di risorse e convenzioni per migliorare l'aspetto e le funzionalità di un sito web. È progettato per semplificare il processo di progettazione e sviluppo di pagine web, consentendo una rapida creazione di layout responsive, componenti interattivi e stili visivi coerenti.
                
                Una delle caratteristiche principali di Bootstrap è la sua griglia flessibile. Questa griglia è una struttura di layout che consente di organizzare il contenuto della pagina in righe e colonne, garantendo che il sito sia ben visualizzato su dispositivi di diverse dimensioni, come computer desktop, tablet e smartphone.
                
                Bootstrap offre anche una vasta gamma di componenti predefiniti, come modali, barre di navigazione, caroselli e formulari, che possono essere facilmente personalizzati e incorporati nelle pagine web. Questi componenti aiutano a migliorare l'interazione dell'utente e accelerano lo sviluppo.
                
                Inoltre, Bootstrap fornisce uno stile di base che può essere utilizzato come punto di partenza per il design del sito. Puoi personalizzare l'aspetto utilizzando variabili e classi CSS definite da Bootstrap o aggiungendo le tue regole di stile personalizzate.
                
                Uno degli obiettivi principali di Bootstrap è garantire la compatibilità tra browser e dispositivi, riducendo al minimo la necessità di scrivere codice CSS e JavaScript personalizzato per gestire la responsività e la coerenza del design. È ampiamente utilizzato nella comunità di sviluppatori web per accelerare il processo di sviluppo e migliorare la qualità del design delle pagine web.",
            "img" => "https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-shadow.png",
        ]

    ];
    return view('bootstrap', $data );
});

Route::get('4', function() {
    $data = [
        "sass" => [
            "name" => "SASS",
            "description" => "Sass, abbreviazione di Syntactically Awesome Style Sheets, è un pre-processore CSS che offre funzionalità avanzate per la scrittura di fogli di stile.

                Sass è un pre-processore CSS che migliora la gestione e la creazione di fogli di stile per pagine web. Funziona come un'estensione di CSS, consentendo ai progettisti e agli sviluppatori di scrivere codice più pulito, organizzato ed efficiente.
                
                Una delle caratteristiche principali di Sass è l'uso delle variabili. Con Sass, è possibile dichiarare variabili per immagazzinare valori come colori, dimensioni dei caratteri e margini. Questo semplifica la coerenza del design, consentendo di aggiornare facilmente valori comuni in un unico punto.
                
                Sass offre anche la possibilità di annidare le regole CSS. Questo significa che è possibile scrivere stili più chiari e strutturati, organizzando le regole CSS in blocchi di codice indentati, invece di dover ripetere selettori lungamente ogni volta.
                
                Un'altra funzionalità chiave di Sass è l'utilizzo dei mixin. I mixin sono blocchi di stile riutilizzabili che possono essere inclusi in diverse parti del foglio di stile. Questo promuove la modularità e la manutenibilità del codice.
                
                Sass supporta l'ereditarietà dei selettori, consentendo di definire uno stile di base e quindi estenderlo o modificarlo per specifici elementi o situazioni.
                
                Infine, Sass offre la possibilità di creare funzioni personalizzate, che consentono di eseguire calcoli e manipolazioni sui valori delle proprietà CSS.
                
                Dopo aver scritto il codice Sass, è necessario compilare il tutto in un file CSS utilizzabile da un browser web. Questo processo di compilazione trasforma il codice Sass in CSS valido e può essere eseguito automaticamente tramite strumenti o framework appositi.
                
                In breve, Sass è uno strumento che semplifica la scrittura di fogli di stile CSS, migliorando la leggibilità, la manutenibilità e la flessibilità del codice. È ampiamente utilizzato nella comunità di sviluppatori web per creare stili più avanzati e gestibili per le pagine web.",
            "img" => "https://cdn.mos.cms.futurecdn.net/TTgVoW3Q5WPkMBHi2VD59Q-970-80.jpg.webp",
        ]

    ];
    return view('sass', $data );
});

Route::get('5', function() {
    $data = [
        "js" => [
            "name" => "Javascript",
            "description" => "JavaScript è un linguaggio di programmazione interpretato utilizzato principalmente per aggiungere interattività e dinamicità alle pagine web.

                JavaScript è un linguaggio di programmazione utilizzato per creare comportamenti interattivi all'interno delle pagine web. È uno strumento essenziale per arricchire l'esperienza dell'utente sul web.
                
                JavaScript consente di manipolare il contenuto HTML e il CSS di una pagina web in tempo reale. Puoi utilizzarlo per gestire eventi come clic sui pulsanti, movimenti del mouse e tasti premuti sulla tastiera, e rispondere a tali eventi con azioni specifiche.
                
                Questo linguaggio ti permette di creare variabili per memorizzare dati, oggetti per organizzare dati complessi e funzioni per eseguire operazioni specifiche. Puoi utilizzare condizioni e cicli per controllare il flusso del programma e fare decisioni basate su dati o input dell'utente.
                
                JavaScript offre accesso al Document Object Model (DOM), una rappresentazione gerarchica della struttura di una pagina web. Puoi utilizzare JavaScript per selezionare elementi HTML, modificarli, aggiungerne di nuovi o eliminarli dal DOM. Questa capacità è fondamentale per creare pagine web dinamiche.
                
                È possibile effettuare richieste di rete utilizzando JavaScript, consentendo di recuperare dati da server esterni e aggiornare il contenuto della pagina senza dover ricaricare l'intera pagina.
                
                Inoltre, JavaScript è ampiamente utilizzato nello sviluppo di applicazioni web avanzate, inclusi giochi, applicazioni di chat in tempo reale, interfacce utente complesse e molto altro.
                
                In sintesi, JavaScript è un linguaggio di programmazione versatile che consente di aggiungere interattività, dinamicità e funzionalità avanzate alle pagine web. È una parte fondamentale dello sviluppo web moderno e gioca un ruolo cruciale nell'arricchire l'esperienza dell'utente online.",
            "img" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/512px-Unofficial_JavaScript_logo_2.svg.png",
        ]

    ];
    return view('javascript', $data );
});

Route::get('6', function() {
    $data = [
        "vue" => [
            "name" => "Vue.js",
            "description" => "Vue.js è un framework JavaScript utilizzato per creare interfacce utente reattive e dinamiche all'interno delle applicazioni web.

                Vue.js è un framework JavaScript che consente di creare interfacce utente interattive e dinamiche all'interno delle applicazioni web. È progettato per semplificare lo sviluppo di componenti riutilizzabili, che possono essere aggiunti alle pagine web per gestire la visualizzazione e la logica dell'interfaccia utente.
                
                Una delle caratteristiche principali di Vue.js è la sua reattività. Questo significa che Vue.js monitora automaticamente i dati e le variabili all'interno delle tue applicazioni e si assicura che qualsiasi cambiamento nei dati venga riflesso immediatamente nell'interfaccia utente. Questo rende possibile la creazione di applicazioni web in tempo reale, dove le modifiche ai dati vengono visualizzate istantaneamente senza dover ricaricare la pagina.
                
                Vue.js supporta la creazione di componenti personalizzati, che sono blocchi di codice autonomi e riutilizzabili per la creazione di parti specifiche dell'interfaccia utente. Questi componenti possono essere annidati l'uno nell'altro per creare strutture complesse e interattive.
                
                Vue.js offre anche una serie di direttive, che sono attributi speciali che possono essere aggiunti agli elementi HTML per collegarli ai dati e alle funzionalità di Vue.js. Ad esempio, la direttiva v-model può essere utilizzata per collegare automaticamente un elemento di input HTML a una variabile di dati Vue.js, consentendo agli utenti di inserire dati in modo interattivo.
                
                Il framework Vue.js è altamente flessibile e può essere utilizzato in varie modalità, compresa la creazione di applicazioni a pagina singola (SPA), widget interattivi o componenti integrati in applicazioni esistenti.
                
                Inoltre, Vue.js è noto per la sua facilità di apprendimento e l'ampia documentazione disponibile, il che lo rende accessibile sia ai principianti che agli sviluppatori esperti.
                
                In sintesi, Vue.js è un framework JavaScript che consente di creare interfacce utente reattive e dinamiche all'interno delle applicazioni web, grazie alla sua reattività, ai componenti personalizzati e alle direttive speciali. È ampiamente utilizzato nella comunità di sviluppatori web per la creazione di applicazioni web moderne e interattive.",
            "img" => "https://i2.wp.com/www.onasus.com/wp-content/uploads/2018/04/vuejs-javascript-framework.jpg?fit=544%2C550&ssl=1",
        ]

    ];
    return view('vuejs', $data );
});

Route::get('7', function() {
    $data = [
        "backendphp" => [
            "name" => "PHP",
            "description" => "PHP, acronimo di PHP: Hypertext Preprocessor, è un linguaggio di scripting ampiamente utilizzato per lo sviluppo web lato server.

                PHP è un linguaggio di scripting utilizzato principalmente per sviluppare applicazioni web dinamiche. Funziona eseguendo codice sul server web e generando pagine web in base alle richieste degli utenti.
                
                Una delle caratteristiche fondamentali di PHP è la sua capacità di interagire con le basi di dati. PHP può connettersi a database come MySQL, PostgreSQL e molti altri, consentendo agli sviluppatori di memorizzare, recuperare e manipolare dati in modo efficiente.
                
                PHP è spesso utilizzato per creare pagine web dinamiche che possono cambiare il loro contenuto in base a variabili, dati dell'utente o input da un modulo web. Questo lo rende adatto per la creazione di applicazioni web complesse come forum, sistemi di gestione dei contenuti (CMS) e negozi online.
                
                Inoltre, PHP può gestire cookie e sessioni utente, consentendo la creazione di applicazioni web interattive che tengono traccia dello stato dell'utente e forniscono un'esperienza personalizzata.
                
                PHP è un linguaggio di scripting versatile e può essere utilizzato per molte altre attività oltre allo sviluppo web, come la generazione di file, la manipolazione di stringhe, la connessione a servizi web esterni e altro ancora.
                
                È importante notare che PHP è integrato direttamente all'interno del codice HTML delle pagine web, il che consente di incorporare facilmente il codice PHP all'interno di un documento HTML. Ciò significa che PHP può essere utilizzato per generare dinamicamente il contenuto HTML, inclusi testo, immagini e altri elementi, prima che la pagina venga inviata al browser dell'utente.
                
                In sintesi, PHP è un linguaggio di scripting utilizzato per sviluppare applicazioni web dinamiche e interattive. È ampiamente utilizzato nel web development lato server e offre un'ampia gamma di funzionalità per la gestione dei dati, la generazione di contenuti dinamici e l'interazione con le basi di dati.",
            "img" => "https://images.sftcdn.net/images/t_app-icon-s/p/f8f40004-96d5-11e6-88c2-00163ec9f5fa/1688065098/php-logo.jpg",
        ]

    ];
    return view('backendphp', $data );
});

Route::get('8', function() {
    $data = [
        "dbmanager" => [
            "name" => "MySql",
            "description" => "MySQL è un sistema di gestione di database relazionali (RDBMS) ampiamente utilizzato per l'archiviazione, la gestione e l'organizzazione dei dati.

                MySQL è un sistema di gestione di database relazionali progettato per archiviare, organizzare e recuperare dati in modo strutturato ed efficiente. È uno strumento fondamentale per la gestione dei dati in applicazioni web, applicazioni aziendali e molti altri contesti.
                
                MySQL consente di creare e gestire basi di dati, che fungono da contenitori per organizzare e memorizzare dati in tabelle. Le tabelle sono composte da righe e colonne, e ogni colonna rappresenta un campo di dati specifico, mentre ogni riga rappresenta una voce di dati.
                
                Uno dei punti di forza di MySQL è la sua capacità di supportare linguaggio SQL (Structured Query Language), che consente di definire, manipolare e interrogare i dati. SQL offre comandi per creare tabelle, inserire dati, aggiornare dati, recuperare dati e altro ancora.
                
                MySQL offre anche funzionalità avanzate come l'indicizzazione dei dati, che accelera le ricerche e le query complesse, e le transazioni, che consentono di garantire l'integrità dei dati in situazioni in cui più utenti accedono simultaneamente al database.
                
                Inoltre, MySQL è scalabile e può gestire enormi quantità di dati, rendendolo adatto sia per piccole applicazioni che per sistemi aziendali complessi.
                
                Un'altra caratteristica importante è la possibilità di definire relazioni tra le tabelle, che consentono di collegare dati da tabelle diverse e creare strutture di dati complesse.
                
                MySQL è open source, il che significa che è disponibile gratuitamente e offre un'ampia comunità di sviluppatori e supporto. È ampiamente utilizzato in tutto il mondo ed è una delle scelte più popolari per la gestione dei database relazionali nell'ambito dello sviluppo di applicazioni web e di software.",
            "img" => "https://styles.redditmedia.com/t5_2qm6k/styles/communityIcon_dhjr6guc03x51.png?width=256&s=3e825b7205c7f497d4695028e358d26ee359f84b",
        ]

    ];
    return view('dbmanager', $data );
});

Route::get('9', function() {
    $data = [
        "laravel" => [
            "name" => "Laravel",
            "description" => "Laravel è un framework di sviluppo web PHP che offre un ambiente robusto e organizzato per la creazione di applicazioni web moderne e complesse.

                Laravel è un framework di sviluppo web che semplifica la creazione di applicazioni web scalabili e performanti. È scritto in PHP, un linguaggio di scripting ampiamente utilizzato per lo sviluppo web, ed è progettato per migliorare la produttività degli sviluppatori.
                
                Una delle caratteristiche chiave di Laravel è la sua architettura MVC (Model-View-Controller), che organizza il codice in tre componenti distinti:
                
                Model: Rappresenta la logica di business dell'applicazione e gestisce l'accesso ai dati del database.
                View: Si occupa della presentazione dei dati all'utente finale e gestisce l'interfaccia utente.
                Controller: Gestisce le richieste dell'utente, coordina le interazioni tra Model e View, e controlla il flusso dell'applicazione.
                Laravel offre una vasta gamma di funzionalità e componenti predefiniti che semplificano la gestione di attività comuni nello sviluppo web. Alcune delle caratteristiche più importanti di Laravel includono:
                
                Routing: Laravel offre un sistema di routing flessibile per gestire le richieste HTTP e indirizzare le richieste agli appropriate Controller.
                
                Eloquent ORM: Laravel include un sistema ORM (Object-Relational Mapping) chiamato Eloquent, che semplifica l'interazione con il database e permette di definire relazioni tra i dati in modo intuitivo.
                
                Blade Templating Engine: Laravel utilizza il motore di template Blade, che consente di creare facilmente layout e visualizzazioni reattive e dinamiche.
                
                Middleware: Il middleware di Laravel offre un modo per gestire le richieste HTTP prima che raggiungano il Controller, consentendo ad esempio l'autenticazione, la gestione delle sessioni e la registrazione delle richieste.
                
                Autenticazione e Autorizzazione: Laravel offre un sistema di autenticazione completo e personalizzabile per gli utenti, nonché un meccanismo di autorizzazione basato su ruoli.
                
                Artisan Console: Laravel include un'interfaccia da riga di comando chiamata Artisan che semplifica attività comuni come la creazione di migrazioni del database, la generazione di controller e la gestione delle code.
                
                Sicurezza: Laravel integra funzionalità di sicurezza avanzate, tra cui la protezione da attacchi CSRF (Cross-Site Request Forgery) e XSS (Cross-Site Scripting).
                
                Laravel è noto per la sua documentazione dettagliata, una comunità attiva e un ecosistema di pacchetti (packages) che estendono ulteriormente le sue funzionalità. È ampiamente utilizzato nella creazione di applicazioni web complesse e offre uno standard elevato di qualità e manutenibilità del codice.",
            "img" => "https://customcodefactory.com/wp-content/uploads/2019/11/Laravel-logo-300x300.jpg",
        ]

    ];
    return view('belaravel', $data );
});













