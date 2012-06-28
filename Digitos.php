<?php

class Digitos {
	private $N = 100000;
	private $secuencia = "";

	public function generaSecuencia()
	{
		$this->secuencia = '';

		for($i = 1; $i <= $this->N; $i++)
		{
			$this->secuencia .= $i;
		}
	}

	public function primeraPosicion($n)
	{
		return strpos($this->secuencia, strval($n))+1;
	}
}

?>