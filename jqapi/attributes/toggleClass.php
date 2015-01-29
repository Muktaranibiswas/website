<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <style type="text/css">
        .wrap > div {
            float: left;
            width: 100px;
            margin: 1em 1em 0 0;
            padding=left: 3px;
            border: 1px solid #abc;
        }
        div.a {
            background-color: aqua;
        }
        div.b {
            background-color: burlywood;
        }
        div.c {
            background-color: cornsilk;
        }
    </style>

</head>
<body>
<div class="buttons">
    <button>toggle</button>
    <button class="a">toggle a</button>
    <button class="a b">toggle a b</button>
    <button class="a b c">toggle a b c</button>
    <a href="#">reset</a>
</div>
<div class="wrap">
    <div></div>
    <div class="b"></div>
    <div class="a b"></div>
    <div class="a c"></div>
</div>

<script type="text/javascript">
    var cls = [ "", "a", "a b", "a b c" ];
    var divs = $( "div.wrap" ).children();
    var appendClass = function() {
        divs.append(function() {
            return "" + ( this.className || "none" ) + "";
        });
    };
    appendClass();
    $( "button" ).on( "click", function() {
        var tc = this.className || undefined;
        divs.toggleClass( tc );
        appendClass();
    });
    $( "a" ).on( "click", function( event ) {
        event.preventDefault();
        divs.empty().each(function( i ) {
            this.className = cls[ i ];
        });
        appendClass();
    });

</body>
</html>