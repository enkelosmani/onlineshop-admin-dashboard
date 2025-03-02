<?php include "inc/header.php" ?>
<?php include "inc/adminnav.php" ?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Add User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Add User</li>
        </ol>

        <?php
                if (isset($_POST['save'])) {
                $user = new \Admin\Lib\User();

                $user->setFirstname($_POST['firstname']);
                $user->setLastname($_POST['lastname']);
                $user->setPhone($_POST['phone']);
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);
                $user->setPhotoImage($_FILES['photo_image']);

                $user->create();

                    header("Location: users.php");
            }
                ?>

        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="small mb-1" for="firstname">First name</label>
                    <input class="form-control py-4" name="firstname" id="firstname" type="text" />
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="lastname">Last name</label>
                    <input class="form-control py-4" name="lastname" id="lastname" type="text" />
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="phone">Phone</label>
                    <input class="form-control py-4" name="phone" id="phone" type="tel" />
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                    <input class="form-control py-4" id="inputEmailAddress" name="email" type="email"/>
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="password">Email</label>
                    <input class="form-control py-4" name="password" id="password" type="password"/>                </div>
                <div class="form-group">
                    <label class="small mb-1" for="photo_image">Add Photo</label>
                    <input class="form-control py-4" name="photo_image" id="photo_image" type="file" />
                </div>

                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                </div>
            </form>
        </div>

    </div>
</main>


<?php include "inc/footer.php" ?>
