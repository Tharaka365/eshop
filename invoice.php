<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Invoice | eShop</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />
</head>

<body class="mt-2" style="background-color: #f7f7ff;">

    <div class="container-fluid">
        <div class="row">

            <?php include "header.php"; ?>

            <div class="col-12">
                <hr />
            </div>

            <div class="col-12 btn-toolbar justify-content-end">
                <button class="btn btn-dark me-2"><i class="bi bi-printer-fill"></i> print</button>
                <button class="btn btn-danger me-2"><i class="bi bi-filetype-pdf"></i> Export as PDF</button>
            </div>

            <div class="col-12">
                <hr />
            </div>

            <div class="col-12" id="page">
                <div class="row">

                    <div class="col-6">
                        <div class="ms-5 invoiceHeaderImage"></div>
                    </div>

                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 text-primary text-decoration-underline text-end">
                                <h2>eShop</h2>
                            </div>
                            <div class="col-12 fw-bold text-end">
                                <span>Maradana, Colombo 10, Sri Lanka</span><br />
                                <span>+94 112 785694</span><br />
                                <span>eshop@gmail.com</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <hr class="border border-1 border-primary" />
                    </div>

                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fw-bold">INVOICE TO :</h5>
                                <h2>Lahiru</h2>
                                <span>Horana</span><br />
                                <span>lahiru@gmail.com</span>
                            </div>
                            <div class="col-6 text-end mt-4">
                                <h1 class="text-primary">INVOICE 01</h1>
                                <span class="fw-bold">Date & Time of Invoice : </span><br />
                                <span>31-10-2022 00:00:00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <table class="table">

                            <thead>
                                <tr class="border border-1 border-secondary">
                                    <th>#</th>
                                    <th>Oreder ID & Product</th>
                                    <th class="text-end">Unit Price</th>
                                    <th class="text-end">Quantity</th>
                                    <th class="text-end">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="height: 72px;">
                                    <td class="bg-primary text-white fs-3">01</td>
                                    <td>
                                        <span class="fw-bold text-primary text-decoration-underline p-2">000001</span><br />
                                        <span class="fw-bold text-primary fs-4 p-2">Apple iPhone 12</span>
                                    </td>
                                    <td class="fw-bold fs-6 text-end pt-4 bg-secondary text-white">Rs. 100000 .00</td>
                                    <td class="fw-bold fs-6 text-end pt-4">01</td>
                                    <td class="fw-bold fs-6 text-end pt-4 bg-secondary text-white">Rs. 100000 .00</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="border-0"></td>
                                    <td class="fs-5 text-end fw-bold">SUBTOTAL</td>
                                    <td class="text-end">Rs. 100000 .00</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-0"></td>
                                    <td class="fs-5 text-end fw-bold border-primary">Delivery Fee</td>
                                    <td class="text-end border-primary">Rs. 500 .00</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-0"></td>
                                    <td class="fs-5 text-end fw-bold border-primary text-primary">GRAND TOTAL</td>
                                    <td class="text-end border-primary text-primary">Rs. 100500 .00</td>
                                </tr>
                            </tfoot>

                        </table>
                    </div>

                    <div class="col-4 text-center" style="margin-top: -100px;">
                        <span class="fs-1 fw-bold text-success">Thank You !</span>
                    </div>

                    <div class="col-12 border-start border-5 border-primary mt-3 mb-3 rounded" style="background-color: #e7f2ff;">
                        <div class="row">
                            <div class="col-12 mt-3 mb-3">
                                <label class="form-label fw-bold fs-5">NOTICE : </label><br />
                                <label class="form-label fs-6">Purchased items can return befor 7 days of Delivery.</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <hr class="border border-1 border-primary" />
                    </div>

                    <div class="col-12 text-center mb-3">
                        <label class="form-label fs-5 text-black-50 fw-bold">
                            Invoice was created on a computer and is valid without the Signature and Seal.
                        </label>
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