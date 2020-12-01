<!-- Ferris website -->
<!doctype html>
<html lang="en">
<?php include('./ssi/head.ssi') ?>

<body>
    <?php include('./ssi/nav.ssi') ?>


    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <?php include('./ssi/jumbotron.ssi') ?>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Events</h2>
                    <p>Ferris hosts tons of cool events like concerts, magic shows, comedians, and lots more that any student can attend!</p>
                    <p><a class="btn btn-secondary" href="Events.php" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Clubs</h2>
                    <p>Ferris has lots of Clubs for everyone like the LGBTQ clubs AEGIS and DSAGA. We also have clubs for certain majors like Bulldog Computer Professionals for everyone in a computer science field.</p>
                    <p><a class="btn btn-secondary" href="Clubs.php" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Fun Around Town</h2>
                    <p>Big rapids is a small town with alot to do! you can got you the roller rink, the many parks, hike the trails, or tube down the river!</p>
                    <p><a class="btn btn-secondary" href="FunAroundTown.php" role="button">View details &raquo;</a></p>
                </div>
            </div>

            <hr>

        </div> <!-- /container -->

    </main>
</body>
<?php include('./ssi/footer.ssi') ?>

</html>
