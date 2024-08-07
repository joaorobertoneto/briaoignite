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
            'quantidade' => $this->request->getVar('quantidade')
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

        return view('/editar', $data);
    }
    public function update($id)
    {
        $model = new FarmaciaModel();

        $data = [
            'nome' => $this->request->getPost('nome'),
            'laboratorio' => $this->request->getPost('laboratorio'),
            'preco' => $this->request->getPost('preco'),
            'quantidade' => $this->request->getPost('quantidade'),
        ];

        $model->update($id, $data);

        return redirect()->to('/showForm')->with('success', 'Remédio atualizado com sucesso.');
    }
    public function delete($id)
    {
        $my_model = new FarmaciaModel();
        $my_model->delete($id);

        return redirect()->to('/showForm');
    }
    public function expensive(): string
    {
        $my_model = new FarmaciaModel();
        $dados['produtos'] = $my_model->getProdutoExpensive();

        return view('expensive', $dados);
    }
    public function mostqtd(): string
    {
        $my_model = new FarmaciaModel();
        $dados['produtos'] = $my_model->getProdutoQuant();

        return view('most_quantity', $dados);
    }

    public function search(): string
    {
        $my_model = new FarmaciaModel();
        $nome = $this->request->getVar('nome');
        $dados['produtos'] = $my_model->searchProdutosByName($nome);

        return view('showForm', $dados);
    }

}
