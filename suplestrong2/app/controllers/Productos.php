<?php class Productos extends Controller{
    public function __construct(){
        
        $this->productosModel=$this->model('Producto');
    }
    public function index(){
        $productos=$this->productosModel->obtenerProductos();
        
        $datos=[
            'producto'=>$productos  
        ];

       $this->view('paginas/inventario/inventario',$datos);
    }
    /*Metodo para agregar los productos*/
    public function agregar(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $Nombre=$_POST['NombreProducto'];
            $Pro=$this->productosModel->Existe($Nombre);
            if($Pro==null){$Pro='No';}
            if($Nombre==$Pro['Nombre']){
                $datos=['Cantidad'=>(int) trim ($_POST['cantidad']),
                        'ID'=>$Pro['IdProducto']];
                if($this->productosModel->actualizarProductosE($datos)){
                     $productos=$this->productosModel->obtenerProductos();
                     $datos=[
                             'producto'=>$productos
                             ];
                    $this->view('paginas/inventario/inventario',$datos);
                }
                
                
                }else{
            $datos=[
              'Nombre'=> trim($_POST['NombreProducto']),
              'Cantidad'=>(int) trim ($_POST['cantidad']),
              'Precio'=> (float)trim($_POST['Precio']),
              'Info'=>trim($_POST['Info'])
            ];
            if($this->productosModel->agregarProductos($datos)){
        
                    $datos=[
                            'Nombre'=>'',
              'Cantidad'=>'',
              'Precio'=>'',
              'Info'=>'',
              'Mensaje'=>'Se registro correctamente el producto'  
                             ];
                     $this->view('paginas/inventario/añadir',$datos);
                }else{
                
                }
            }
        }
        else{
            $datos=[
              'Nombre'=>'',
              'Cantidad'=>'',
              'Precio'=>'',
              'Info'=>'',
              'Mensaje'=>'',
            ];
            $this->view('paginas/inventario/añadir',$datos);
        }
        
    }
    /*Metodo para Editar los productos*/
    public function editar($id){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
              'ID'=>$id,
              'Nombre'=> trim($_POST['NombreProducto']),
              'Cantidad'=> trim ($_POST['Cantidad']),
              'Precio'=> trim($_POST['Precio']),
              'Info'=>trim($_POST['Info'])
            ];
            if($this->productosModel->actualizarProductos($datos)){
                 $productos=$this->productosModel->obtenerProductos();
        
        $datos=[
            'producto'=>$productos  
        ];
       $this->view('paginas/inventario/inventario',$datos);
            }else{
                
            }
            
        }
        else{
            $productos=$this->productosModel->obtenerProductosId($id);
        
        $datos=[
            'IdProducto'=>$productos['IdProducto'],
              'Nombre'=> $productos['Nombre'],
              'Cantidad'=> $productos['Cantidad'],
              'Precio'=>$productos['Precio'] ,
              'Info'=>$productos['Instrucciones'],
              'Mensaje'=>'',
            ];
        $this->view('paginas/inventario/modificar',$datos);
        }
    }
    /*Metodo para borrar los productos*/
    public function eliminar($id){
        if($_SERVER['REQUEST_METHOD']=='POST'){
                if($this->productosModel->borrarProductos($id)){
                     $productos=$this->productosModel->obtenerProductos();
        
        $datos=[
            'Mensaje'=>'Se Elimino el producto'  
        ];
       $this->view('paginas/inventario/Eliminar',$datos);
                }else{
                    
                } }else{
        $productos=$this->productosModel->obtenerProductosId($id);
                $datos=[
              'Nombre'=> $productos['Nombre'],
              'Cantidad'=> $productos['Cantidad'],
              'Precio'=> $productos['Precio'],
              'Info'=>$productos['Instrucciones'],
              'Mensaje'=>''
            ];
                
            $this->view('paginas/inventario/eliminar',$datos);
           }
        
    }
    
    
    
    /*Inventario PDF*/
    public function toPdfInventario(){
        
        $productos=$this->productosModel->obtenerProductosP();
        
        foreach($productos as $key=>$productos){
            $registros[]=[
                         'NombreProducto'=> $productos['Nombre'],
                         'Cantidad'=> $productos['Cantidad'],
                         'Precio'=>$productos['Precio'],
                         'Instrucciones'=> $productos['Instrucciones']];
        }
    $datos=['productos'=>$registros, ];
        $this->view('paginas/inventario/impresion',$datos);
        
    }
        /*Plan de nutricion PDF*/
    public function toPdfPlanNutri(){
        
        $productos=$this->productosModel->obtenerNutri();
        
        foreach($productos as $key=>$productos){
            $registros[]=[
                         
                         'Comida'=> $productos['ComidadDia'],
                         'Lunes'=> $productos['Lunes'],
                         'Martes'=> $productos['Martes'],
                         'Miercoles'=> $productos['Miercoles'],
                         'Jueves'=> $productos['Jueves'],
                         'Viernes'=> $productos['Viernes'],
                         'Sabado'=> $productos['Sabado'],
                         'Domingo'=> $productos['Domingo']];
        }
    $datos=['Nutri'=>$registros, ];
        $this->view('paginas/PDF/impresionNu',$datos);
        
    }
        /*Ejercicio PDF*/
    public function toPdfEjercicio(){
        
        $productos=$this->productosModel->obtenerEjer();
        
        foreach($productos as $key=>$productos){
            $registros[]=[
                         'Nombre_Producto'=> $productos['NombreProducto'],
                         'Cantidad_Existente'=> $productos['CatidadExistente'],
                         'Informacion'=> $productos['Informacion']];
        }
    $datos=['productos'=>$registros, ];
        $this->view('paginas/productos/impresion',$datos);
        
    }
    
}

?>