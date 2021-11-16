<?php
get_header();
$heroImageArray = get_field('page_image');
$heroImage = $heroImageArray['sizes']['large'];
$image = get_field("image");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class>
    <section class="portfolioBody">   
            

                <h1>I am the portfolio page. </h1>
                <h1>Add your images here.</h1>
                <div>
                <?php
                echo the_content();
                ?>
                </div>
                
    </section>
</body>
</html>


<?php
get_footer();
?>