<?php

namespace dao\interface;

interface IImovelDAO {

    //Cadastrar
    public function cadastrarImovel($tipo_imovel, $id_proprietario, $endereco, $cidade, $estado, $CEP, $valor_aluguel, $area, $quartos, $banheiros, $vagas_garagem, $descricao);

    //Editar
    public function editarImovel($id, $tipo_imovel, $id_proprietario, $endereco, $cidade, $estado, $CEP, $valor_aluguel, $area, $quartos, $banheiros, $vagas_garagem, $descricao);

    //Excluir


    public function imovelExists($id);
}