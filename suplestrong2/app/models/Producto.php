<?php
class Producto{
    private $db;
    
    public function __construct(){
        $this->db=new Base;
    }
    public function obtenerProductos(){
        $resultados=$this->db->query("select * from productos");
        return $resultados;
        
    }
    public function obtenerProductosP(){
        $resultados=$this->db->query("select Nombre, SUM(Cantidad) as 'Cantidad', Precio,Instrucciones from productos group by Nombre");
        return $resultados;
        
    }
    public function agregarProductos($datos){
        $bind=array(
                    $datos['Nombre'],
                    $datos['Cantidad'],
                    $datos['Precio'],
                    $datos['Info'],
                    );
        $sql="INSERT INTO productos (Nombre, Cantidad, Precio, Instrucciones) VALUES (?,?,?,?)";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
    
    public function obtenerProductosId($id){
        $bind=array($id);
        $sql="SELECT * FROM productos WHERE IdProducto = ? ";
        $renglon =$this->db->queryOne($sql,$bind);      
        return $renglon;
        
    }
    public function Existe($id){
        $bind=array($id);
        $sql="SELECT * FROM productos WHERE Nombre = ? ";
        $renglon =$this->db->queryOne($sql,$bind);
        
        return $renglon;
        
    }
    
    public function actualizarProductos($datos){
        $bind=array(
                    $datos['Nombre'],
                    $datos['Precio'],
                    $datos['Cantidad'],
                    $datos['Info'],
                    $datos['ID']
                    );
        $sql="UPDATE productos SET Nombre=?, Precio=?, Cantidad=?, Instrucciones=? WHERE IdProducto = ?";
        $resultado =$this->db->query($sql,$bind);

        return (is_array($resultado))?true:false;
        
    }
    public function actualizarProductosE($datos){
        $bind=array(
                    $datos['Cantidad'],
                    $datos['ID']
                    );
        $sql="UPDATE productos SET Cantidad=? WHERE IdProducto = ?";
        $resultado =$this->db->query($sql,$bind);
        
        return (is_array($resultado))?true:false;
        
    }
    public function borrarProductos($id){
        $bind=array($id);
        $sql="DELETE FROM productos WHERE IdProducto = ?";
        $resultado=$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
    public function obtenerNutri(){
        $sql="SELECT * FROM plan_nutricion";
        $renglon =$this->db->query($sql);      
        return $renglon;
        
    }
}

?>