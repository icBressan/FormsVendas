<?php
 $descricao = $_POST['descricao'];
 $preco = floatval($_POST['preco']);
 $nome = $_POST['nome'];
 $data = $_POST['data'];
 $parcelas = intval($_POST['parcelas']);
 $dia = intval($_POST['dia']);

  if ($parcelas > 6) {
    $preco *= 1.07;
}
  if ($dia == 15 || $dia == 20) {
    $preco *= 1.03; 
}

$valor_parcela = $preco / $parcelas;
 ?>
 <a href="index.html">Voltar ao formulário</a>

<!DOCTYPE html>
<html>
<head>
  <title>Resumo Venda</title>
</head>
<body>

<table class="table" border="1" align="center">
        <thead>
          <tr> 
            <td align="center"  colspan="12">RESUMO DA VENDA</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Produto:</td>
            <td colspan="3"> <?php echo $descricao?> </td>
          </tr>

          <tr>
            <td>Preço:</td>
            <td colspan="3"> <?php echo $preco?> </td>
          </tr>

          <tr>
            <td>Vendedor Responsável:</td>
            <td> <?php echo $nome?> </td>
            <td>Data da Venda:</td>
            <td>  <?php echo $data?> </td>
          </tr>

          <tr>
            <td>Número de parcelas:</td>
            <td>  <?php echo $parcelas?>  </td>
            <td>Data Pagamento:</td>
            <td> <?php echo $dia?>
            </td>
          </tr>
        </tbody>
</table>
</body>
</html>
