<?php
require_once '../controllers/MenuController.php';
if(isset($_GET['id'])){
    $menuId = $_GET['id'];
}
$menu = new MenuController;
$currenMenu = $menu->edit($menuId);

if(isset($_POST['submit'])){
    $menu->update($_POST, $menuId);
}
?>
<form METHOD="post">
    Emri:
    <input type="text" name="emri" value="<?php echo $currenMenu['menu_emri']; ?>">
    <br>
    Lloji:
    <input type="text" name="lloji" value="<?php echo $currenMenu['menu_lloji']; ?>">
    <br>
    Cmimi:
    <input type="file" name="cmimi" value="<?php echo $currenMenu['menu_cmimi']; ?>">
    <br>
    <input type="submit" name="submit" value="Update">
</form>