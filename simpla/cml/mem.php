<?php
$mem = memory_get_usage();
for($i=0;$i<100000;$i++)
{
			print(memory_get_usage()-$mem."<br>");
			$mem = memory_get_usage();
			addslashes('xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
}
?>