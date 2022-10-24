<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Pilihan Ganda</title>
    </head>

    <body>
   
    <h3>KERJAKAN SOAL PILIHAN GANDA DI BAWAH INI!</h3>
    <form action="" method="post">
        <p>1. Atribut penting yang harus dimiliki dari perangkat lunak yang baik, kecuali....</p>
        <div>
            <input type="radio" name="soal1" id="soal1" value="a. Dependability and security">
            <label for="soal1">
            a. Dependability and security
            </label>
        </div>
        <div>
            <input type="radio" name="soal1" id="soal1" value=" b. Failure">
            <label for="soal1">
           b. Failure
            </label>
        </div>
        <div>
            <input type="radio" name="soal1" id="soal1" value=" c. Maintainability">
            <label for="soal1">
            c. Maintainability
            </label>
        </div>
        <div>
            <input type="radio" name="soal1" id="soal1" value=" d. Efficiency">
            <label for="soal1">
            d. Efficiency
            </label>
        </div>

        <p >2. siapakah nama presiden RI yang ke 2......</p>
      <div>
        <input type="radio" name="soal2" id="soal2" value="a.soeharto">
        <label  for="soal2">
          a.soeharto 
        </label>
      </div>
      <div>
        <input type="radio" name="soal2" id="soal2" value="b.jokowi">
        <label  for="soal2">
          b.jokowi 
        </label>
      </div>
      <div>
        <input type="radio" name="soal2" id="soal2" value="c.soekarno">
        <label  for="soal2">
          c.soekarno
        </label>
      </div>
      <div>
        <input type="radio" name="soal2" id="soal2" value="d.megawati">
        <label for="soal2">
        d.megawati
        </label>

      </div>

      <p >3. Keadaan iklim di Indonesia dipengaruhi oleh tiga jenis iklim yang terjadi yaitu, kecuali....</p>
      <div>
        <input type="radio" name="soal3" id="soal3" value="a.Iklim sub tropis ">
        <label  for="soal3">
        a.Iklim sub tropis 
        </label>
      </div>
      <div>
        <input type="radio" name="soal3" id="soal3" value="b.Iklim tropis">
        <label  for="soal3">
        b.Iklim tropis
        </label>
      </div>
      <div>
        <input type="radio" name="soal3" id="soal3" value="c.Iklim musim">
        <label  for="soal3">
        c.Iklim musim
        </label>
      </div>
      <div>
        <input type="radio" name="soal3" id="soal3" value="d. Iklim laut">
        <label  for="soal3">
        d.Iklim laut
        </label>
      </div>

      <p >4. Bentuk kerjasama yang ada dan sudah berlangsung lama pada masyarakat Indonesia biasa disebut dengan....</p>
      <div>
        <input type="radio" name="soal4" id="soal4" value="a.Kerja kelompok">
        <label  for="soal4">
        a.Kerja kelompok
        </label>
      </div>
      <div>
        <input type="radio" name="soal4" id="soal4" value=" b.Musyawarah dan mufakat">
        <label  for="soal4">
        b.Musyawarah dan mufakat
        </label>
      </div>
      <div>
        <input type="radio" name="soal4" id="soal4" value="c.Gotong royong">
        <label  for="soal4">
        c.Gotong royong
        </label>
      </div>
      <div>
        <input type="radio" name="soal4" id="soal4" value="d.Kooperatif">
        <label  for="soal4">
        d.Kooperatif
        </label>
      </div>

      <p >5. Raja yang paling terkenal dari kerajaan Tarumanegara adalah....</p>
      <div>
        <input type="radio" name="soal5" id="soal5" value="a.Raja Kundungga">
        <label  for="soal5">
        a.Raja Kundungga
        </label>
      </div>
      <div>
        <input type="radio" name="soal5" id="soal5" value="b.Raja Mulawarman">
        <label  for="soal5">
        b.Raja Mulawarman
        </label>
      </div>
      <div>
        <input type="radio" name="soal5" id="soal5" value="c.Raja Purnawarman">
        <label  for="soal5">
        c.Raja Purnawarman
        </label>
      </div>
      <div>
        <input type="radio" name="soal5" id="soal5" value="d. Raja Wurawari">
        <label  for="soal5">
        d. Raja Wurawari
        </label>
      </div>
      <div>
        <button type="submit" name="submit" id="submit">Lihat Hasil</button>
      </div>
 
     </form>
    <?php
    if (isset($_POST['submit'])) {
      $soal1 = $_POST['soal1'];
      $soal2 = $_POST['soal2'];
      $soal3 = $_POST['soal3'];
      $soal4 = $_POST['soal4'];
      $soal5 = $_POST['soal5'];
      $correct = 0;
      $note = "";
      $jawaban_user = array($soal1, $soal2, $soal3, $soal4, $soal5);
      $jawaban_benar = array("b.Failure","a.soeharto","b.Iklim tropis","c.Gotong royong","c.Raja Purnawarman");
      for ($i = 0; $i < count($jawaban_benar); $i++) {
        if ($jawaban_user[$i] == $jawaban_benar[$i]) {
          $correct += 20;
        }
    }
    switch ($i) {
        case 100:
            $note = "Sangat Baik";
            break;
        case 80:
            $note = "Baik";
            break;
        case 60:
            $note = "Cukup";
            break;
        case 40:
            $note = "Kurang";
            break;
        case 20:
            $note = "Kurang Sekali";
            break;
        default:
        $note = "Semua Jawaban Salah";
        break;
      }
      echo "<p>Nilai anda: $correct</p>";
      echo "<p>keterangan: $note</p>";
    }
    ?>
</body>

</html>