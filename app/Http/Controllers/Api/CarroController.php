<?php

namespace App\Http\Controllers;


use App\Carro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CarroController extends Controller
{
    
    private $carro;
    
    
    public function __construct(Carro $carro)
    {
        
        $this->carro = $carro;
        
    }


    public function index()
    {
        
        return response()->json($this->carro->paginate(5));
        
    }
    
    
    public function show(carro $id)
    {
        
        $carro = ['data' => $id];
        return response()->json($carro);
        
    }
    
    
    public function store(Request $request)
    {
        
        try
        {
            
            $carro = $request->all();
            $this->carro->create($carro);

            return response()->json(['data' => ['message' => 'Carro adicionado com sucesso']], 200);
            
        }
        catch (Exception $e)
        {
            
            return response()->json(['data' => ['message' => $e->getMessage()]], $e->getCode());
            
        }
        
    }
    
    
    public function update(Request $request, $id)
    {
        
        try
        {
            
            $carroData = $request->all();
            $carro = $this->carro->find($id);
            $carro->update($carroData);
            
            return response()->json(['data' => ['message' => 'Carro alterado com sucesso']], 200);
            
        }
        catch (Exception $e)
        {
            
            return response()->json(['data' => ['message' => $e->getMessage()]], $e->getCode());
            
        }
        
    }
    
    
    public function delete(carro $id)
    {
        
        try
        {
            
            $id->delete();

            return response()->json(['data' => ['message' => 'Carro excluido com sucesso']], 200);
            
        }
        catch (Exception $e)
        {
            
            return response()->json(['data' => ['message' => $e->getMessage()]], $e->getCode());
            
        }
        
    }
    
}
