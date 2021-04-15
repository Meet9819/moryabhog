<body>
<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div>
        <div style="width:100%;text-align:center" class="container">
          <img width="400px" style="text-align:center"  src="../assets/images/logo/logo.png">
            <h1>Thank You, Your Payment has been Successfully Done !! </h1>

  <?php
include 'src/instamojo.php';
//original  of tinchy  $api = new Instamojo\Instamojo('0c05cfdc228d2fdeafcbe5ca000f680d', '833b437a19e3dfbbbe9db6038bf6646a','https://www.instamojo.com/api/1.1/');
// testing 
// testing api  of occultgyan // private apikey  // Private Auth Token //
$api = new Instamojo\Instamojo('test_d06074d22d96b5f891758e80a23', 'test_73e135f475ead249e560e0721b4','https://test.instamojo.com/api/1.1/');

$payid = $_GET["payment_request_id"];

try {
    $response = $api->paymentRequestStatus($payid);

     $var =  $response['payments'][0]['payment_id'];
     $emailid = $response['payments'][0]['buyer_email'];
     $customername = $response['payments'][0]['buyer_name'];
     $phone = $response['payments'][0]['buyer_phone'];
     $amount = $response['payments'][0]['amount'];
    
    echo "<h3>Payment ID: " . $response['payments'][0]['payment_id'] . "</h3>" ;
    echo "<h3>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h3>" ;
    echo "<h3>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h3>" ;
    echo "<a href ='../index.php' style='width: 20%;background-color: #e52720;padding: 10px;color: white;text-decoration: none;'> Back To Home <a/>";

    //echo "<pre>";
    //print_r($response);
    //echo "</pre>";

    ?>
    <?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}



  ?>
<?php
include"db.php";
// INSERT
$result = mysqli_query($con,"UPDATE payment SET paymentid='$var' WHERE email='$emailid'");

                                  //9819216666
                                    $ch = curl_init("http://wepro.design4web.in/wapp/api/send?apikey=9f7a00b20d774943a7c15f53b23e6f36&mobile=9819216666&msg=$customername,Mobile_$phone,Emailid_$emailid,PaidAmount_$amount,TransactionId_$var"); 
                                      // such as http://example.com/example.xml
                                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                      curl_setopt($ch, CURLOPT_HEADER, 0);
                                      $data = curl_exec($ch);
                                      curl_close($ch);
?>
 
      
    </div>  