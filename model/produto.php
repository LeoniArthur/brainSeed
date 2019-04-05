<?php


class produto
{

    protected $nome;
    protected $descricao;
    protected $valor_compra;
    protected $valor_venda;
    protected $imagem;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getValorCompra()
    {
        return $this->valor_compra;
    }

    /**
     * @param mixed $valor_compra
     */
    public function setValorCompra($valor_compra)
    {
        $this->valor_compra = $valor_compra;
    }

    /**
     * @return mixed
     */
    public function getValorVenda()
    {
        return $this->valor_venda;
    }

    /**
     * @param mixed $valor_venda
     */
    public function setValorVenda($valor_venda)
    {
        $this->valor_venda = $valor_venda;
    }

    /**
     * @return mixed
     */
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * @param mixed $imagem
     */
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }


}