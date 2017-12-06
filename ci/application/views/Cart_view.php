<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart</title>
</head>
<body>

<table cellpadding="6" cellspacing="1" width="100%" border="1">
         <tr>
         	<th>Id</th>
         	<th>name</th>
         	<th>price</th>
         	<th>&nbsp</th>

         </tr>


         <?php
         $key= 0;
            foreach($products as $product)
            {
            	
         	echo "<tr>";
         	echo "<td>".$product['id']."</td>";
         	echo "<td>".$product['name']."</td>";
         	echo "<td>".$product['price']."</td>";
         	echo "<td><a href='?id=".$key."'>add to cart</a></td>";

         	echo "</tr>";
         	$key++;
            }

         ?>
         
	

</table>
<?php   echo form_open(base_url());  ?>
<table cellpadding="6" cellspacing="1" width="100%" border="1">
         <tr>
         	<th>qty</th>
         	<th>name</th>
         	<th>price</th>
         	<th>subtotal</th>
         	<th>delete</th>
         </tr>
         <?php
         $i=1;
         foreach($this->cart->contents() as $items)
         {
         	
         	echo "<td>".form_hidden($i.'[rowid]',$items['rowid'])."</td>";

         	echo "<tr>";
         	echo "<td>";
         	echo form_input(array('name'=> $i.'[qty]','value'=>$items['qty'],'maxlength'=>'3','size'=>'5'));
         	echo "</td>";
         	
         	echo "<td>";
         	echo $items['name'];
         	echo "</td>";
         	echo "<td>";
         	echo $items['price'];
         	echo "</td>";
         	echo "<td>";
         	echo $items['subtotal'];
         	echo "</td>";
         	echo "<td>";
         	echo "<a href='?del=".$items['rowid']."'>Delete</a>";
         	echo "</td>";
         	echo "</tr>";


         }
 

         ?>
         <tr>
         	<td colspan="2" ></td>
         	<td>total</td>
         	<td> <?php echo $this->cart->total() ?> </td>
         </tr>
</table>

<?php echo form_submit('submit','submit your form'); ?>

</body>
</html>