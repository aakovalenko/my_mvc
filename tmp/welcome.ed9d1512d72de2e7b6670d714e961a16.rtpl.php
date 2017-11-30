<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<html lang="en">
<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "head" );?>

<body>

<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "header" );?>


<h1>I am <?php echo $info["name"];?> | <?php echo $info["age"];?> years old | </h1>

<h2>I work in a <?php echo $info["job"];?></h2>

<h3>I have a friend</h3>

<ul>
    <?php $counter1=-1; if( !is_null($users) && is_array($users) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>

    <li> <?php echo $value1["name"];?> | <?php echo $value1["age"];?></li>
    <?php } ?>

</ul>

<h4><?php echo $loki["v"];?></h4>

<h5><?php echo $out["petrol"];?> | <?php echo $out["price"];?> | <?php echo $out["liters"];?></h5>

<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "footer" );?>

<a href=""><?php echo $footer["0"];?></a>| <?php echo $footer["1"];?> | <?php echo $footer["2"];?> | <a href="/ajax/ajax.php"><?php echo $footer["3"];?></a>

</body>
</html>