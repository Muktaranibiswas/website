<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Datepicker - Localize calendar</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="datepicker-ar.js"></script>
    <script src="datepicker-fr.js"></script>
    <script src="datepicker-he.js"></script>
    <script src="datepicker-zh-TW.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            $( "#datepicker" ).datepicker( $.datepicker.regional[ "fr" ] );
            $( "#locale" ).change(function() {
                $( "#datepicker" ).datepicker( "option",
                    $.datepicker.regional[ $( this ).val() ] );
            });
        });
    </script>
</head>
<body>
<p>Date: <input type="text" id="datepicker">&nbsp;
    <select id="locale">
        <option value="ar">Arabic (&#8235;(&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577;</option>
        <option value="zh-TW">Chinese Traditional (&#32321;&#39636;&#20013;&#25991;)</option>
        <option value="">English</option>
        <option value="fr" selected="selected">French (Fran&ccedil;ais)</option>
        <option value="he">Hebrew (&#8235;(&#1506;&#1489;&#1512;&#1497;&#1514;</option>
    </select></p>
</body>
</html>