<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"> -->
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/autocomplete.css">
        <title>Compras!</title>
    </head>
    <body>
        
        <div class="container">

            <div class="form-group">
                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-cart-arrow-down fa-3x"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-shopping-cart fa-3x"></i></a>
                    </li>
                </ul>
            </div>
            
                        
            <div class="tab-content" id="myTabContent">
          
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  
                    <form method="post">
                        
                        <div class="form-row">
                            
                            <div class="input-group mb-2">
                                <!--  <label for="exampleInputEmail1">Producto:   :</label> -->
                                <input name="bar_txt" type="text" class="form-control" id="myInput" placeholder="Producto" autocomplete="off" required autofocus>
                                <div class="input-group-prepend">
                                    <div class="input-group-text" ><i class="fas fa-coffee"></i></div>
                                </div>
                            </div>
                            
                            <div class="input-group mb-2">
                                <input name="pric_txt" type="number" step="0.01" class="form-control" id="inputPrice" placeholder="Precio" required>
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-money-bill-alt"></i></div>
                                </div>
                            </div>
                            
                             <div class="input-group mb-2">
                                <input name="qty_num" type="number" step="0.01" class="form-control" id="inputQty" placeholder="Cantidad" required>
                                 <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-tablets"></i></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <button name="insert" type="submit" class="btn btn-primary btn-lg btn-block"><i class="fas fa-cart-plus fa-2x"></i></button>
                        </div>
                        
                    </form>

                    
                    
                                        
                    
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Última compra:</strong><br/>
                        2 | <strong>Leche en polvo La Selecta</strong> | C$1,000.00                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                
                    <div class="alert alert-primary" role="alert">
                        <h4 align="center" style="font-weight:bold">Total: C$
                            1,706.90                        </h4>
                    </div>
                    
                                        
                    
                </div>
  
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    
                                        
                                    
                        <table class="table table-responsive">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Cant.</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col">Borrar</th>
                                </tr>
                            </thead>
                            <tbody>

                                                                <tr>
                                    <th scope="row">1</th>
                                    <td>Leche Eskimo 900ml</td>
                                    <td>C$25.50</td>
                                    <td>6</td>
                                    <td>C$153.00</td>
                                    <th scope="row">
                                        <form method="post">
                                            <input name="row_id" type="hidden" value="1"/>
                                            <button type="submit" name="delete" class="btn btn-link" onclick="return confirm('¿Está seguro que desea remover del carrito?')"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </th>
                                </tr>
                                                                <tr>
                                    <th scope="row">2</th>
                                    <td>Leche Eskimo 900ml</td>
                                    <td>C$34.00</td>
                                    <td>2</td>
                                    <td>C$68.00</td>
                                    <th scope="row">
                                        <form method="post">
                                            <input name="row_id" type="hidden" value="2"/>
                                            <button type="submit" name="delete" class="btn btn-link" onclick="return confirm('¿Está seguro que desea remover del carrito?')"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </th>
                                </tr>
                                                                <tr>
                                    <th scope="row">3</th>
                                    <td>Frijoles a granel</td>
                                    <td>C$25.60</td>
                                    <td>4</td>
                                    <td>C$102.40</td>
                                    <th scope="row">
                                        <form method="post">
                                            <input name="row_id" type="hidden" value="3"/>
                                            <button type="submit" name="delete" class="btn btn-link" onclick="return confirm('¿Está seguro que desea remover del carrito?')"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </th>
                                </tr>
                                                                <tr>
                                    <th scope="row">4</th>
                                    <td>Arroz a granel LB</td>
                                    <td>C$2.00</td>
                                    <td>5</td>
                                    <td>C$10.00</td>
                                    <th scope="row">
                                        <form method="post">
                                            <input name="row_id" type="hidden" value="4"/>
                                            <button type="submit" name="delete" class="btn btn-link" onclick="return confirm('¿Está seguro que desea remover del carrito?')"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </th>
                                </tr>
                                                                <tr>
                                    <th scope="row">5</th>
                                    <td>Yoghurt Eskimo 150g</td>
                                    <td>C$25.00</td>
                                    <td>2.2</td>
                                    <td>C$55.00</td>
                                    <th scope="row">
                                        <form method="post">
                                            <input name="row_id" type="hidden" value="5"/>
                                            <button type="submit" name="delete" class="btn btn-link" onclick="return confirm('¿Está seguro que desea remover del carrito?')"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </th>
                                </tr>
                                                                <tr>
                                    <th scope="row">6</th>
                                    <td>Arroz a granel LB</td>
                                    <td>C$25.50</td>
                                    <td>2</td>
                                    <td>C$51.00</td>
                                    <th scope="row">
                                        <form method="post">
                                            <input name="row_id" type="hidden" value="6"/>
                                            <button type="submit" name="delete" class="btn btn-link" onclick="return confirm('¿Está seguro que desea remover del carrito?')"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </th>
                                </tr>
                                                                <tr>
                                    <th scope="row">7</th>
                                    <td>Arroz a granel LB</td>
                                    <td>C$22.50</td>
                                    <td>2</td>
                                    <td>C$45.00</td>
                                    <th scope="row">
                                        <form method="post">
                                            <input name="row_id" type="hidden" value="7"/>
                                            <button type="submit" name="delete" class="btn btn-link" onclick="return confirm('¿Está seguro que desea remover del carrito?')"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </th>
                                </tr>
                                                                <tr>
                                    <th scope="row">8</th>
                                    <td>Azúcar a granel LB</td>
                                    <td>C$105.00</td>
                                    <td>2</td>
                                    <td>C$210.00</td>
                                    <th scope="row">
                                        <form method="post">
                                            <input name="row_id" type="hidden" value="8"/>
                                            <button type="submit" name="delete" class="btn btn-link" onclick="return confirm('¿Está seguro que desea remover del carrito?')"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </th>
                                </tr>
                                                                <tr>
                                    <th scope="row">9</th>
                                    <td>Plastilina Crayola 136g</td>
                                    <td>C$25.00</td>
                                    <td>0.5</td>
                                    <td>C$12.50</td>
                                    <th scope="row">
                                        <form method="post">
                                            <input name="row_id" type="hidden" value="9"/>
                                            <button type="submit" name="delete" class="btn btn-link" onclick="return confirm('¿Está seguro que desea remover del carrito?')"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </th>
                                </tr>
                                                                <tr>
                                    <th scope="row">10</th>
                                    <td>Leche en polvo La Selecta</td>
                                    <td>C$500.00</td>
                                    <td>2</td>
                                    <td>C$1,000.00</td>
                                    <th scope="row">
                                        <form method="post">
                                            <input name="row_id" type="hidden" value="10"/>
                                            <button type="submit" name="delete" class="btn btn-link" onclick="return confirm('¿Está seguro que desea remover del carrito?')"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </th>
                                </tr>
                                                            </tbody>
                        </table>
                        
                        <div class="alert alert-primary" role="alert">
                            <h4 align="center" style="font-weight:bold">Total: C$
                                1,706.90                            </h4>
                        </div>
                        
                        
                    
                    
                    
                    <form method="post">
                        <div class="form-group">
                            <label style="font-weight:bold">Limpiar: </label>
                            <button name="clean" type="submit" type="submit" class="btn btn-link" onclick="return confirm('¿Está seguro que desea vaciar el carrito?')"><i class="fas fa-broom"></i></button>
                        </div>
                    </form>
                    
                    
                                        
                </div>
                
                <!-- end div myTabContent-->
                
            </div>
            
            <footer class="text-muted">
                <p align="center"><a href="#"><i class="fas fa-sort-up fa-2x"></i></a></p>
            </footer>

            <!--
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">home tab</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">profile tab</div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">messages tab</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">setting tab</div>
                    </div>
                </div>
            </div>
            -->
            <!-- Optional JavaScript -->

            </div>

        <script src="js/jquery-3.3.1.slim.min.js"></script>        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/autocomplete.js"></script>        
        
        <script>
            var list = [
                "Arroz a granel LB","Azúcar a granel LB","Frijoles a granel","Avena en hojuelas LB","Queso seco LB","Pasta para soldar 60g","Plátano verde","Pampers talla 6 64und","Cereal Nestum Trigo Miel 200g","Detergente Xedex 1.5kg","Cloro sulin 210ml","Jabón para platos","Papel higiénico Nevax 8 rollos ","Huevos Granjero","Leche Eskimo 900ml","Yoghurt Eskimo 150g","Aceite Ideal 1500ml","Atún Gaviota 140g","Atún Mazatun 140g","Galletas Oreo 432g","Café Presto 72g","Avena Quaker 300g","Pinolillo Sasa 400g","Avena Sasa 400g","Jugo HiC 250ml","Trampa adhesiva Voctor para ratas ","Trampa plástica para ratones","Papitas Pringles 15 pack","Palomitas Act2 91g","Galletas Mantequilla 12pack","Jabón de tocador 440g","Camisa tricotextil talla 8","Paste Scotch 3M","Huevos Granjero 15und.","Aceite Don Juan 1000ml","Galletas Artesanas 330g","Calzoncillo Simply Básica talla S","Calsetin Berlina 6pk","Mortadela 454g","Mortadela Zurqui 500g","Chiltoma HortiFruti 24pk","Azúcar MonteRosa 2kg","Cloro Magia Blanca 200ml","Caramelos M&M 30.6g","Chinelas Boulevard T40","Desodorante Sport Talc 50g","Protector diario Daba 40un","Colgante total 125ml","Kit cloro 6und","Jabón trastos","Papel higiénico Scot 1000hojas","Aceite Vegetal 1000ml","Atún Suli 140g","Galletas príncipe 336g","Palomitas jack 99g","Kit jugo apple & eve 8u","Arroz El Faizan 2Kg","Plastilina Crayola 136g","Desodorante Rexona mujer","Nevax 1000 4 rollos","Miel biibii 6oz","Cebolla LB","Pinolillo Sabe más 400g","Jugo Ducal manzana 200ml","Jugo Delmonte Manzana 200ml","Papaya unid","Café a granel LB","Leche agria unid","Leche en polvo La Selecta","Queso Fresco LB","Torta","Leche Eskimo 500kg",    
            ];

            autocomplete(document.getElementById("myInput"), list);
        </script>

    </body>
</html>


