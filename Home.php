<?php

namespace App\Controllers;
use App\Models\FarmaciaModel;
class Home extends BaseController
{
    public function index(): string
    {
        
        return view('form');
    }
    public function receba()
    {
        $data = [
            'nome' => $this->request->getVar('nome'),
            'laboratorio' => $this->request->getVar('laboratorio'),
            'preco' => $this->request->getVar('preco'),
            'descricao' => $this->request->getVar('descricao')
        ];
        
        //print_r($data);

        $my_model = new FarmaciaModel();
        $my_model->insert($data);

        return redirect()->to('/showForm');

        //return view('view_formulario',$data);
    }   

    public function showForm(): string
    {    $my_model = new FarmaciaModel();
        $dados['resultado'] = $my_model->findAll();
        return view ('/showForm',$dados);
    }
 public function editar($id)
    {
        $model = new FarmaciaModel();
        $data['produto'] = $model->find($id);

        if (!$data['produto']) {
            return redirect()->to('/produtos')->with('error', 'Remédio não encontrado.');
        }

        return view('/edit', $data);
    }

}
