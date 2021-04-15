<?php

include"db.php";
// INSERT
if(isset($_POST['save']))
{

echo  $name = $con->real_escape_string($_POST['name']);
echo  $email = $con->real_escape_string($_POST['email']);
echo  $phone = $con->real_escape_string($_POST['phone']);
echo  $product_name = $con->real_escape_string($_POST['product_name']);
echo  $product_price = $con->real_escape_string($_POST['product_price']);
echo  $address = $con->real_escape_string($_POST['address']);
echo  $productcode = $con->real_escape_string($_POST['productcode']);
echo  $qty = $con->real_escape_string($_POST['qty']);


$result = mysqli_query($con,"INSERT INTO payment (name,email,phone,product_name,product_price,address,productcode,qty) VALUES('$name','$email','$phone','$product_name','$product_price','$address','$productcode','$qty')");
   
  //9819216666
    $ch = curl_init("http://wepro.design4web.in/wapp/api/send?apikey=9f7a00b20d774943a7c15f53b23e6f36&mobile=9819216666&msg=Order_Request_$name,Mobile_$phone,Qty_$qty,Price_$product_price,Address_$address"); 
                                      // such as http://example.com/example.xml
                                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                      curl_setopt($ch, CURLOPT_HEADER, 0);
                                      $data = curl_exec($ch);
                                      curl_close($ch);
                                      

                ?>
                <script>
              // alert('Thank You ...');

               //window.location.href='thankyou.php';
                </script>
                <?php
}
?>

<?php 

///header("Location: http://wepro.design4web.in/wapp/api/send?apikey=9f7a00b20d774943a7c15f53b23e6f36&mobile=9819461979&msg=someone_is_placing_order");
 
?>


<?php 

include 'src/instamojo.php';

$api = new Instamojo\Instamojo('test_d06074d22d96b5f891758e80a23', 'test_73e135f475ead249e560e0721b4','https://test.instamojo.com/api/1.1/');

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" =>  $_POST["product_name"],
        "amount" =>  $_POST["product_price"] * $_POST["qty"],
        "buyer_name" =>  $_POST["name"],
        "phone" =>  $_POST["phone"],
        "send_email" => true,
        "send_sms" => true,
        "email" => $_POST["email"],
        'allow_repeated_payments' => false,
        "redirect_url" => "http://moryabhog.com/instamojo/thankyou.php",
        "webhook" => "http://moryabhog.com/instamojo/webhook.php"
        ));
//print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
  ?>
