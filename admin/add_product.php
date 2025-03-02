<?php include "inc/header.php" ?>
<?php include "inc/adminnav.php" ?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Add Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Add Product</li>
        </ol>

        <?php
        $category = null;

        if (isset($_POST['save'])) {
            $category = new \Admin\Lib\Product();
            $category->setName($_POST['name']);
            $category->setDescription($_POST['description']);

            $category->create();
            header("Location: products.php");
        }
        ?>

        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label class="small mb-1" for="name">Name</label>
                    <input class="form-control py-4" name="name" id="name" type="text"/>
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="description">Description</label>
                    <input class="form-control py-4" name="description" id="description" type="text"/>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                </div>
            </form>
        </div>

    </div>
</main>


<?php include "inc/footer.php" ?>
