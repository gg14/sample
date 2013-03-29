<?php 
require_once '../templates/header.html.php';
// FIN HEADER

// Agregar clientes

if (isset($_GET['add']))
{
	$pageTitle = 'Nuevo cliente';
	$action = 'addform';
	$nombre = '';
	$rif = '';
	$direccion1 = '';
	$direccion2 = '';
	$estado = '';
	$ciudad = '';
	$tlf='';	
	$id = '';
	$boton = 'Registrar';

  include '../includes/db.inc.php';
  include 'form.html.php';
  exit();
}

// Registrar Clientes

if (isset($_GET['addform']))
{
	include '../includes/db.inc.php';
	
	if ($_POST['nombre'] == '')
	{
		$error = 'Debe introducir un nombre';
	  include '../templates/error.html.php';
		exit();
	}
  try
  {
     $sql = 'INSERT INTO clientes SET
						nombre =:nombre,
						rif =:rif,
						direccion1 =:direccion1,
						direccion2 =:direccion2,
						estado =:estado,
						ciudad =:ciudad,
						tlf=:tlf';	
						
    $s = $pdo->prepare($sql);
    $s->bindValue(':nombre', $_POST['nombre']);
    $s->bindValue(':rif', $_POST['rif']);
		$s->bindValue(':direccion1', $_POST['direccion1']);
    $s->bindValue(':direccion2', $_POST['direccion2']);
    $s->bindValue(':estado', $_POST['estado']);
		$s->bindValue(':ciudad', $_POST['ciudad']);
		$s->bindValue(':tlf', $_POST['tlf']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error creando el cliente.';
		include '../templates/error.html.php';
    exit();
  }
  $clienteid = $pdo->lastInsertId();
  exit();
}

// Editar	
if (isset($_POST['action']) and $_POST['action'] == 'Edit')
{
	include '../includes/db.inc.php';

  try
  {
    $sql = 'SELECT id, nombre, rif, direccion1, direccion2, estado, ciudad, tlf FROM clientes WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error al cargar los detalles del cliente.';
		include '../templates/error.html.php';
    exit();
  }
	
	$row = $s->fetch();
	
	$pageTitle = 'Editar cliente';
	$action = 'editform';
	$nombre = $row['nombre'];
	$rif = $row['rif'];
	$direccion1 = $row['direccion1'];
	$direccion2 = $row['direccion2'];
	$estado = $row['estado'];
	$ciudad = $row['ciudad'];
	$tlf= $row['tlf'];
	$id = $row['id'];
	$boton = 'Actualizar';

include 'form.html.php';
  exit();
}

// accion editar
if (isset($_GET['editform']))
{
	include '../includes/db.inc.php';

  try
  {
    $sql = 'UPDATE clientes SET
        nombre =:nombre,
				rif =:rif,
				direccion1 =:direccion1,
				direccion2 =:direccion2,
				estado =:estado,
				ciudad =:ciudad,
				tlf =:tlf
        WHERE id = :id';
		
		$s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->bindValue(':nombre', $_POST['nombre']);
    $s->bindValue(':rif', $_POST['rif']);
		$s->bindValue(':direccion1', $_POST['direccion1']);
    $s->bindValue(':direccion2', $_POST['direccion2']);
		$s->bindValue(':estado', $_POST['estado']);
		$s->bindValue(':ciudad', $_POST['ciudad']);
		$s->bindValue(':tlf', $_POST['tlf']);
    $s->execute();		
  }
  catch (PDOException $e)
  {
    $error = 'Error en actualizar el cliente.';
		include '../templates/error.html.php';
    exit();
  }
  exit();
}

// Eliminar cliente

if (isset($_POST['action']) and $_POST['action'] == 'Delete')
{
	include '../includes/db.inc.php';

  try
  {
    $sql = 'DELETE FROM clientes WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error al eliminar el cliente.';
		include '../templates/error.html.php';
    exit();
  } 
exit();
}

// listado de clientes

include '../includes/db.inc.php';

try
{
  $result = $pdo->query('SELECT id, nombre,tlf FROM clientes');
}
catch (PDOException $e)
{
  $error = 'Error al obtener los nombres de la base de datos!';
  include '../templates/error.html.php';
  exit();
}

foreach ($result as $row)
{
  $clientes[] = array('id' => $row['id'], 'nombre' => $row['nombre'], 'tlf' =>$row['tlf']);
}

$pageTitle = 'Clientes';
include 'searchform.html.php';

// FOOTER //  
require_once '../templates/footer.html.php';
 	
?>