<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    private function articles(): array
{
    return [

        [
            'title' => 'La decisione più difficile della mia vita: ricominciare da zero a 40 anni',
            'slug' => 'ricominciare-da-zero-a-40-anni',
            'excerpt' => 'Lasciare una carriera stabile per inseguire una nuova direzione non è un atto di coraggio. È un atto di verità verso se stessi.',
            'image' => 'https://picsum.photos/600/400?random=21',
            'content' => 'Per molti anni ho svolto la professione di commercialista. Un percorso costruito con impegno, studio e responsabilità. Avevo stabilità, clienti, competenze riconosciute. Eppure, dentro di me cresceva una sensazione difficile da ignorare: non stavo più evolvendo.

Le giornate erano prevedibili, le sfide sempre più rare. Non era fatica, era assenza di stimoli.

Poi mi sono fatto una domanda che ha cambiato tutto: "È questa la versione migliore della mia vita professionale?"

La risposta è arrivata in silenzio, ma era chiarissima: no.

Così ho deciso di rimettermi in gioco. Tornare studente a 40 anni significa accettare di non sapere, di sbagliare, di sentirsi fuori posto. Ma significa anche tornare a crescere.

DEVolution nasce esattamente da qui: dalla scelta di non restare fermo.',
        ],

        [
            'title' => 'Non ho buttato via il mio passato: l’ho trasformato in un vantaggio',
            'slug' => 'trasformare-il-passato-in-un-vantaggio',
            'excerpt' => 'Cambiare carriera non significa cancellare chi sei stato. Significa usare ogni esperienza come leva.',
            'image' => 'https://picsum.photos/600/400?random=22',
            'content' => 'All’inizio pensavo di dover diventare una persona completamente nuova per entrare nel mondo dello sviluppo. Poi ho capito che stavo commettendo un errore.

Gli anni da commercialista mi avevano insegnato molto più di quanto credessi: pensiero analitico, gestione della complessità, precisione, responsabilità.

Competenze che nel mondo tech sono preziose.

Oggi non mi sento un ex commercialista che prova a fare il developer. Mi sento un professionista con una doppia prospettiva.

E spesso è proprio questa combinazione a generare il valore più grande.',
        ],

        [
            'title' => 'La paura di cambiare non sparisce mai. Impari solo a camminarci accanto.',
            'slug' => 'la-paura-di-cambiare',
            'excerpt' => 'Non esiste il momento perfetto per reinventarsi. Esiste solo il momento in cui scegli di provarci.',
            'image' => 'https://picsum.photos/600/400?random=23',
            'content' => 'Quando decidi di cambiare strada, la paura diventa una compagna costante. Paura di non essere abbastanza veloce, abbastanza giovane, abbastanza preparato.

Ma ho scoperto una cosa fondamentale: il coraggio non è assenza di paura. È movimento nonostante la paura.

Ogni nuova competenza acquisita è un piccolo mattone. Ogni errore corretto è una prova che sto andando nella direzione giusta.

La crescita, dopotutto, non è mai comoda.',
        ],

        [
            'title' => 'Tornare principiante è un atto di umiltà (e di libertà)',
            'slug' => 'tornare-principiante',
            'excerpt' => 'Quando smetti di proteggere il tuo ego, inizi davvero a imparare.',
            'image' => 'https://picsum.photos/600/400?random=24',
            'content' => 'Essere esperti è rassicurante. Essere principianti è destabilizzante.

Fare domande, non capire subito, commettere errori banali: tutto questo mette alla prova l’orgoglio personale.

Eppure è proprio lì che avviene la trasformazione.

Ho imparato che non c’è nulla di più potente di una mente aperta. Accettare di non sapere è il primo passo per costruire competenze autentiche.',
        ],

        [
            'title' => 'Il giorno in cui ho smesso di cercare scorciatoie',
            'slug' => 'smettere-di-cercare-scorciatoie',
            'excerpt' => 'Nel coding, come nella vita, le fondamenta contano più della velocità.',
            'image' => 'https://picsum.photos/600/400?random=25',
            'content' => 'All’inizio volevo imparare tutto e subito. Framework, librerie, strumenti avanzati.

Poi ho capito che stavo saltando un passaggio essenziale: le basi.

Scrivere codice comprensibile, capire davvero cosa succede dietro una funzione, ragionare prima di digitare.

Da quel momento il mio approccio è cambiato. Meno fretta, più profondità.',
        ],

        [
            'title' => 'Pensare da developer è prima di tutto un cambio di mentalità',
            'slug' => 'pensare-da-developer',
            'excerpt' => 'Non si tratta solo di scrivere codice, ma di imparare a vedere i problemi in modo diverso.',
            'image' => 'https://picsum.photos/600/400?random=26',
            'content' => 'Una delle trasformazioni più grandi non è stata tecnica, ma mentale.

Ho iniziato a scomporre problemi complessi in parti più piccole, a cercare soluzioni strutturate, a non arrendermi davanti ai blocchi.

Pensare da developer significa allenare la pazienza e la logica.

È un modo di osservare il mondo.',
        ],

        [
            'title' => 'Laravel e il momento in cui tutto ha iniziato ad avere una struttura',
            'slug' => 'laravel-struttura-e-chiarezza',
            'excerpt' => 'Quando ho scoperto l’architettura MVC, il caos ha lasciato spazio alla visione.',
            'image' => 'https://picsum.photos/600/400?random=27',
            'content' => 'Prima vedevo solo file sparsi. Con Laravel ho iniziato a vedere un sistema.

Rotte, controller, viste: ogni elemento aveva uno scopo preciso.

È stato uno spartiacque. Ho smesso di scrivere codice casuale e ho iniziato a progettare applicazioni.

E progettare significa pensare in grande.',
        ],

        [
            'title' => 'Non è mai troppo tardi per diventare ciò che avresti voluto essere',
            'slug' => 'non-e-mai-troppo-tardi',
            'excerpt' => 'L’età non è un limite. È solo una narrativa che spesso scegliamo di credere.',
            'image' => 'https://picsum.photos/600/400?random=28',
            'content' => 'Uno dei falsi miti più diffusi nel mondo tech è che si debba iniziare giovanissimi.

La verità è diversa.

La maturità porta disciplina, visione, capacità decisionale.

Non parto da zero: parto da tutta la mia esperienza.',
        ],

    ];
}


    public function home()
    {
        $articles = array_slice($this->articles(), 0, 3);
        return view('home', compact('articles'));
    }

    public function index()
    {
        $articles = $this->articles();
        return view('articles.index', compact('articles'));
    }

    public function show(string $slug)
    {
        $article = collect($this->articles())->firstWhere('slug', $slug);

        abort_if(!$article, 404);

        return view('articles.show', compact('article'));
    }

    public function contact()
{

    return view('contact'); // GET
}

public function contactSubmit(Request $request)
{
    $user= $request->input('user');
    $email= $request->input('email');
    $message= $request->input('message');

    try{
        Mail::to($email)->send(new ContactMail());
    } catch(Exception $e){
        return redirect()->route('home')->with('emailError', 'Si è verificato un errore durante l\'invio del messaggio. Riprova più tardi.');
    }
    return redirect (route('home'))->with('emailSent', 'Messaggio inviato con successo!');
 
}
}