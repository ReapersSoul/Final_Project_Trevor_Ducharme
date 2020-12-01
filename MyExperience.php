<!doctype html>
<html lang="en">
<?php include('./ssi/head.ssi') ?>

<body>
    <?php include('./ssi/nav.ssi') ?>
    <?php
        //check post for coments
        if (!empty($_POST['comment'])) {
            $myfile = fopen("comments.txt", "a");
            fwrite($myfile, "<noscript><h3>".$_POST['comment']."</h3></noscript>");
            fclose($myfile);
        }
     ?>


     <!-- acctual body -->
     <div class="col-12" align="center">
         <div class="col-4" align="center">
             <h1>My Experience With Ferris</h1>
         </div>
     </div>
     <div class="col-12" align="center">
         <div class="col-8" align="left">
             <h5> I've had many great experiences at ferris state. i've done many things that i never thought i would, and met many interesting people i never would have if i had gone anywhere else.</h5>
         </div>
     </div>



     <!-- acctual body -->

    <form class="mt-5" action="MyExperience.php" method="post">
        <div class="col-12" align="center">
            <div class="col-4" align="center">
                <textarea name="comment" rows="4" cols="50"></textarea>
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>

    <div class="col-12 mt-5" align="center">
        <div class="col-4" align="center">
            <h1>Share Your Experiences:</h1>
    <?php
        //echo coments
        $myfile = fopen("comments.txt", "r");
        if(filesize("comments.txt")>0){
            echo fread($myfile, filesize("comments.txt"));
        }
        fclose($myfile);
     ?>
 </div>
</div>
</body>
<?php include('./ssi/footer.ssi') ?>

</html>
