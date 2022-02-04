<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="main.css">

    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
    <link href="code.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>

    <script language="javascript">
    function get_ip() {
        $.getJSON("https://api.ipify.org?format=json", function(data) {
            return data.ip;
        })
    };
    var ip = get_ip();

    function register_active_user() {
        xmlhttp = null;
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        }

        if (xmlhttp != null) {
            xmlhttp.open("POST", "db.php", true);
            xmlhttp.send("ip=" + ip + '&type=register');
        }

    }

    function fnUnloadHandler() {
        xmlhttp = null;
        if (window.XMLHttpRequest) { // code for Firefox, Opera, IE7, etc. 
            xmlhttp = new XMLHttpRequest();
        } else if (window.ActiveXObject) { // code for IE6, IE5 
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        }

        if (xmlhttp != null) {
            xmlhttp.open("POST", "./db.php", true);
            xmlhttp.send('ip=' + escape(document.referrer) + '&type=unload');
        }
    }
    </script>
</head>