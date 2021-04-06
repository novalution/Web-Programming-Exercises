<?php
function hitungDenda($jadwal,$kembali){

    $pecah1 = explode("-", $jadwal);
    $date1 = $pecah1[2];
    $month1 = $pecah1[1];
    $year1 = $pecah1[0];

    $pecah2 = explode("-", $kembali);
    $date2 = $pecah2[2];
    $month2 = $pecah2[1];
    $year2 = $pecah2[0];

    $jd1 = GregorianToJD($month1,$date1,$year1);
    $jd2 = GregorianToJD($month2,$date2,$year2);
    if ($jd2-$jd1 >= 0){
        return ($jd2-$jd1)*3000;
    }else return ;
}
$jadwal = "2021-04-01";
$kembali = "2021-04-010";
echo ("Besarannya denda yang harus dibayarkan adalah : Rp ".hitungDenda($jadwal,$kembali));
?>