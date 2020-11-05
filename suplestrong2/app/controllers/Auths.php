<?php
class Auths extends Controller{
    public function __construct(){
        
        $this->authModel=$this->model('Auth');
    }
    public function index(){
        $datos=[
                'mensaje'=>'',
                ];
    
    $this->view('paginas/login/login',$datos);
    }
    
public function login(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $datos=[
            'Usuario'=> trim($_POST['username']),
            'Contraseña' => trim($_POST['password']),
        ];
        
        $usuario=$this->authModel->buscarUsuario($datos);
    if($usuario){
        if($usuario['TipoCuenta']=='Admin'){
            $Producto=$this->authModel->buscarTabla();
            
        session_start();
        $_SESSION['usuario']=$usuario;
        //$foto=base64_encode($usuario['foto']);
        
        $datos=[
          'producto'=> $Producto
          //'foto'=>$foto
        ];
       
        $this->view('paginas/inventario/inventario',$datos);}
        else{
            $Ruti=$this->authModel->TablaRutina();
            $Ejerci=$this->authModel->TablaEjer();

             session_start();
        $_SESSION['usuario']=$usuario;
        
        $datos=[
                'Plan'=>$Ruti,
                'Ejercicio'=>$Ejerci
                ];

        
        
        $this->view('paginas/usuario/dashboard',$datos);
        }
    } else {
        $datos=[
            'mensaje' => 'Usuario no existe porfavor verifique sus datos :c',];
        $this->view('paginas/login/login',$datos);
        }
    }
}
public function registro(){
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
            $Tipo='usuario';
            $Nombre=$_POST['username'];
            $Pro=$this->authModel->Existe($Nombre);
            if($Pro==null){$Pro['Correo']='No';}
            
            if($Nombre==$Pro['Correo']){
                $datos=['mensaje'=>'Este usario ya existe'];
                $this->view('paginas/login/Registro',$datos);
                }else{
            $datos=[
              'Correo'=> trim($_POST['username']),
              'password'=>trim ($_POST['password']),
              'Nombre'=> trim($_POST['nombre']),
              'Tipo'=>$Tipo
            ];
            if($this->authModel->agregar($datos)){
                $datos=['mensaje'=>''];
                     $this->view('paginas/login/login',$datos);
                }else{
                
                }
            }
        }
        else{
            $datos=[
              'Correo'=>'',
              'password'=>'',
              'Nombre'=>'',
              'Tipo'=>'',
              'mensaje'=>'',
            ];
            $this->view('paginas/login/Registro',$datos);
        }
        
}


public function logout(){
    session_start();
    session_unset();
    session_destroy();
    $datos=[
            'mensaje'=> 'Ha salido del sistema, que tenga un buen dia',
        ];
    $this->view('paginas/login/login',$datos);
    
}

}
?>