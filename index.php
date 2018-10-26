<!DOCTYPE html>
<html lang="es">
	<head>

        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Compras Móvil</title>
        
    	<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script>
            $( function() {
                var availableTags = [
    
                    <?php
                    $db = new SQLite3('db');
                    $sql = "SELECT description FROM products ORDER BY description COLLATE NOCASE";
                    $result = $db->query($sql);
                    while($row = $result->fetchArray(SQLITE3_ASSOC)){
                        print('"'.$row['description'].'",');
                    }
                    ?>
    
                ];
                $( "#tags" ).autocomplete({
                    source: availableTags
                });
            } );
        </script>

    </head>

	<body>
	<div class="container">
		<?php
        /*
        * shopping
        */
        $application = new Shop();
        
        class Shop
        {
        	public function __construct()
        	{
                $this->Form();
             }
  
            private function Form()
            {
                ?>

                <?php
                
            	switch ($_GET['accion']) {

                    case 'list_inv':
                        ?>
        
                        <ul class="nav nav-tabs nav-justified" >
                            <li class="nav-item">
                                <a class="nav-link" href="?accion=recolectar">Compra</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="?accion=list_inv">Carrito</a>
                            </li>
                        </ul>
                        <br/>
                        <form method="post">
                            <div class="form-group">
                                <label style="font-weight:bold">Compras.</label>
                                <input name="code"type="search" class="form-control" placeholder="Descripción" value="<?php echo $_POST['search'];?>" autofocus>
                                <input type="hidden" name="search">
                            </div>
                        </form>

                        <?php
                        if (isset($_POST['clean'])) {
                            $db = new PDO('sqlite:db');
                            $sql = 'DELETE FROM shopping';
                            $result = $db->exec($sql);
                            if ($result){
                                echo '<h4>Artículos borrados.</h4>';
                            } else {
                                echo '<h4>Artículos no exiten</h4>';
                            }
                        }
                            
                        if (isset($_POST['delete'])) {
                            $db = new PDO('sqlite:db');
                            $sql = 'DELETE FROM shopping WHERE id="'.$_POST["row_id"].'"';
                            $result = $db->exec($sql);
                            if ($result){
                                $row_id = '#: '. $_POST["row_id"].' > Borrado.';
                            } else {
                                echo '<h4>Artículo NO Borrado.</h4>';
                            }
                        }
                        ?>
                        <h4><?php echo $row_id; ?></h4>
                        <table  class="table table-striped table-sm" style="overflow-x: auto; display: block;" >
                            <thead align="left">
                                <tr>
                                    <th>#</th>
									<th>Descripción</th>
									<th>Precio</th>
									<th>Qty</th>
									<th>Subtotal</th>
								</tr>
                            </thead>
							<tbody>
								<?php
                                $db = new PDO('sqlite:db');
                                if (isset($_POST['search']) && !empty($_POST['code'])) {
                                    $sql = 'SELECT * FROM shopping WHERE description LIKE "%'.$_POST["code"].'%"';
                                } else {
                                    $sql = 'SELECT * FROM shopping';
                                }
                                $result = $db->query($sql);
                                while ($row = $result->fetchObject()){
                                ?>
                                <tr>
                                    <td>
                                        <form method="post">
                                            <input name="row_id" type="hidden" value="<?php echo $row->id; ?>"/>
                                            <button style="75%;" type="submit" name="delete" class="btn btn-light"><?php echo $row->id; ?></button>
                                        </form>
                                    </td>
                                    <td><?php echo $row->description; ?></td>
                                    <td align="right">C$<?php echo number_format($row->price, 2); ?></td>
                                    <td align="right"><?php echo $row->quantity; ?></td>
                                    <td align="right">C$<?php echo number_format($row->subtotal, 2);?></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td align="right" colspan="3">SubTotal:</td>
                                    <td style="font-weight:bold" align="right" colspan="2">C$
                                        <?php
                                        $db = new PDO('sqlite:db');
                                        $sql = 'SELECT SUM(subtotal) AS total FROM shopping';
                                        $result = $db->query($sql);
                                        while ($row = $result->fetchObject()){
                                        	echo number_format($row->total, 2);	
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right" colspan="3">IVA:</td>
                                    <td align="right" colspan="2">C$ <?php echo number_format($row->total*0.15, 2);?></td>
                                </tr>
								<tr>
                                    <td align="right" colspan="3">Total:</td>
                                    <td style="font-weight:bold" align="right" colspan="2">C$ <?php echo number_format($row->total*1.15, 2); } ?> </td>
								</tr>
                            </tbody>
                        </table>
						
                        <form method="post">
                            <div class="form-group">
                                <label style="font-weight:bold">Limpiar: </label>
                                <input type="submit" name="clean" value="Aceptar">
                            </div>
                        </form>

						<?php 
                        break;

            
                    default:
                        ?> 
                        <ul class="nav nav-tabs nav-justified" >
                            <li class="nav-item">
                                <a class="nav-link active" href="?accion=recolectar">Compra</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?accion=list_inv">Carrito</a>
                            </li>
                        </ul>
                        <br/>
                        	<form method="post">
                        		<div class="form-group">
									<label style="font-weight:bold">Realizar una compra.</label>
                                    <div class="input-group">
 									<input id="tags" name="bar_txt" class="form-control" type="text" 
                                           placeholder="Código" autocomplete="off" required autofocus>
                                    </div>
                                    <input name="pric_txt" class="form-control" type="number" step="0.01" placeholder="Precio C$" required>
     								<input name="qty_num" class="form-control" type="number" step="0.01" placeholder="Cantidad" required>
								</div>
                        		<button name="insert" class="btn btn-success btn-lg btn-block" type="submit" >Agregar</button>
							</form>
							
							<?php
                            if (isset($_POST['insert'])) {
                                $db = new PDO('sqlite:db');
                                $sql = 'SELECT * FROM products WHERE description="'.$_POST["bar_txt"].'" LIMIT 1';
                                $result = $db->query($sql);
									if ($row = $result->fetchObject()){
										$sql = 'SELECT * FROM shopping WHERE description="'.$_POST["bar_txt"].'" AND price="'.$_POST["pric_txt"].'" LIMIT 1
        								';
        								$result = $db->query($sql);
        								if ($row = $result->fetchObject()){
        									$sql = 'UPDATE shopping SET 
                                            
											quantity=(SELECT quantity FROM shopping WHERE 
            								description="'.$_POST["bar_txt"].'" AND price="'.$_POST["pric_txt"].'"
            								)+'.$_POST["qty_num"].' ,
											
											subtotal=(SELECT subtotal FROM shopping WHERE 
            								description="'.$_POST["bar_txt"].'" AND price="'.$_POST["pric_txt"].'"
            								)+ (select '.$_POST["pric_txt"].'*'.$_POST["qty_num"].')

 											WHERE 
            								description="'.$_POST["bar_txt"].'" AND price="'.$_POST["pric_txt"].'"  
            								';
        									
            								$result = $db->exec($sql);
            								if ($result){
            									$sql = 'SELECT * FROM shopping WHERE description="'.$_POST["bar_txt"].'"  AND price="'.$_POST["pric_txt"].'" ';
            									$result = $db->query($sql);
            									while ($row = $result->fetchObject()){
            										echo '<br/><h4>'.$row->description.' | C$'.number_format($row->price, 2).' <br/> Actualizado.</h4>';
            									}
            								} else {
            									echo '<h3>Artículo NO actualizado.</h3>';
            								}
        								} else {
        									$sql = 'INSERT INTO shopping (description, price, quantity, subtotal) values (
											"'.$_POST["bar_txt"].'", 
											"'.$_POST["pric_txt"].'", 
											"'.$_POST["qty_num"].'", 
											(select '.$_POST["pric_txt"].'*'.$_POST["qty_num"].')
											)';
											
        									$result = $db->exec($sql);
        									if ($result){
        										$sql = 'SELECT * FROM shopping WHERE description="'.$_POST["bar_txt"].'" AND price="'.$_POST["pric_txt"].'" ';
        										$result = $db->query($sql);
        										while ($row = $result->fetchObject()){
        											echo '<br/><h4>'.$row->description.' | C$'.number_format($row->price, 2).' <br/> Guardado.</h4>';
        										}
        									} else {
        										echo '<h4>Artículo NO insertado.</h4>';
        									}
        								}
									} else {
//										echo '<h4>Articulo: "'.$_POST["bar_txt"].'" no existe.</h4>';
                                        
                                            $sql = 'INSERT INTO shopping (description, price, quantity, subtotal) values (
											"'.$_POST["bar_txt"].'", 
											"'.$_POST["pric_txt"].'", 
											"'.$_POST["qty_num"].'", 
											(select '.$_POST["pric_txt"].'*'.$_POST["qty_num"].')
											)';
											
        									$result = $db->exec($sql);
        									if ($result){
        										$sql = 'SELECT * FROM shopping WHERE description="'.$_POST["bar_txt"].'" AND price="'.$_POST["pric_txt"].'" ';
        										$result = $db->query($sql);
        										while ($row = $result->fetchObject()){
        											echo '<br/><h4>'.$row->description.' | C$'.number_format($row->price, 2).' <br/> Guardado.</h4>';
        										}
        									} else {
        										echo '<h4>Artículo NO insertado.</h4>';
        									}
                                        
                                        $sql = 'INSERT INTO products (description) values ("'.$_POST["bar_txt"].'")';
    									$result = $db->exec($sql);
                                        if ($result){
                                            echo '<h4>Artículo NUEVO insertado.</h4>';
                                        }
                                        
									}
                            }
                            ?>

                            <br/>
                            <p>
                            	<label style="font-weight:bold">Última compra:</label><br/>
                            	<?php
                            	$db = new PDO('sqlite:db');
                            	$sql = 'SELECT * FROM shopping ORDER BY id DESC LIMIT 1';
                            	$result = $db->query($sql);
                            	while ($row = $result->fetchObject()){
                            		echo '<label>'.$row->quantity.' | '.$row->description.' | '.number_format($row->subtotal, 2).'</label><br/>';
								}
								?>
							</p>
							
								<h4 align="center" style="font-weight:bold">Total: C$
								<?php
								$db = new PDO('sqlite:db');
								$sql = 'SELECT SUM(subtotal) AS total FROM shopping';
								$result = $db->query($sql);
								while ($row = $result->fetchObject()){
									//echo $row->total;
									echo number_format($row->total, 2);
								}
								?>
								</h4>
							

							<?php 

                        //end default
                }
                
                ?>
				<footer class="text-muted">
					<div class="container">
						<p class="float-right"><a href="#">Ir arriba</a></p>
					</div>
				</footer>
				<?php 
                
            }
            
            //end
            
        }
        ?>

        </div>
        


	</body>
</html>
