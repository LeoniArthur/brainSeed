
<?php


class cliente
{	
	protected $cnpj;
    protected $razao;   
    protected $cep;
    protected $endereço;
    protected $numero;
    protected $bairro;
    protected $complemento;
    protected $cidade;
    protected $ramo;
    protected $telefone;   
    protected $email;
    protected $uf; 
	
	
    /**
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param string $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    /**
     * @return string
     */
    public function getRazao()
    {
        return $this->razao;
    }

    /**
     * @param string $razao
     */
    public function setRazao($razao)
    {
        $this->razao = $razao;
    }


    /**
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param string $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return string
     */
    public function getEndereço()
    {
        return $this->endereço;
    }

    /**
     * @param string $endereço
     */
    public function setEndereço($endereço)
    {
        $this->endereço = $endereço;
    }

    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param string $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param string $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param string $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return string
     */
    public function getRamo()
    {
        return $this->ramo;
    }

    /**
     * @param string $ramo
     */
    public function setRamo($ramo)
    {
        $this->ramo = $ramo;
    }

    /**
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param string $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param string $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    //construct
    function __construct()
    {
        $this->cnpj = "";
        $this->razao = "";        
        $this->cep = "";
        $this->endereço = "";
        $this->numero = "";
        $this->bairro = "";
        $this->complemento = "";
        $this->cidade = "";
        $this->ramo = "";
        $this->telefone = "";        
        $this->email = "";
        $this->uf = "";      
    }
}

