<a href="/department/add" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Add
</a>
<table class="table table-striped">
    <thead>
    <?php // @todo назви полів додати в модель ?>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php /** @var array $departments */
    foreach ($departments as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td>
                <a href="/department/delete/<?= $row['id'] ?>" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="/department/add" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Add
</a>