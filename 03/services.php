<h1>Teenused</h1>
<?php 
if (isset ($GET ['ok'])) {
    echo '<div class="alert alert-success" role="alert">
    A simple danger alert—check it out!
  "Toote lisamine õnnestus!"
  </div>
  ';
}

?>

<form action="" method="post" enctype="multipart/form-data">
    <label for="nimetus">Toote nimetus</label>
    <input type="text" name="nimetus" required><br>

    <label for="kirjeldus">Toote kirjeldus</label>
    <input type="text" name="kirjeldus" required><br>

    <label for="hind">Toote hind</label>
    <input type="number" min="0.00" max="100.00" step="0.01." name="hind" required><br>

    <label for="lisapilt"></label>
    <input type="file" name="lisapilt"><br>

    <input type="hidden"name="page" value="services">

    <input class="btn btn-success" type="submit" value="Lisa uus toode">
</form>

<?php
if (isset($_POST['nimetus'])) {
    $ajutine_fail =  $_FILES['lisapilt']['tmp_name'];
    move_uploaded_file($ajutine_fail, 'img/'.$_FILES['lisapilt']['name']);
   $read=array();

  $id = array_push($read,count(file('products.csv'))+1);

   
   $nimetus = array_push($read, $_POST['nimetus']);
   $kirjeldus = array_push($read, $_POST['kirjeldus']);
   $hind = array_push($read, $_POST['hind']);
    $pildinimi = array_push($read, $_files['lisapilt']['name']);

  $path = 'products.csv';
  $fp = fopen ($path, 'a');
   fputcsv ($fp, $read);
    //print_r ($nimetus);
    fclose($fp);
    //suunab "puhtale" lehel
    header ('Location:03.php?page=services&ok');

}

?>

<div class="row row-cols-1 row-cols-md-4 g-4 pt-5">
<?php
//faili avamine
$products = "products.csv";
$minu_CSV = fopen($products, "r");

//kõikide ridade saamine
while (!feof($minu_CSV)){
//ühe rea saamine, eraldatatud komaga

 $rida = fgetcsv($minu_CSV, filesize($products), ",");
//print_r($rida);
//echo "$rida[1] - $rida[3]<br>";
if (is_array ($rida)) {
echo'
<div class="col">
    <div class="card">
    <img src="https://picsum.photos/id/684/600/400" class="card-img-top" alt="'.$rida[1].'">
      <div class="card-body">
        <h5 class="card-title">'.$rida[1].'</h5>
        <p class="card-text">'.$rida[2].'</p>
        <p class="card-text">'.$rida[3].'€</p>
      </div>
    </div>
  </div>
  ';
}
}
?>

  
</div>
