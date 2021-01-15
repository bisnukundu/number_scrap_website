<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class scrap extends Controller
{
    // For first method 
    public $prefijo_movil = [];
    public $prefijo_movil_num = [];
    public $prefijo_index = [];
    public $prefijo_index_num = [];
    public $all_data = [];
    // For withparam method 
    public $params_data = [];
    public $params_data_num = [];
    public $final_num = [];

    public function first(Request $request)
    {
        $client = new Client(HttpClient::create(['timeout' => 60]));
        $data = $client->request("GET", "https://www.numerosdetelefono.es/");
        // For Prefijo-Movil number and name
        $data->filter(".prefijo-movil")->each(function ($d) {
            array_push($this->prefijo_movil, $d->text());
        });
        // For Prefijo-Movil only number 
        $data->filter(".prefijo-movil .textoVerde")->each(function ($d) {
            array_push($this->prefijo_movil_num, $d->text());
        });
        // For Prefijo-Index number and name
        $data->filter(".prefijo-index")->each(function ($d) {
            array_push($this->prefijo_index, $d->text());
        });
        // For Prefijo-Index only number;
        $data->filter(".prefijo-index .textoVerde")->each(function ($d) {
            array_push($this->prefijo_index_num, $d->text());
        });
        $this->all_data["prefijo_index"] = $this->prefijo_index;
        $this->all_data["prefijo_index_num"] = $this->prefijo_index_num;
        $this->all_data["prefijo_movil"] = $this->prefijo_movil;
        $this->all_data["prefijo_movil_num"] = $this->prefijo_movil_num;

        return view('home', ["data" => $this->all_data]);
    }
    public function withparam(Request $request, $id = '', $idd = '', $idd3 = '', $idd4 = '')
    {
        //  dd($id,$idd,$idd3,$idd4);

        $client = new Client(HttpClient::create(['timeout' => 60]));
        $data = $client->request("GET", "https://www.numerosdetelefono.es/" . $id . $idd . $idd3 . $idd4);
        // For Prefijo-Index number and name
        $data->filter(".prefijo-intermedio")->each(function ($d) {
            array_push($this->params_data, $d->text());
        });
        // For Prefijo-Index only number; 
        $data->filter(".prefijo-intermedio .textoVerde")->each(function ($d) {
            array_push($this->params_data_num, $d->text());
        });
        // For Final number; 
        $data->filter(".datoficha")->each(function ($d) {
            array_push($this->final_num,$d->text());
        });
        $this->all_data["final_number"]=$this->final_num;
        $this->all_data["params_num"] = $this->params_data;
        $this->all_data["params_num_only"] = $this->params_data_num;
        return view("withparam", ['data' => $this->all_data]);
    }
}
