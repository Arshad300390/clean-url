<!DOCTYPE html>
<html>

<head>
    <title></title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/519802a1d4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/
libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="pic12.jpg" type="image/jpg">
    <style>
    a:link {
        text-decoration: none;
    }

    a:hover {
        color: orange;
    }

    .ptw {
        width: 100%;
        padding: 1px 4px;
    }

    .pim {
        border: 1px solid black;
    }

    .prbtn {
        background-color: dodgerblue;
        color: white;
        border: none;
    }
    </style>
</head>

<body>
    <!-- <?php include 'menu.php';?> -->
    <br><br>
    <div class="container pt-4">
        <div class="mt-4">
            <div class="row">
                <?php
include "connect.php";
$query1 = "select * from tbl_post";
$result1 = mysqli_query($con, $query1);
while ($row1 = mysqli_fetch_object($result1)) {

    ?>
                <div class="col-sm-9">
                    <p><a style="color: blue;"
                            href="http://localhost:8080/clean-url/nice-article/<?=$row1->post_url?>?url=<?=$row1->post_url?>">
                            <h2><?=$row1->post_url?></h2>
                        </a>
                    </p>
                </div>
                <?php
}
?>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <script>
    function getURLParameter(name) {
        return decodeURI((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search) || [, null])[1]);
    }

    function hideURLParams() {
        // Parameters to hide (e.g., ?success=value, ?error=value, etc)
        var hide = ['success', 'error'];
        for (var i = 0; i < hide.length; i++) {
            var paramName = hide[i];
            if (getURLParameter(paramName)) {
                history.replaceState(null, document.getElementsByTagName("title")[0].innerHTML, window.location
                    .pathname);
            }
        }
    }

    // Call the hideURLParams function to hide unwanted parameters on page load
    hideURLParams();
    </script>
</body>

</html>