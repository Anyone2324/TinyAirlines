<?php

namespace App\Http\Controllers;

use App\ticket;
use Illuminate\Http\Request;

class control extends Controller
{
    public function landing(){
        return view('landing');
    }
    public function container(){
        return view('container');
    }
    public function about(){
        return view('about');
    }
    public function return_id($id){
        return $id;
    }
    public function search(){
        echo "Ticket model";
        echo "<br>";
        $ticket = new ticket();
        $ticket->from = request()->input('from');
        $ticket->where = request()->input('where');
        $ticket->price = 100;
        echo $ticket->from;
        echo "<br>";
        echo $ticket->where;
        echo "<br>";
        echo $ticket->price;
        echo "<br>";
        return view("template.template_test", ["ticket" => $ticket, "arr" => [$ticket->from, $ticket->where, $ticket->price]]);
    }
}
