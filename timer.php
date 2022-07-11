<?php
session_start();
$mytime = 120;
$mytime2 = 40;
$mytime3 = 150;// minute
if(!isset($_SESSION['time']))
{
 $_SESSION['time']=time();
 $_SESSION['time2']=time();
 $_SESSION['time3']=time();
 //$_SESSION['button'] = 0;
  
}

 

else{

    $diff=time()-$_SESSION['time'];
    $diff=$mytime-$diff;// remaining time

    $hours =floor($diff/3600);
    $minute=(int)($diff/60);
    $second= $diff%60;
    $show= $hours.":".$minute.":".$second;



    $diff2=time()-$_SESSION['time2'];
    $diff2=$mytime2-$diff2;// remaining time

    $hours2 =floor($diff2/3600);
    $minute2=(int)($diff2/60);
    $second2= $diff2 % 60;
    $show2= $hours2.":".$minute2.":".$second2;

   
   
    $diff3=time()-$_SESSION['time3'];
    $diff3=$mytime3-$diff3;// remaining time

    $hours3 =floor($diff3/3600);
    $minute3=(int)($diff3/60);
    $second3= $diff3 % 60;
    $show3= $hours3.":".$minute3.":".$second3;
    $show3= $hours3.":".$minute3.":".$second3;
    //$leads_status = 0;
  
    
    if($_SESSION['button'] == 1)
    {
        ?>  <button onClick="window.location.reload();">Refresh Page</button><?php
    }


    if($diff=0||$diff<0)
    {
        echo "Timeout_1";
      $_SESSION['time']=time();
    //    echo("<meta http-equiv='refresh' content='1'>");
    //    echo "page refresh_1";
    $_SESSION['button'] = 1;
    }
    else
    {
        echo $show;
        
       // echo "ghg";
    }

    if($diff3=0||$diff3<0)
    {
        echo "Timeout_2";
      
      $_SESSION['time3']=time();
    //    echo("<meta http-equiv='refresh' content='1'>");
    //    echo "page refresh_2";
    $_SESSION['button'] = 1;
    }
    else
    {
    
        echo "<br>".$show3;
       // echo "ghg";
    }

    if($diff2=0||$diff2<0)
    {
        echo "Timeout_3";
        $_SESSION['time2']=time();
    //    echo("<meta http-equiv='refresh' content='1'>");
    //    echo "page refresh_3";
    $_SESSION['button'] = 1;
    }
    else
    {
        
        echo "<br>".$show2;
         
       // echo "ghg";
    }
 
    
          
       


}
        
?>
    