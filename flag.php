<?php

if(isset($_POST["admin"]))
{
    $auth=$_POST["admin"];
}
else $auth=0;
if($auth==1){
    echo "inctfj{did_y0u_chang3_7h3_admin_valu3?}";
    }
else{
    echo "You are not the admin!!!";
    }
?>
        