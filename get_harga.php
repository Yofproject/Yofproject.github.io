<body>
  <!-- <option disabled selected>Piih</option> -->
  <select name="harga_kamar" id="harga_kamar">
    <?php
    include ('koneksi.php');

    $id = $_POST['id_tipe_kamar'];

    $hargakamar = mysqli_query($koneksi, "SELECT * FROM tipe_kamar WHERE id_tipe_kamar = $id");
    $resultHarga = mysqli_fetch_all($hargakamar, MYSQLI_ASSOC);

    foreach ($resultHarga as $result) :
    ?>
      <option value="<?= $result['harga_kamar']?>" selected><?= $result['harga_kamar']?></option>
  </select>

</body>

<?php endforeach ?>