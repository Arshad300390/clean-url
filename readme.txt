RewriteEngine On
RewriteCond %{QUERY_STRING} ^post_url=([^&]+)
RewriteRule ^clean-url/post/(.*)$ /clean-url/post/$1? [L,R=301]
 these rules are not required in this case



 nice-article.php 
 <!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="canonical" href="" />
    <style>
    a:link {
        text-decoration: none;
        color: white;
    }

    a:hover {
        color: orange;
    }

    .tm {
        width: 100%;
        height: 420px;
        border-radius: 8px;
    }

    .prbtn {
        background-color: dodgerblue;
        color: white;
        border: none;
        padding: 4px 10px;
    }
    </style>
</head>

<body>

    <body>
        <h1>nice article</h1>
        <!-- <?php include 'menu.php';?> -->
        <br><br>
        <?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
include "connect.php";
if (isset($_GET['url'])) {
    $id = ($_GET['url']);
    echo $id;
    include "connect.php";
    $query2 = "select * from tbl_post where post_id='$id'";
    $result2 = mysqli_query($con, $query2);
    $row2 = mysqli_fetch_object($result2);
    ?>
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="bkg card-body">
                            <br>
                            <h1 class="mt-1"><?=$row2->post_title?></h1>
                            <p>Detail : <?=$row2->post_text?></p>
                            <br><br>
                        </div>
                    </div>
                </div>
                <?php
}
?>
            </div>
        </div>

    </body>

</html>