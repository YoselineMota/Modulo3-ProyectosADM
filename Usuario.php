<?php

class Usuario{
  //Nombre de Usuario
  private $nombre;
  //Contrasenia del usuario
  private $contrasenia;


/**
*Constructor que sirve para crear usuarios
* @param
*/
  public function __construct(string $n,string $c){
    $this->nombre = $n;
    $this->contrasenia = $c;
  }
public function getNombre(){
  return $this->nombre;
}

public function getContrasenia(){
  return $this->contrasenia;
}

public function setContrasenia(string $nueva){
  return $this->contrasenia = $nueva;
}

}

public function ejemplo(){
  $u = new Usuario("Juan", "1234");
  echo $u->getnombre();
}
