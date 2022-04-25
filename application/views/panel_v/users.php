<!DOCTYPE html>
<html lang="tr">
<head>
    <?php $this->load->view("panel_v//head"); ?>
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--============= start main area -->

<?php $this->load->view("panel_v/admin_navbar"); ?>


<?php $this->load->view("panel_v/admin_aside"); ?>


<?php $this->load->view("panel_v/admin_navsearch"); ?>



<!-- APP MAIN ==========-->
<div style="padding-left: 13%; font-size: 200%;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">E-mail</th>
      <th scope="col">Ad Soyad</th>
      <th scope="col">Sil</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>asdad@asd.com</td>
      <td>Baki Baran Özel</td>
      <td><button type="button" class="btn btn-danger">Sil</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td><button type="button" class="btn btn-danger">Sil</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td><button type="button" class="btn btn-danger">Sil</button></td>
    </tr>
  </tbody>
</table>
</form></div>
<!--========== END app main -->


<?php $this->load->view("panel_v/include_script"); ?>

</body>
</html>