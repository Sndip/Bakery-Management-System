
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
    color: orange;
}
</style>
<?php
if($avd<=5)
{ 
  for($i=0;$i<$avd;$i++)
  {
 ?>
<span class="fa fa-star checked"></span>
<?php }
$rtr= floor($avd);
if($rtr<$avd)
{
	$rtr=$rtr+1;
}
  for($i=0;$i<5-$rtr;$i++)
  {
   ?>
  
<span class="fa fa-star"></span>
<?php } 
}
elseif($avd>5) {
for($i=0;$i<5;$i++)
  {
 ?>
<span class="fa fa-star checked"></span>
<?php }
}
?>


