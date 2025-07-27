<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-4 text-center">Create Product</h3>
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="basic-name" class="form-label">Product Name</label>
                                <input type="text" name="name" id="basic-name" class="form-control"
                                    placeholder="Enter product name" required>
                            </div>


                            <div class="mb-3">
                                <label for="basic-price" class="form-label">Price</label>
                                <input type="text" name="price" id="basic-price" class="form-control"
                                    placeholder="Enter product price" required
                                    oninput="this.value = this.value.replace(/[^[0-9.]/g,'')">
                            </div>
                            <div class="mb-3">
                                <label for="basic-description" class="form-label">Description</label>
                                <input type="text" name="description" id="basic-description" class="form-control"
                                    placeholder="Enter product description" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
