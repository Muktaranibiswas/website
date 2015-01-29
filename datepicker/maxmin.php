<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Datepicker - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>

        $(function() {

            $( "#datepicker1" ).datepicker({
                dateFormat:'yy-mm-dd',

               // yearRange: "2015:2016"

             /*   minDate:'2015-01-26',
                maxDate:'2015-12-31'*/

             /*  minDate: -20,
                maxDate:+20*/

              minDate: '-3D -3M',
                maxDate: '+5D +3M'

        });
        });


    </script>
</head>
<body>
<p>Date: <input type="text" id="datepicker1"></p>

</body>
</html>