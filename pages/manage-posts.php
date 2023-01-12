<?php

    require dirname(__DIR__) . '/parts/header.php';
?>

<div class="container mx-auto my-5" style="max-width: 700px;">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h1 class="h1">Manage Posts</h1>
        <div class="text-end">
            <a href="/manage-posts-add" class="btn btn-primary btn-sm">Add New Post</a>
        </div>
    </div>
    <div class="card mb-2 p-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" style="width: 40%;">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( POST::getAllPost() as $post ) : ?>
                <tr>
                    <th scope="row"><?php echo $post['id']; ?></th>
                    <td><?php echo $post['title']; ?></td>
                    <td>
                        <?php switch($post['status']){
                            case 'publish':
                                echo '<span class="badge bg-success">Publish</span>';
                                break;
                            case 'pending':
                                echo '<span class="badge bg-warning">Pending review</span>';
                                break;
                        }?>
                        </class=>
                    </td>
                    <td class="text-end">
                        <div class="buttons">
                            <a href="/post" target="_blank" class="btn btn-primary btn-sm me-2"><i
                                    class="bi bi-eye"></i></a>
                            <a href="/manage-posts-edit?id=<?php echo $post['id']; ?>"
                                class="btn btn-secondary btn-sm me-2"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="text-center">
        <a href="/dashboard" class="btn btn-link btn-sm"><i class="bi bi-arrow-left"></i> Back to Dashboard</a>
    </div>
</div>

<?php

    require dirname(__DIR__) . '/parts/footer.php';