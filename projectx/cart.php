 <?php include "includes/header.php";?>
                        <h1>Shopping Carts</h1>
                            <?php
                                if(isset($_SESSION["cart_item"])){
                                    $item_total = 0;
                                ?>
                        <table border="1"class="table table-bordered table-striped table-responsive">
						
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Price</td>
                                    <td>qty</td>
                                    <td>Unit Price</td>
                                    <td colspan="2">Total Price</td>
                                </tr>
                            </thead>
                            <tbody>
                                        <?php       
                                        foreach ($_SESSION["cart_item"] as $item){
                                            ?>
                                                <?php
                                                $sql=mysql_query("SELECT * FROM item WHERE code='$item[code]'");
                                                while($datas=mysql_fetch_array($sql)){
                                                ?>
                                <tr>
                                    <td><?php echo $item['item_name'];?></td>
                                     <td><?php echo $item['item_price'];?></td>

                                    <td>
                                        <form action="cart.php?action=add&code=<?php echo $datas["code"]; ?>" method="post">
                                            <input type="text" name="qty" value="<?php echo $item["qty"]; ?>">
                                            <input type="hidden" name="id" value="<?php echo $datas["code"]; ?>">
                                            <button class="btn btn-primary glyphicon glyphicon-edit" name="Update"
                                                   onclick="return confirm('Are you sure?')"></button>

                                            <a class="btn btn-danger" href="cart.php?action=remove&code=<?php echo $datas["code"]; ?>" 
                                                   onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-remove" 
                                                   aria-hidden="true"></span></a>
                                        </form> 
                                    </td>
                                    <td><?php   
                                                    echo $one_item_total = ($datas["item_price"]*$item["qty"]);
                                                    $item_total =$item_total + $one_item_total;
                                            ?></td>
                                </tr>
                                
 <?php
                                                        }
														}
                                               } 
                                                ?>
                                <tr>
                                    <td colspan="5" align="right">Sum</td>
                                    <td><?php echo $item_total;?></td>
                                </tr>
                            </tbody>
                        </table>
						<a href="cart.php?action=empty">empty</a>
                    </div>
                    
                    <div class="col-lg-12">
                        <nav>
                            <ul class="pager">
                              <li class="previous"><a href="cart.php?action=continue_shopping"><span aria-hidden="true">&larr;</span>Continue Shopping</a></li>
                              <li class="next"><a href="shoppingcart.php">CheckOut <span aria-hidden="true">&rarr;</span></a></li>
                            </ul>
                          </nav>    
                    </div>       
                    
                </div>
        </div>