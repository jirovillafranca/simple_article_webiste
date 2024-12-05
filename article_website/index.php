<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'; ?>

<h1 class="mb-4">Articles</h1>
<a href="create.php" class="btn btn-primary mb-3">Create New Article</a>

<?php
$query = "SELECT * FROM article ";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0): ?>
    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?= $row['image_url'] ?>" style = "height:200px;" class="card-img-top" alt="<?= $row['title'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['title'] ?></h5>
                        <p class="card-text"><?= substr($row['content'], 0, 100) ?>...</p>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php else: ?>
    <p>No articles found. <a href="create.php">Create one!</a></p>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>
