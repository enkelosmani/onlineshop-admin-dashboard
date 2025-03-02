<?php include "inc/header.php"; ?>
<?php include "inc/adminnav.php"; ?>
<?php
use Admin\Lib\User;
?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Users</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Users</li>
        </ol>

            <?php
            if (!empty($session->message)) {
                echo $session->message;
            }


            if (!$session->isAdministrator()) {
                header("Location: index.php");
            }
            ?>

                    <table class="table table-light">
                        <thead>
                        <tr>
                            <th scope="col">Photo</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Role</th>
                            <th scope="col">Email</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th scope="col">Photo</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Role</th>
                            <th scope="col">Email</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        $user = new User();
                        $users = $user->find_all();
                        foreach ($users as $anetar) {
                            echo "<tr>";
                            echo "<td><img src='uploads/{$anetar->photo}' alt='User Photo'></td>";
                            echo "<td>{$anetar->firstname}</td>";
                            echo "<td>{$anetar->lastname}</td>";
                            echo "<td>{$anetar->phone}</td>";
                            echo "<td>{$anetar->role}</td>";
                            echo "<td>{$anetar->email}</td>";
                            echo "<td><a href='/admin/edit_user.php?id={$anetar->id}'>Edit</a></td>";
                            echo "<td><a href='/admin/delete_user.php?id={$anetar->id}'>Delete</a></td>";
                            echo "</tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "inc/footer.php"; ?>
