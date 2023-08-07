<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>
<main id='post-container'>
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem vitae, commodi quisquam repellat placeat nemo aspernatur accusamus voluptatum asperiores doloremque aliquam porro beatae odit facere eveniet corporis veritatis alias nisi?
            Sint, cum doloribus quam magni ratione quae voluptatibus ipsam tenetur eos sequi at consequuntur amet aliquam placeat aperiam, id saepe, voluptate veritatis asperiores fugiat. Est molestiae amet quam accusamus necessitatibus.
            Dolorum esse reiciendis iusto numquam labore, quam, amet cupiditate quasi maiores mollitia aperiam nobis, ipsam itaque? Cupiditate magni excepturi beatae molestiae voluptatum provident quasi deserunt unde! Cumque distinctio quae repellat.
            Quidem sed magnam asperiores quam? Eum recusandae magnam voluptate omnis animi minima tempora nam qui aut molestiae impedit ab accusamus nesciunt atque, repellendus inventore voluptatum magni praesentium dolorum molestias veniam.
            Nostrum a, aliquam dolor architecto quidem, pariatur sit accusantium reprehenderit iusto corporis obcaecati, esse nemo alias quos veritatis temporibus maxime fuga? Inventore quidem autem quia explicabo quas omnis assumenda dignissimos.</p>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem vitae, commodi quisquam repellat placeat nemo aspernatur accusamus voluptatum asperiores doloremque aliquam porro beatae odit facere eveniet corporis veritatis alias nisi?
            Sint, cum doloribus quam magni ratione quae voluptatibus ipsam tenetur eos sequi at consequuntur amet aliquam placeat aperiam, id saepe, voluptate veritatis asperiores fugiat. Est molestiae amet quam accusamus necessitatibus.
            Dolorum esse reiciendis iusto numquam labore, quam, amet cupiditate quasi maiores mollitia aperiam nobis, ipsam itaque? Cupiditate magni excepturi beatae molestiae voluptatum provident quasi deserunt unde! Cumque distinctio quae repellat.
            Quidem sed magnam asperiores quam? Eum recusandae magnam voluptate omnis animi minima tempora nam qui aut molestiae impedit ab accusamus nesciunt atque, repellendus inventore voluptatum magni praesentium dolorum molestias veniam.
            Nostrum a, aliquam dolor architecto quidem, pariatur sit accusantium reprehenderit iusto corporis obcaecati, esse nemo alias quos veritatis temporibus maxime fuga? Inventore quidem autem quia explicabo quas omnis assumenda dignissimos.</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php
include_once("templates/footer.php");
?>