<?php include_once '../includes/helpers.inc.php'; ?>
<h1>Clientes</h1>
<p><a href="?add">Registrar</a></p>
<form action="" method="get">
<p>Vista de clientes:</p>
<div>
<?php foreach ($clientes as $cliente): ?>
  <li>
    <form action="" method="post">
      <div>
				<?php htmlout($cliente['nombre']);
        echo "  ";
        htmlout($cliente['tlf']);?>
        <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
        <input type="submit" name="action" value="Edit">
        <input type="submit" name="action" value="Delete">
    </div>
    </form>
  </li>
<?php endforeach; ?>
</div>
</form>






