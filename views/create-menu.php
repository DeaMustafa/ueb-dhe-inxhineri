<?php
require_once '../controllers/MenuController.php';

$menu = new MenuController;
if(isset($_POST['submit'])){
    $menu->insert($_POST);
}


?>
<div>
    <form method="POST">
        Emri i sushit:
        <input type="text" name="emri">
        <br>
        Lloji i sushit:
        <input type="text" name="lloji">
        <br>
        Cmimi i sushit:
        <input type="text" name="cmimi">
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div> 