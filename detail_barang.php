<?php 
	$idbr = $_GET['idbrg'];
	$sql = $con->query("SELECT*FROM barang WHERE id_barang='$idbr'");	
	$review = $sql->fetch_array();
 ?>
 

 <script src="public/js/detailbrg.js"></script>
<!--Section: Block Content-->
<section class="mb-5">

<div class="row justify-content-center">
    <div class="col-md-3 mb-4 mb-md-0 mt-5">
      <div id="mdb-lightbox-ui">
      <div class="mdb-lightbox">

        <div  class="row product-gallery mx-1">

            <figure class="view overlay rounded z-depth-1 main-img">
              <a href="public/images/product/<?=$review['foto']?>" 
                data-size="710x823">
                <img src="public/images/product/<?=$review['foto']?>" width="400" 
                  class="img-fluid z-depth-1">
              </a>
            </figure>
          </div>
          </div>

      </div>

    </div>
    <div class="col-md-7">
    </br></br></br>

      <h5><?=$review['nama_barang']?></h5>
 
      <p><span class="mr-1"><strong>Rp. <?=number_format($review['harga_brg'])?></strong></span></p>
      <p class="pt-1"><?php echo $review['deskripsi'] ?></p>
      <div class="table-responsive">
        <table class="table table-sm table-borderless mb-0">
          <tbody>
            <tr>
              <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
              <td>
								<select>
								<option>Silver</option>
								<option>Black</option>
								<option>Dark Black</option>
								<option>Red</option>
							</select></td>
            </tr>
			<tr>
			<th class="pl-0 w-25" scope="row"><strong>Size</strong></th>
			<td>
								<select>
									<option>L</option>
									<option>XL</option>
									<option>S</option>
									<option>M</option>
								</select></td>
			</tr>
			
			<th class="pl-0 w-25" scope="row"><strong>Quantity</strong></th>
			<td class="pl-0">
                    <div class="def-number-input number-input safari_only mb-0">
					<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                      <input class="quantity" min="0" name="quantity" value="1" type="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                  </td>
			
          </tbody>
        </table>
      </div>
	  <br><br>
	  <div> 
	  <button type="button" class="btn btn-light btn-md mr-1 mb-2t"><a href="logres.php">Beli Sekarang</a></button>
      <button type="button" class="btn btn-light btn-md mr-1 mb-2"><a href="logres.php"><span class="glyphicon glyphicon-plus"></span>Tambah Keranjang</a></button>
		  </div>
    </div>
  </div>

</section>
<!--Section: Block Content-->