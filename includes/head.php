<!-- Website head placed here -->
    
<head>

    <meta charset="utf-8">

    <title><?php if (isset($title)) {echo $title;}
        else {echo "Smart Home";} ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./vendor/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="./vendor/css/bootswatch.min.css">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
    <script src="./vendor/js/bootstrap.min.js"></script>
    <script src="./vendor/js/bootswatch.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
           $("#from_date").datepicker({
               maxDate: -1,
               minDate: "2015-01-01",
               dateFormat:"yy-mm-dd"
            });
            $("#to_date").datepicker({
               maxDate: -1,
               minDate: "2015-01-01",
               dateFormat:"yy-mm-dd"
            });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('fieldset#kRoom button').click(function() {
          var buttonValue = $(this).attr('value');
          $.ajax({
              type: "POST",
              url: "common/scripts/command.php",
              data: "name=" + buttonValue
          }).done(function(data) {
            $('#command-output').html(data);
          });
        });
      });
    </script>
</head>