<?php

class Libro {
    private $titulo;
    private $autor;
    private $precio;
    private $stock;
    private $cantidad;

    public function __construct(
        string $titulo,
        string $autor ,
        float $precio,
        int $stock 
        
    ) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    public function getTitulo(): string {
        return $this->titulo;

 
}
public function getAutor(): string {

return $this->autor;

}
public function getPrecio(): int {
    return $this->precio;
}
public function getStock():int {
    return $this->stock;


}
public function setStock($nuevoStock) {
$stock = new $nuevoStock(50);
$stock->setStock($nuevoStock);


    $this->stock = $nuevoStock;
  

}
public function venderCantidad(string $cantidad) {
    return "libro $this->cantidad venta$this->cantidad"
   ."";


$venta = 50;
if ($this->cantidad > $venta) {
    $this->cantidad = $venta;
    $venta = $this->cantidad;




    echo "Stock inicial" . $libro->venderCantidad() . '<br>' ;
    $cantidad = 50;
    if($libro->vender($cantidad)) {
        echo "Venta completada<br>";
    } else {
        echo "La venta no se ha realizado";
    }

   
}
///
$libro( $titulo  ="Start Imperium", $autor= "Daniel", $precio= 15);



}}

