<?php

    class depreciacion{

    public $precio;
    public $vida;
    public $depreciacion;

    public function MostrarDepreciacion(){
        return ($this->precio / $this->vida) * $this->depreciacion ;
    }

    public function MostrarValor(){
        return $this->precio - (($this->precio / $this->vida) * $this->depreciacion );
    }
    
    }

?>
Footer
© 2022 GitHub, Inc.