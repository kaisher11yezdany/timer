<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>


<script>
    $(document).ready(function(){
        setInterval(function(){
                $("#show").load("timer.php");
        },1000);
    });

    $(document).ready(function(){
        setInterval(function(){
                $("#show2").load("timer.php");
        },1000);
    });
</script>
<br>
<p id= "show"></p>
<br>
 