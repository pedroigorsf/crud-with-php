<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>

    <tbody>

        <?php include_once 'query.php'; ?>
        <tr>
        <a href="form.php" class="btn">Insert a new data</a>
        </tr>

    </tbody>
</table>