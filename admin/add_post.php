<?php include "inc/header.php" ?>
<?php include "inc/adminnav.php" ?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Add Post</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Add Post</li>
        </ol>

        <?php
        $post = null;

        if (isset($_POST['save'])) {
            $post = new \Admin\Lib\Post();

            $post->setTitle($_POST['title']);
            $post->setContent($_POST['content']);
            $post->setAuthor($_POST['author']);
            $post->setProductId($_POST['product_id']);

            $post->create();
            header("Location: posts.php");
        }
        ?>

        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label class="small mb-1" for="title">title</label>
                    <input class="form-control py-4" name="title" id="title" type="text"/>
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="content">content</label>
                    <input class="form-control py-4" name="content" id="content" type="text"/>
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="content">author</label>
                    <input class="form-control py-4" name="author" id="author" type="text"/>
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="product_id">product</label>
                    <select name="product_id" id="product_id">
                        <option value="0">Zgjedh kategorine</option>
                        <?php
                        $product = new \Admin\Lib\Product();
                        $products = $product->find_all();
                        foreach ($products as $p) {
                            echo "<option value='{$p->id}'>{$p->name}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                </div>
            </form>
        </div>

    </div>
</main>


<?php include "inc/footer.php" ?>
