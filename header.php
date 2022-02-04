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
    var ip;

    function get_ip() {
        $.getJSON("https://api.ipify.org?format=json", function(data) {
            ip = data.ip;
        })
    };

    get_ip();

    function register_active_user() {
        xmlhttp = new XMLHttpRequest();

        if (xmlhttp != null) {
            xmlhttp.open("POST", "./db.php", true);
            xmlhttp.send("ip=" + ip + '&type=register');
            return true;
        }

    }

    function fnUnloadHandler() {
        xmlhttp = new XMLHttpRequest();

        if (xmlhttp != null) {
            xmlhttp.open("POST", "./db.php", true);
            xmlhttp.send('ip=' + ip + '&type=unload');
        }
    }
    </script>
</head>