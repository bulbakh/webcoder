<h3>Add Department</h3>
<form action="/department/save" method="post">
    <div class="form-group mb-3">
        <label for="name">Department Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
    <a href="/department/index" class="btn btn-secondary">
        Cancel
    </a>
</form>
