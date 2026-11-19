<?php

interface RepositoryInterface {

    public function criar($cliente);

    public function cyberware();

    public function buscarPorId($id);

    public function atualizar($id, $cliente);

    public function excluir($id);

}