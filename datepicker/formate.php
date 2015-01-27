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
            $( "#datepicker1" ).datepicker({ dateFormat: "yy-mm-dd" });
            $( "#datepicker2" ).datepicker({ dateFormat: "yy/mm/dd" });
            $( "#datepicker3" ).datepicker({ dateFormat: "d, M y" });
            $( "#datepicker4" ).datepicker({ dateFormat: "d MM, y" });
            $( "#datepicker5" ).datepicker({ dateFormat: "DD, dMM, yy" });
            $( "#datepicker6" ).datepicker({ dateFormat: "d, MM, yy" });
        });
    </script>
</head>

<body>
<p>Date: <input type="text" id="datepicker1"></p>
<p>Date: <input type="text" id="datepicker2"></p>
<p>Date: <input type="text" id="datepicker3"></p>
<p>Date: <input type="text" id="datepicker4"></p>
<p>Date: <input type="text" id="datepicker5"></p>
<p>Date: <input type="text" id="datepicker6"></p>
</body>
</html>