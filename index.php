<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>2016 Marketing Offsite Survey</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/jumbotron-narrow.css">
        <style>
            .thumbnail {
                padding:0;
            }
            .error{ color: #c00;}
        </style>
    </head>


<?php  
// $host = "calmys1db01.fglsports.dmz";
// $user = "meetingsched";
// $pass = "meetingsched";
// $db = "meetingsched";

$host = "calmys1db01.fglsports.dmz";
$user = "marketingawards";
$pass = "marketingawards";
$db = "marketingawards";


$connection = mysqli_connect($host, $user, $pass, $db);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$q = "select * from awards";
$awards_result = mysqli_query($connection, $q);

?>
    <body>
        <div class="container">

            
              <div class="jumbotron">
                <h2>2016 Marketing Offsite Survey</h2>

                <p>Here's your chance to recognize your fellow teammates!  For the following award categories, please select the marketing team member that you feel is most deserving.</p>
                <p>&nbsp;</p>

                <form id="regform">
                <?php
                while($row = $awards_result->fetch_assoc()){
                ?>                    
                    <h3><?=$row['name']?></h3>
                    <p class=""><?=$row['desc']?></p> 

                    <select class="form-control" name="<?=$row['id']?>" id="award<?=$row['id']?>">
                        <option value=""></option>
                    <?php
                        $q = "select * from people";
                        $result = mysqli_query($connection, $q);
                        while($row2 = $result->fetch_assoc()){
                    ?> 
                        <option value="<?=$row2['id'] ?>"><?=$row2['name']?></option>
                    <?php 
                        }
                    ?>
                    </select>
                    <hr />
                <?php 
                } //endwhile
                ?>

                
                <p><a id="submit" class="btn btn-lg btn-success" href="#" role="button">Send Votes</a></p> 

                </form>
              </div>

             
        </div>                                

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/send.js"></script>
    </body>

</html>