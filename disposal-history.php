<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Disposal History | UrbanWaste-MS</title>
    <meta
      name="description"
      content="Association of Point of Sales Users Membership Registation"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/logo.png" type="image/gif" sizes="16x16" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
  </head>

  <body class="d-flex flex-column min-vh-100 bg-light">
    <!-- Nav-->
   <?php include("include/full-header.php") ?>
    <!-- content -->
    <div class="container flex-grow-1 flex-shrink-0 py-5">
      <div class="mb-5 p-4 bg-white shadow-sm">
        <h3>Disposal History</h3>

        <div class="card-body">
        <table class="table caption-top">
                <caption>
                  List of Requests
                </caption>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Request ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Status</th>
                    <th scope="col">Receipt</th>

                  </tr>
                </thead>

                    <tr>
                        <td scope="row">1</td>
                        <td>846482479BC</td>
                        <td>2/4/2020</td>
                        <td>2:30pm</td>
                        <td>Approved</td>
                        <td>&#129297;</td>
                    </tr>

                <tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php include("include/footer.php"); ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
