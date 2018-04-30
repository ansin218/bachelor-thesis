<!-- Alarm Status -->
<script type="text/javascript">
    $(document).ready(function(){
      alarm();
    });

    function alarm(){
        $('#temp').load('common/scripts/temp.txt', function(){
           setTimeout(alarm, 1000);
           console.log("hei");
        });
    }
</script> 

<!-- PIR Status -->

<script type="text/javascript">
    $(document).ready(function(){
      motion();
    });

    function motion(){
        $('#mstatus').load('common/scripts/mstatus.txt', function(){
           setTimeout(motion, 1000);
        });
    }
</script> 

<!-- LDR  Status -->

<script type="text/javascript">
    $(document).ready(function(){
      ldr();
    });

    function ldr(){
        $('#lstatus').load('common/scripts/lstatus.txt', function(){
           setTimeout(ldr, 1000);
        });
    }
</script> 


