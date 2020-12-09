
<h3>Most Viewed</h3>   
</div>  
	<?php 
	$sql=mysql_query("select * from login");
	while($datas=mysql_fetch_array($sql)){
	?>
        <div class="col-sm-4 ">
            <div class="img-details" data-price="2">
                <img src="uploads/products/<?php echo $datas['item_img'];?>" class="img-responsive" id="myImg" style="height:250px">
                <div class="showhide-div text-center col-sm-4">
                    <a href="viewpage.php?viewid=<?php echo $datas['code'];?>" class="btn-view" >View</a>&nbsp;
                </div>
                <div class="description" >
                    <table>
                        <form action="cart.php?action=add&code=<?php echo $datas["code"];?>" method="post">
                            <tr>
                                <td style="padding: 10px">Name:&nbsp;&nbsp;<span style="color:#E8A61C"><?php echo $datas['item_name'];?></span></td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; text-align:left;"> Price: Rs <?php echo $datas['item_price'];?><br />
                                Q.<input style="width:30px;margn-right: 10px;" type="text"name="qty"id="quantity" required></td>
                            </tr>
                            <tr>
                                <input type="hidden" name="sweetid"value="<?php echo $datas['code'];?>"id="sweetid">
                                <input type="hidden" name="sweetname"value="<?php echo $datas['item_name'];?>"id="sweetname">
                                <input type="hidden" name="sweetprice"value=" Rs <?php echo $datas['item_price'];?>"id="sweetprice">
                             </tr>
                            <tr>
                                <td class="text-center"> 
                                    <button class="btn btn-add-to-cart" name="add" id="add" value="add">
                                     <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</button>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>      
            </div> 
         </div> <!-- End of inner row -->
		 <?php 
		 } ?><!-- End of col-sm-3 -->     