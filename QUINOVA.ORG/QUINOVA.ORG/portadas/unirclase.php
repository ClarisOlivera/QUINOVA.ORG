<?php
include('../../db.php');

// Obtener el ID de la clase desde la URL
$idClase = isset($_GET['id']) ? intval($_GET['id']) : 0;
session_start();
$nombre=$_SESSION['nombre'];

        $sql1="SELECT * FROM clases WHERE id =$idClase";
        

        $resultado1=$conn->query($sql1);
        
        if($resultado1->num_rows>0){
            while($fila1=$resultado1->fetch_assoc()){
             //   echo $fila1['codigo']." ".$fila1['nombre']." ".$fila1['cuenta_User'];
                $codigo=$fila1['codigo'];
                $nombreClase=$fila1['nombre'];
                $ci=$fila1['cuenta_User'];
                $sql2="SELECT *FROM cuenta WHERE user='$ci'";
                $resultado2=$conn->query($sql2);
                $fila2=$resultado2->fetch_assoc();
               // echo $fila2['rol']." ".$fila2['contraseña']."<br>";
                $id=$idClase;
            }
        }    
?>

<?php
include('../../db.php'); // Asegúrate que la ruta sea correcta
session_start();

if (!isset($_SESSION['ci'])) {
    die("Error: Sesión no iniciada.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aula = $_POST['Aul'] ?? '';
    $codigo = $_POST['Seccio'] ?? '';
    $nom = $_POST['Nombre'] ?? '';
    $cuenta = $_SESSION['ci'];}

    $sql = "INSERT INTO clases (codigo, Nombre, cuenta_User) 
            VALUES ('$codigo', '$nom', '$cuenta')";
//$sql="SELECT * FROM clases WHERE cuenta_User='$cuenta'";
            if($conn->query($sql)===true){
        header("Location: /QUINOVA.ORGmio/QUINOVA.ORG/portadas/materia.php?id=$conn->insert_id");
        exit();
    
}
else{
    echo $conn->error;
}
?>

<?php
    $cuentauser=$_POST['cuenta_User'];
    $clasesnombre=$_POST['clases_nombre'];
    $clasescuentauser=$_POST['clases_cuenta_User'];


$sql="INSERT INTO registroClase (cuenta_User, clases_nombre, clases_cuenta_User) VALUES ('$cuentauser','$clasesnombre','$clasescuentauser')";
echo $sql;
        if ($conn->query($sql)=== TRUE){
            header("location:../portadas/materias.php");
            exit();
        
    }else{
        echo "Error:" . $sql2 . "<br>" . $conn->error;
    }
    $conn->close();
?>