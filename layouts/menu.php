<?php
  $page_title = 'Lista de productos';
  require_once('includes/load.php');
  $products = join_product_table();
?>
   <h1><p>Menú del día</p></h1>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th id="columnasPrin"> Imagen</th>
                <th id="columnasPrin"> Descripción </th>
                <th id="columnasPrin"> Precio de venta </th>
                 </tr>
            </thead>
            <tbody>
              <?php foreach ($products as $product):?>
              
                <?php if ($product['categorie']==='platillos'): ?>
                <tr>
                <td id="columnasPrin">
                <?php if($product['media_id'] === '0'): ?>
                    <img class="img-avatar img-circle" src="uploads/products/no_image.jpg" alt="">
                  <?php else: ?>
                  <img class="img-avatar img-circle" src="uploads/products/<?php echo $product['image']; ?>" alt="">
                <?php endif; ?>
                </td>
                <td id="columnasPrin"> <?php echo remove_junk($product['name']); ?></td>
                <td id="columnasPrin"> <?php echo remove_junk($product['sale_price']); ?></td>
              </tr>
                <?php endif; ?>
             <?php endforeach; ?>
            </tbody>
          </table>