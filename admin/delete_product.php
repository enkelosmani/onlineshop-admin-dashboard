<?php include "inc/header.php" ?>
<?php include "inc/adminnav.php" ?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Delete Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Delete Product</li>
        </ol>

        <?php
        $product = null;
        if (isset($_GET['id'])) {
            $product = new \Admin\Lib\Product();
            $product = $product->find_id($_GET['id']);
        }

        if (isset($_POST['delete'])) {

            $product->delete();
            header("Location: products.php");
        }
        ?>

        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label class="small mb-1" for="name">Name</label>
                    <input class="form-control py-4" name="name" id="name" readonly type="text" value="<?php echo $product->name?>"/>
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="description">Description</label>
                    <input class="form-control py-4" name="description" readonly id="description" type="text" value="<?php echo $product->description?>"/>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                </div>
            </form>
        </div>

    </div>
</main>


<?php include "inc/footer.php" ?>
