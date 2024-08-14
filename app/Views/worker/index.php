<a href="/worker/add" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Add
</a>
<table class="table table-striped">
    <thead>
    <?php //@todo назви полів додати в модель ?>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Comments</th>
        <th>Department Name</th>
    </tr>
    </thead>
    <tbody>
    <?php /** @var array $workers */
    foreach ($workers as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><a href="/"><?= $row['email'] ?></a></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['address'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['comments'] ?></td>
            <td><?= $row['department_name'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="/worker/add" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Add
</a>