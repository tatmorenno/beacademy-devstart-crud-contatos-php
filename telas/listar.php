<div class="row">
  <div class="col-1 align-self-center jus">
    <img src="../img/listar.svg" width="90%" alt="">
  </div>
  <div class="col align-self-center jus">
    <h1>Listar Contatos</h1>
  </div>
</div>
<hr>
<table class="table table-hover table-striped">
  <thead class="table-dark">
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
      <th class="text-center">Ações</th>
    </tr>
    <tbody>
      <?php
        foreach ($contatos as $posicao => $cadaContato) {
          $partes = explode(';',$cadaContato);
          echo '<br>';
            echo '<td>' . $partes[0] . '</td>';
            echo '<td>' . $partes[1] . '</td>';
            echo '<td>' . $partes[2] . '</td>';
            echo "<td>
            <div class='container text-center'>

                  <a href='/excluir?id={$posicao}' class='btn btn-danger btn-sm'>
                    <i class='bi bi-trash3-fill'><span> Excluir</span></i>
                  </a>
                  <a href='/editar?id={$posicao}' class='btn btn-warning btn-sm'>
                    <i class='bi bi-pencil-square'><span> Editar</span></i>
                  </a>
                  </td>
                  </div>";
          echo '<tr>';
        }
      ?>
    </tbody>
  </thead>
</table>