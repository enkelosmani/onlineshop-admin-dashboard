<?php include "inc/header.php" ?>
<?php include "inc/adminnav.php" ?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Delete Post</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Delete Post</li>
        </ol>

        <?php
        $post = null;
        if (isset($_GET['id'])) {
            $post = new \Admin\Lib\Post();
            $post = $post->find_id($_GET['id']);
        }

        if (isset($_POST['delete'])) {
            $post->delete();
            header("Location: posts.php");
        }
        ?>

        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label class="small mb-1" for="title">title</label>
                    <input class="form-control py-4" name="title" id="title" readonly type="text" value="<?php echo $post->title?>"/>
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="content">content</label>
                    <input class="form-control py-4" name="content" id="content"readonly type="text" value="<?php echo $post->content?>"/>
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="content">author</label>
                    <input class="form-control py-4" name="author" id="author"readonly type="text" value="<?php echo $post->author?>"/>
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="product_id">product</label>
                    <select name="product_id" disabled id="product_id">
                        <option value="0">Zgjedh kategorine</option>
                        <?php
                        $product = new \Admin\Lib\Product();
                        $products = $product->find_all();
                        foreach ($products as $p) {
                            if ($p->id === $post->product_id){
                                echo "<option value='{$p->id}' selected>{$p->name}</option>";
                            } else {
                                echo "<option value='{$p->id}'>{$p->name}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                </div>
            </form>
        </div>

    </div>
</main>


<?php include "inc/footer.php" ?>
