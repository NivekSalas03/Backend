<?php
class Auth{
    private $db;
    public function __construct(){
        $this->db=new Base;
        
    }
    
    public function buscarUsuario($datos){

            $bind=array($datos['Usuario'],$datos['Contraseña']);
            $sql="select * from usuarios where Correo = ? and Contrasena = ? ;";
            $renglon=$this->db->queryOne($sql,$bind);
            

            return $renglon;
        
        
        
    }
    public function Existe($Nombre){

            $bind=array($Nombre);
            $sql="select * from usuarios where Correo = ?";
            $renglon=$this->db->queryOne($sql,$bind);
            

            return $renglon;
        
        
        
    }
    public function Agregar($datos){

            $bind=array($datos['Nombre'],
                        $datos['password'],
                        $datos['Nombre'],
                        $datos['Tipo']);
            $sql="INSERT INTO usuarios(Correo, Contrasena, Nombre, TipoCuenta) VALUES (?,?,?,?)";
            $renglon=$this->db->queryOne($sql,$bind);
            

return (is_array($renglon))?true:false;
        
        
        
    }
    
    public function buscarTabla(){
            
        $resultados=$this->db->query("select * from productos ");
        return $resultados;
        
    
    }
    
        public function TablaRutina(){
            
         $resultados=$this->db->query("select * from Plan_Nutricion");
        return $resultados;
        
    
    }
        public function TablaEjer(){
            
        $resultados=$this->db->query("select * from ejercicios,productos where productos.idProducto = ejercicios.IdProducto");
        return $resultados;
        
    
    }
}

?>