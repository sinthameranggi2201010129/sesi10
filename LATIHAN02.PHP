<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan form 01 </title>
</head>
<body>
    

    <form name="latihan02" id="latihan02" method="post" onsubmit="return checkform()" > 
        <div>
            NIM
            <input type="text" id="NIM" name="txNIM">
        </div>
        <div>
            NAMA
            <input type="text" id="NAMA" name="txNAMA">
        </div>
        <div>
            JENIS KELAMIN
            <input type="radio" id="JK" name="txJK" value="L"> Laki-laki
            <input type="radio" id="JK" name="txJK" value="P"> Perempuan
        </div>
        <div>
            JURUSAN
            <select name="txJURUSAN" id="JURUSAN">
                <option value="KAB"> KAB </option>
                <option value="DKV"> DKV </option>
                <option value="DGM"> DGM </option>
                <option value="BD"> BD </option>
                <option value="TI PAR"> TI PAR </option>
                <option value="SK"> SK </option>
            </select>
        <div>
            HOBI
            <input type="checkbox" id="txHOBI" name="MUSIK"> musik
            <input type="checkbox" id="txHOBI" name="TARI"> tari
            <input type="checkbox" id="txHOBI" name="HILING"> hiling
        </div>
        </div>

        <div>
            <button type="submit"> KIRIM DATA </button> 
        </div>
    </form>

    <script>
        function checkform(){
            let f = document.getElementById("latihan02").elements;
            let nim = f.NIM.value;
            let nama = f.NAMA.value;
            let jk = f.JK.value;
            let jurusan = f.JURUSAN.value;
            let hobi_musik = f.txHOBI[0].checked;
            let hobi_tari = f.txHOBI[1].checked;
            let hobi_hiling = f.txHOBI[2].checked;

            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("JENIS KELAMIN: "+jk);
            console.log("JURUSAN: "+jurusan);
            console.log("hobi musik: "+hobi_musik);
            console.log("hobi tari: "+hobi_tari);
            console.log("hobi hiling: "+hobi_hiling);
            return false;
        }
    </script>
</body>
</html>