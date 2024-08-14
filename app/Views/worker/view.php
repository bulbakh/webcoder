<a href="/worker/index" class="btn btn-secondary mb-3">Back</a>
<table class="table table-striped">
    <?php foreach ($worker as $key => $value): ?>
        <tr>
            <th><?= $key ?></th>
            <td><?= $value ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="/worker/index" class="btn btn-secondary">Back</a>