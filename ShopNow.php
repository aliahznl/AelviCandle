<body>
    <div class="container">
        <form action="proses/proses.aelvicandle.php" method="POST" class="row g-3 from-group">

            <div class="container-fluid pt-3 pb-3">
                <a href="index.php"><img src="logo candle.jpg" alt="" width="100" height="85"></a>
                <a href="index.php" class="navbar-brand  ">Aelvi Candle</a>
            </div>
            <div class="col-md-8">
                <label for="inputNama" class="form-label">Name</label>
                <input type="text" class="form-control" name="nama" id="inputName">
            </div>
            <div class="col-md-8">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail4">
            </div>
            <div class="col-md-8">
                <label for="inputOurProducts" class="form-label">Our Products</label>
                <select name="OurProducts" id="inputOurProduct" class="form-select">
                    <option selected>Type of Products</option>
                    <option>Italia Escapist Candle</option>
                    <option>Sweet Fig Minimalist Candle</option>
                    <option>Tuileries Escapist Candle</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" name="buy it now" class="btn btn-primary">Buy it Now</button>
            </div>
        </form>
    </div>
</body>


<!-- Style sheet -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

