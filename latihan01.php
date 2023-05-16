<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan form 01 </title>
</head>
<body>
    

    <form name="latihan01" method="post" onsubmit="return checkform(this)" > 
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>
        <div>
            NAMA
            <input type="text" name="txNAMA">
        </div>
        <div>
            JENIS KELAMIN
            <input type="radio" name="txJK" value="L"> Laki-laki
            <input type="radio" name="txJK" value="P"> Perempuan
        </div>
        <div>
            JURUSAN
            <select name="txJURUSAN">
                <option value="KAB"> KAB </option>
                <option value="DKV"> DKV </option>
                <option value="DGM"> DGM </option>
                <option value="BD"> BD </option>
                <option value="TI PAR"> TI PAR </option>
                <option value="SK"> SK </option>
            </select>
        <div>
            HOBI
            <input type="checkbox" name="MUSIK"> musik
            <input type="checkbox" name="TARI"> tari
            <input type="checkbox" name="HILING"> hiling
        </div>
        </div>

        <div>
            <button type="submit"> KIRIM DATA </button> 
        </div>
    </form>

    <script>
        function checkform(frm) {
            let f = frm.elements;
            let nim = f.namedItem("txNIM").value;
            let nama = f.namedItem("txNAMA").value;
            let jk = f.namedItem("txJK").value;
            let jurusan = f.namedItem("txJURUSAN").value;
            let hobi_musik = f.namedItem("MUSIK").checked;
            let hobi_tari = f.namedItem("TARI").checked;
            let hobi_hiling = f.namedItem("HILING").checked;

            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("JENIS KELAMIN: "+jk);
            console.log("JURUSAN: "+jurusan);
            console.log("NAMA: "+hobi_musik);
            console.log("NAMA: "+hobi_tari);
            console.log("NAMA: "+hobi_hiling);
            return false;
        }
    </script>
</body>
</html>