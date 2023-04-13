<?php
class Veiculo
{
    private $id;
    private $fabricante;
    private $modelo;
    private $ano;
    private $placa;

	public function __construct($f, $m, $a, $p, $id = null) {
		$this->fabricante = $f;
		$this->modelo = $m;
		$this->ano = $a;
		$this->placa = $p;
		$this->id = $id;
	}
	
	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getAno() {
		return $this->ano;
	}
	
	/**
	 * @param mixed $ano 
	 */
	public function setAno($ano) {
		$this->ano = $ano;
	}

	/**
	 * @return mixed
	 */
	public function getPlaca() {
		return $this->placa;
	}
	
	/**
	 * @param mixed $placa 
	 */
	public function setPlaca($placa) {
		$this->placa = $placa;
	}

    /**
     * Get the value of fabricante
     */ 
    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * Set the value of fabricante
     *
     * @return  self
     */ 
    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }
}
