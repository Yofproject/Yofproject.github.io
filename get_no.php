<body>
  <!-- <option disabled selected>Piih</option> -->
  <select name="no_kamar" id="no_kamar">
    <option disabled selected>--No Kamar--</option>
    <?php
    include ('koneksi.php');

    $id = $_POST['id_tipe_kamar'];

    $nokamar = mysqli_query($koneksi, "SELECT * FROM tb_kamar WHERE id_tipe_kamar = $id");
    $resultKamar = mysqli_fetch_all($nokamar, MYSQLI_ASSOC);

    foreach ($resultKamar as $result) :
    ?>
      <option value="<?= $result['id_kamar']; ?>"><?= $result['no_kamar']; ?></option>
  </select>

</body>

<?php endforeach ?>