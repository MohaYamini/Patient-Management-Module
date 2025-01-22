<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {foreach $patients as $patient}
        <tr>
            <td>{$patient.id}</td>
            <td>{$patient.first_name} {$patient.last_name}</td>
            <td>{$patient.dob|date_format:"%d-%m-%Y"}</td>
            <td>{$patient.email}</td>
            <td>
                <a href="update.php?id={$patient.id}" class="btn btn-warning">Edit</a>
                <a href="delete.php?id={$patient.id}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>
