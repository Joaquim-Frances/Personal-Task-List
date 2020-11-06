<body>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Task</th>
      <th scope="col">Date</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
  <?php
       foreach ($data["tasks"] as $task) 
        { echo "
                <tr>
                  <th scope='row'>{$task->id}</th> 
                  <td>{$task->name}</td>
                  <td>{$task->date}</td>
                  <td>{$task->descripcio}</td>
                  <td>
                  <a href='?action=delete&id={$task->id}'>
                  <button class= 'btn btn-danger'>Delete</button></a>
                  <a href='?action=edit&id={$task->id}'>
                  <button class= 'btn btn-secondary'>Edit</button></a>
                  </td>
                </tr>
                ";
        } 
      ?>
  </tbody>
</table>



</body>