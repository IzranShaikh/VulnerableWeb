<?php
    include"includes/header.php";
    include"includes/topnav.php";
    include"includes/sidebar.php";
    if(!isset($_SESSION['session_username']))
    {
        header("Location: login.php");
    }
    if(isset($_POST['submit_comment']))
    {
        $comment_content = $_POST['comment_content'];
        $commentby = $_SESSION['session_username'];
        if($comment_content == '')
        {
            $comment_content = "(BLANK COMMENT)";
        }
        echo $query = "INSERT INTO vwacomments(comment_by,comment_content) VALUES('$commentby','$comment_content')";
        $add_comment_query = mysqli_query($connection,$query);
        header("Location: xssstored.php");
    }
?>

<center><h2>How's Our Website</h2></center><br><br>
<div class="container">
    <form action="xssstored.php" method="post">
        <label for="comment">Leave a Comment:</label>
<!--        <script type="text/javascript" src="tinymce/tinymce.min.js"></script>-->
        <script>
            tinymce.init({ selector:'textarea',entity_encoding: "raw" });
//            tinymce.init({
//
//                selector: "textarea",
//                theme: "modern",
//                width:900,
//                height:300,
//                plugins: [
//                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
//                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
//                    "save table contextmenu directionality emoticons template paste textcolor"
//                ],
//                content_css: "css/content.css",
//                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l    ink image | print previes media fullpage | forecolor backcolor emoticons",
//                style_formats: [
//                    {title: 'Bold text' , inline: 'b'},
//                    {title: 'Red text' , inline: 'span' , styles: {color:'#ff0000'} },
//                    {title: 'Red header' , block: 'h1' ,styles: {color:'#ff0000'} },
//                    {title: 'Example 1' , inline: 'span' , classes: 'example1'},
//                    {title: 'Example 2' , inline: 'span' , classes: 'example2'},
//                    {title: 'Table styles'},
//                    {title: 'Table row 1' , selector: 'tr' , classes: 'tablerow1'}
//                ]
//
//            });
        </script>
        <br>
        <textarea class="form-control" name="comment_content" style="background: rgba(0, 0, 0, 0) url(&quot;assets/images/benice.png&quot;) no-repeat scroll center center;" rows="10"></textarea><br><br>
        <input type="submit" name="submit_comment" value="Comment" class="btn btn-primary" />
    </form>
    <hr>
    <pre>Comments</pre>
    <?php
    
        $query = "SELECT * FROM vwacomments ORDER BY comment_id DESC";
        $get_comments_query = mysqli_query($connection,$query);
        while($data_fetched = mysqli_fetch_assoc($get_comments_query))
        {
            $comment_by = $data_fetched['comment_by'];
            $comment_content = $data_fetched['comment_content'];
            ?>
            <div class="col-xs-12">
                <h5><?php echo $comment_by; ?></h5>
                <?php echo $comment_content; ?><hr>
            </div>
            <?php
        }
        
    ?>
</div>

<?php
    include"includes/footer.php";
?>