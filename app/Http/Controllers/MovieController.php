<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// impemendo il database creato in model
use App\Models\Movie;

//controller creato da me per inserire tutta la logica al posto delle view
//grazie al models ho collegato laravell al mio server privato
class MovieController extends Controller
{
    //come in una classe php creo una funzione che contiene la logica, da poter riutilizzare ogni volta che richiamo questo controller
    public function index() {

        // seleziono tutti i dati nel database in phpadmin che ho collegato tramite modal
        $movies = Movie::all();

        // ritorno la pagina della vista + l'array con i dati del database
        //poichè posso nominarr allo stesso modo chiave e valore uso scorciatoia compact('nome chiave/valore')
        return view('movies', compact('movies'));
    }
}
