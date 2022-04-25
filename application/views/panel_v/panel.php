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

<!--========== END app main -->


<?php $this->load->view("panel_v/include_script"); ?>

</body>
</html>