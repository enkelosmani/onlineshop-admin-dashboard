<?php use \Admin\Lib\User;

include "inc/header.php" ?>
<?php include "inc/adminnav.php" ?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Delete User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Delete User</li>
        </ol>

        <?php
        $user = null;
        if (isset($_GET['id'])) {
            $user = new User();
            $user = $user->find_id($_GET['id']);
        }

        if (isset($_POST['delete'])) {
            $user->delete();
            header("Location: users.php");
        }
        ?>

        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label class="small mb-1" for="firstname">First name</label>
                    <input class="form-control py-4" name="firstname" id="firstname" readonly type="text" value="<?php echo $user->firstname?>"/>
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="lastname">Last name</label>
                    <input class="form-control py-4" name="lastname" id="lastname" readonly type="text" value="<?php echo $user->lastname?>"/>
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="phone">Phone</label>
                    <input class="form-control py-4" name="phone" id="phone" readonly type="tel" value="<?php echo $user->phone?>"/>
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                    <input class="form-control py-4" id="inputEmailAddress" readonly name="email" type="email" value="<?php echo $user->email?>"/>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button type="submit" class="btn btn-primary" name="delete">Delete</button>
                </div>
            </form>
        </div>

    </div>
</main>


<?php include "inc/footer.php" ?>
