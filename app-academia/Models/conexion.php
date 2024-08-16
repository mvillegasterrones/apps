
<?php
class conexion
{
    private $servidor;
    private $usuario;
    private $contrasena;
    private $basedatos;
    public  $conexion;

    public function __construct()
    {
        $this->servidor   = "localhost";
        $this->usuario	  = "asakkrso_lyceum_group";
        $this->contrasena = "asakkrso_lyceum_group";
        $this->basedatos  = "asakkrso_lyceum_group";
    }
    function conectar()
    {
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->contrasena, $this->basedatos);
    }
    function cerrar()
    {
        $this->conexion->close();
    }
}