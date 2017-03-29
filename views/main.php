<!Doctype>
<html>
    <head>
        <title>Shareboard</title>
        <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/style.css"
    </head>

    <body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">User Registration</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
                    <li><a href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
                </ul>
                <?php if(isset($_SESSION['is_logged_in'])) :?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo ROOT_URL; ?>">Welcome <? echo ucwords($_SESSION['user_data']['name']); ?> </a></li>
                        <li><a href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
                    </ul>
                <?php else : ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
                        <li><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
                    </ul>
                <?php endif; ?>
            </div><!--/.nav-collapse -->
        </div>
    </nav>


    <div class="container body-container">
       <div class="row">
           <div class="messages">
               <?php Messages::display() ?>
           </div>
        <?php require($view); ?>
        </div>
    </div><!-- /.container -->


    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </body>
</html>