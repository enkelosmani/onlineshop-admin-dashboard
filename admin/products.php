<?php include "inc/header.php" ?>
<?php include "inc/adminnav.php" ?>
<?php
use \Admin\Lib\Product;
use \Admin\Lib\User;
?>
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Products</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Products</li>
                <table class="table table-light">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </tfoot>
                    <tbody>

                            <?php
                            $product = new Product();
                            $products = $product->find_all();
                            foreach ($products as $p) {
                                echo "<tr>";
                                echo "<td>" . $p->name . "</td>";
                                echo "<td>" . $p->description . "</td>";
                                echo "<td><a href='/admin/edit_product.php?id=" . $p->id . "'>Edit</a></td>";
                                echo "<td><a href='/admin/delete_product.php?id=" . $p->id . "'>Delete</a></td>";
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
<?php include "inc/footer.php" ?>