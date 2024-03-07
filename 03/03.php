<?php include("header.php"); ?>

<?php
if (isset($_GET["page"])){
    $page = $_GET ["page"];
    if ($page=="services"){
        include("services.php");
    }else if ($page=="contact"){
        include("contact.php");
    }
    
}else{

?>
<h1>Avalehe asjad</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus veritatis aliquid quo voluptatum, laudantium saepe minima nisi dolorum reiciendis accusantium ut eaque rerum eum nam, velit doloribus explicabo aut inventore!</p>

<?php
}
?>
<?php include("footer.php"); ?>     