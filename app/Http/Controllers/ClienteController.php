<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Cidade;
use App\Http\Resources\ClienteResource;
use App\Http\Resources\CidadeResource;
Use Auth;
Use Validator;

class ClienteController extends Controller
{
    



    public function index(){
        //Pega todos clientes e retorna com paginacao
        //  $clientes = Cliente::paginate(15);
        // return ClienteResource::collection($clientes); 
       
        return ClienteResource::collection(Cliente::all()); //retorna todos
    }



     public function show($id)
    {
        //Get the cliente
        $cliente = Cliente::findOrfail($id);
        // Return a single cliente        
        return new ClienteResource($cliente);
    }




    public function store(Request $request)
    {

    	//Validator
    	$validator = Validator::make($request->all(), [
            'nome' => 'required|string|max:255',
            'email' => 'required|email',
            'endereco' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
            'cidade_id' => 'required|int',
            'plano_id' => 'required|int',
    	]);


    	if ($validator->fails()) {
    		return response()->json(['error'=>$validator->errors()], 401);
    	}



        $cliente = new Cliente;
		$cliente->cli_nome = $request->input('nome');
		$cliente->cli_email = $request->input('email');
		$cliente->cli_endereco = $request->input('endereco');     
		$cliente->cli_telefone = $request->input('telefone');   
		$cliente->cid_id = $request->input('cidade_id');   
		$cliente->plan_id = $request->input('plano_id'); 
        //$cliente->save();
        if($cliente->save()) {
            //return new ClienteResource($cliente);
            return response()->json(['success'=>$cliente], 200);
        } 
    }




     public function update(Request $request)
    {
        //NEEDS a hidden input with name "_method" and value "put"
 		$cliente = Cliente::findOrFail($request->input('id'));
        $cliente->cli_nome = $request->input('nome');
        $cliente->cli_email = $request->input('email');
        $cliente->cli_endereco = $request->input('endereco');     
        $cliente->cli_telefone = $request->input('telefone');   
        $cliente->cid_id = $request->input('cidade_id');   
        $cliente->plan_id = $request->input('plano_id');   

        if($cliente->save()) {
            return new ClienteResource($cliente);
        }  
    }



     public function destroy(Request $request)
    {    
    	//NEEDS a hidden input with name "_method" and value "delete"
        $cliente = Cliente::findOrFail($request->input('id'));
        if($cliente->delete()) {
            return new ClienteResource($cliente);
        } 
    }


}
