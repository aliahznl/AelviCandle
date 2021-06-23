<?php
//untuk pastikan user masuk melalui jalan betul
if(isset($_POST['buy it now'])){

    //diperlukan untuk berhubung dengan database
    require once 'database.connect.php';
    $Pnama = $_POST['nama'];
    $Pemail = $_POST['email'];
    $POurProduct = $_POST['OurProducts'];

    //masuk (INSERT) data ke dalam database
    $$query= "INSERT INTO ordercandle_jadual (nama, email, OurProducts)
    VALUES ( '$Pnama', '$Pemail', '$POurProducts')";

    //semak samaada data dapat di dimasukkan (INSERT) ke dalam database
    if (mysqli_query($connection,$query)){
        echo"Rekod disimpan"; //dipaparkan jika permintaan(query untuk memasukkan (INSERT) data berjaya
    }else{
        echo"Rekod TIDAK disimpan"; // dipaparkan jika permintaan(query) untuk memasukkan (INSERT) data tidak berjaya
    }

}
else{
    echo "TIDAK berjaya";
    /* header("location: ../ShopNow.php"); */
}