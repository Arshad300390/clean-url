<?php
include "connect.php";
if (isset($_POST['submit'])) {
    $titls = mysqli_real_escape_string($con, $_POST['titls']);
    $details = mysqli_real_escape_string($con, $_POST['detls']);
    $post_title = htmlentities($titls);
    $post_text = htmlentities($details);
    $slug = strtolower($titls);
    $slug = ' ' . str_replace(' ', '-', $slug);
    function slug($string)
    {
        $slug = preg_replace('/[^a-z0-9-]+/', '-', trim(strtolower($string)));
        return $slug;
    }

    $query = "INSERT INTO tbl_post (post_title, post_text, post_url) VALUES
    ('" . $post_title . "', '" . $post_text . "', '" . slug($post_title) . "')";
    $b = mysqli_query($con, $query);
    if ($b) {
        echo "Account created successfully";
//echo" <script>window.open('http://localhost/code/show-article.php','_self')</script>";
        header("location:show-article");
    } else {
        echo "Article posted successfully";
    }
}
?>
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

    #autoresizing {
        display: block;
        overflow: hidden;
        resize: none;
    }
    </style>
</head>

<body>
    <!-- <?php include 'menu.php';?> -->
    <br><br>
    <div class="container text-left pt-4">
        <form method="POST" enctype="multipart/form-data">
            <input class="ptw mt-1" type="text" name="titls" placeholder="Write article title" required><br>
            <input class="ptw mt-1" type="text" name="slag" placeholder="Write article slug" required><br>
            <textarea id="autoresizing" rows="8" class="ptw mt-1" placeholder="Write article detail" name="detls"
                required></textarea>
            <button class="prbtn ptw mt-1" name="submit">Post product</button>
        </form>
    </div>
    <script type="text/javascript">
    textarea = document.querySelector("#autoresizing");
    textarea.addEventListener('input', autoResize, false);

    function autoResize() {
        this.style.height = 'auto';
        this.style.height = this.scrollHeight + 'px';
    }
    </script>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
</body>

</html>