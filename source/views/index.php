<!DOCTYPE html>
<html>
<head>
<style>
h2 {
  font-family: arial, sans-serif;
}    

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>List of Form Data</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Message</th>
  </tr>
<?php foreach($form->query as $value): ?>
  <tr>
    <td><?= $value->id ?></td>
    <td><?= $value->email ?></td>
    <td><?= $value->phone ?></td>
    <td><?= $value->message ?></td>
  </tr>
<?php endforeach; ?>
</table>

</body>
</html>