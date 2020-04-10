<!DOCTYPE html>
<html>
<head>
    <title>Setting | Keeping on Doing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="../js/register.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <?php require("../nav.php"); ?>
    </div>
    <div class="row container">
        <div class="col-lg-12 container">
            <h3>Your information</h3>
            <div class="well">
            <?php if (isset($_GET['status']) && $_GET['status'] == 'updated') { ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Information updated.
                </div>
            <?php } ?>
            <?php if (isset($_GET['status']) && $_GET['status'] == 'incorrect') { ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Password incorrect.
                </div>
            <?php } ?>
                <form method="POST" action="userop.php?action=update">
                    <input type="hidden" id="uid" name="uid" value="<?php echo $uid; ?>" required>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nickname">Nickname</label>
                        <input type="text" class="form-control" id="nickname" name="nickname" value="<?php echo $nickname; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" value="<?php echo $email; ?>" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="password_old">Origin password</label>
                        <input type="password" class="form-control" id="password_old" name="password_old" required>
                    </div>
                    <div class="form-group">
                        <label for="password">New password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <p class="help-block">Enter a new password if you want to update it.</p>
                    </div>
                    <div class="form-group">
                        <label for="password_check">New password check</label>
                        <input type="password" class="form-control" id="password_check" name="password_check">
                        <p class="text-danger" id="password_not_match">Passwords didn't match.</p>
                    </div>
                    <p class="text-right"><button type="submit"class="btn btn-primary" id="submit">Save</button></p>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>