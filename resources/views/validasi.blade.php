<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <script>
        function validateForm()
        {
            var nrp = document.getElementById("nrp");
            var msg = document.getElementById("msg");

            if(nrp.value == "") {
                nrp.focus();
                nrp.placeholder ="Contoh : 5026221164"
                alert("NRP harus diisi!!");
                return false;
            }

            if(nrp.value.length !=10)
            {
                nrp.focus();
                alert("NRP harus 10 digit, Anda memasukan" + nrp.value.length + " digit");
                return false;
            }

            if(isNaN(nrp.value) == true) {
                nrp.focus();
                msg.innerHTML = "NRP harus angka!!";
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">Form validasi adalah mencegah pengiriman data ke server jika ada yg invalid/tidak sesuai costrain database</div>
        <script>
            function validate()
            {
                console.log("baris 17");
                return false;
                console.log("baris 19");
                return true;
                console.log("baris 21");
                return false;
            }
        </script>
        <form action="https://google.com" method="get" onsubmit="return validateForm();">
            <div class="form-group">
                <label for="nrp">NRP:</label>
                <input type="text" class="form-control" id="nrp"><div id="msg" class="text-danger"></div>
            </div>
            <input type="submit" value="DAFTAR" class="btn btn-primary">
            <input type="reset" value="ULANGI" class="btn btn-warning">
        </form>
    </div>
</body>
</html>