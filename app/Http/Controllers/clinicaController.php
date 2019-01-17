<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Agenda;

class clinicaController extends Controller
{
    //
    private $base_url ="http://clinic5.feegow.com.br/components/public/api/";
    private $token ="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOiIxNy0wOC0yMDE4IiwibGljZW5zZUlEIjoiMTA1In0.UnUQPWYchqzASfDpVUVyQY0BBW50tSQQfVilVuvFG38";
    
    public function index()
    {
        $data = $this->GetApiData('specialties/list');
        $data2 = $this->getOrigens();
        return view('welcome')->with(['especialidades'=> $data, 'origem'=> $data2]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $agenda = new Agenda();
        $agenda->fill($input);
        $agenda->date_time = date("Y-m-d H:i:s");

        try {
            $agenda->save();
            return ['code'=> 0 , 'msg'=>'Seus dados foram salvos com sucesso!', 'obj'=>$agenda];

        } catch (\Exception $e) {
            return ['code'=> 1 , 'msg'=>'houve um erro ao salvar seus dados!\n'.$e, 'obj'=>$agenda];
        }
        
    }
    
    public function getProfissionais($id)
    {
        try {
            $data = $this->GetApiData('professional/list?especialidade_id='.$id);
            return response()->json($data);
        } catch (\Exception $e) {
            return [];
        }
    }

    public function getOrigens()
    {
        $data = $this->GetApiData('patient/list-sources');
        return $data;
    }

    public function GetApiData($caminho)
    {
        $client = new Client();
        $response = $client->request('GET', $this->base_url.$caminho,[
            'headers' => [
                'Host' => 'api.feegow.com.br',
                'Content-Type'=> 'application/json',
                'x-access-token'=> $this->token,
            ]]);
        $data = json_decode($response->getBody(),true);
        
        return $data['content'];
    }
    
}
