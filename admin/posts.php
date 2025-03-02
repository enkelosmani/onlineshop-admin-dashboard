<?php include "inc/header.php" ?>
<?php include "inc/adminnav.php" ?>
<?php
use \Admin\Lib\Product;
use \Admin\Lib\User;
?>
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Posts</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Posts</li>
                <table class="table table-light">>
            </ol>
                           <thead>
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Author</th>
                                <th>Image</th>
                                <th>Product</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Author</th>
                                <th>Image</th>
                                <th>Product</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                            </tfoot>
                            <tbody>

                            <?php

                            $post = new \Admin\Lib\Post();
                            $posts = $post->find_all();
                            foreach ($posts as $p) {
                                echo "<tr>";
                                echo "<td>" . $p->title . "</td>";
                                echo "<td>" . $p->content . "</td>";
                                echo "<td>" . $p->author . "</td>";
                                echo "<td>" . $p->image_url . "</td>";

                                $product = new Product();
                                $product = $product->find_id($p->product_id);
                                echo "<td>" . $product->name . "</td>";
                                echo "<td><a href='/admin/edit_post.php?id=". $p->id ."'>Edit</a></td>";
                                echo "<td><a href='/admin/delete_post.php?id=". $p->id ."'>Delete</a></td>";
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