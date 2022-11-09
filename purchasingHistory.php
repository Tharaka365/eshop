<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Purchasing History | eShop</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <?php include "header.php"; ?>

            <div class="col-12 text-center mb-3">
                <span class="fs-1 text-primary fw-bold">Purchasing History</span>
            </div>

            <div class="col-12">
                <div class="row">

                    <div class="col-12 d-none d-lg-block">
                        <div class="row">
                            <div class="col-1 bg-light">
                                <label class="form-label fw-bold">#</label>
                            </div>
                            <div class="col-3 bg-light">
                                <label class="form-label fw-bold">Order Details</label>
                            </div>
                            <div class="col-1 bg-light text-end">
                                <label class="form-label fw-bold">Quantity</label>
                            </div>
                            <div class="col-2 bg-light text-end">
                                <label class="form-label fw-bold">Amount</label>
                            </div>
                            <div class="col-2 bg-light text-end">
                                <label class="form-label fw-bold">Purchased Date & Time</label>
                            </div>
                            <div class="col-3 bg-light"></div>
                            <div class="col-12">
                                <hr />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">

                            <div class="col-12 col-lg-1 bg-info text-center text-lg-start">
                                <label class="form-label text-white fs-6 py-5">000001</label>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="card mx-0 mx-lg-3 my-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="resource/mobile_images/iphone12.jpg" class="img-fluid rounded-start" />
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Apple iPhone 12</h5>
                                                <p class="card-text"><b>Seller : </b>Lahiru</p>
                                                <p class="card-text"><b>Price : </b>Rs. 100000 .00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-1 text-center text-lg-end">
                                <label class="form-label fs-4 py-5">1</label>
                            </div>
                            <div class="col-12 col-lg-2 bg-info text-center text-lg-end">
                                <label class="form-label text-white fs-5 py-5">Rs. 100000 .00</label>
                            </div>
                            <div class="col-12 col-lg-2 text-center text-lg-end">
                                <label class="form-label fs-5 py-5 px-3">01-11-2022 00:00:00</label>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="row">
                                    <div class="col-6 d-grid">
                                        <button class="btn btn-secondary border border-1 fs-5 rounded mt-5 border-primary">
                                            <i class="bi bi-info-circle-fill"></i> Feedback
                                        </button>
                                    </div>
                                    <div class="col-6 d-grid">
                                        <button class="btn btn-danger fs-5 rounded mt-5">
                                            <i class="bi bi-trash3-fill"></i> Delete
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <hr />
                    </div>

                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="offset-lg-10 col-12 col-lg-2 d-grid mb-3">
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i> Delete All Records</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <?php include "footer.php"; ?>
        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>