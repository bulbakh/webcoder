<h3>Add Worker</h3>
<form action="/worker/save" method="post">
    <div class="form-group mb-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $request['email'] ?? '' ?>"
               required>
    </div>
    <div class="form-group mb-3">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $request['name'] ?? '' ?>">
    </div>
    <div class="form-group mb-3">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address"><?= $request['address'] ?? '' ?></textarea>
    </div>
    <div class="form-group mb-3">
        <label for="phone">Phone:</label>
        <input type="tel" class="form-control" id="phone" name="phone" value="<?= $request['phone'] ?? '' ?>">
    </div>
    <div class="form-group mb-3">
        <label for="comments">Comments:</label>
        <textarea class="form-control" id="comments" name="comments"><?= $request['comments'] ?? '' ?></textarea>
    </div>
    <div class="form-group mb-3">
        <label for="department_id">Department:</label>
        <select class="form-control" id="department_id" name="department_id">
            <option value="0">Select...</option>
            <?php /** @var array $departments */
            foreach ($departments as $department): ?>
                <option value="<?= $department['id'] ?>"
                    <?= isset($request) && $request['department_id'] == $department['id'] ? 'selected' : '' ?>>
                    <?= $department['name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add Worker</button>
    <a href="/worker/index" class="btn btn-secondary">
        Cancel
    </a>
</form>

