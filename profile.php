<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Profile | UrbanWaste-MS</title>
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
  <?php include("include/full-header.php"); ?>

    <!-- content -->
    <div class="container flex-grow-1 flex-shrink-0 py-5">
      <div class="mb-5 p-4 bg-white shadow-sm">
        <h3>Profile Infomation</h3>
        <form class="needs-validation m-4" novalidate action="business.html">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Full name
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Enter your full name"
                required
                readonly
              />
              <div class="invalid-feedback">
                Please fill the full name field
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >UserName
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Enter your UserName"
                required
                readonly
              />
              <div class="invalid-feedback">
                Please fill the UserName field
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Email address
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="email"
                class="form-control"
                placeholder="Enter your email address"
                required
              />
              <div class="invalid-feedback">
                Please fill the email address field
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Phone number
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Enter your phone number"
                required
              />
              <div class="invalid-feedback">
                Please fill the phone number field
              </div>
            </div>
          </div>

          <div
            class="btn-toolbar justify-content-between"
            role="toolbar"
            aria-label="Toolbar with button groups"
          >
            <div class="btn-group" role="group" aria-label="First group">
              <!-- <a href="#" class="btn btn-light disabled">Back</a> -->
            </div>
            <div class="input-group">
              <button type="submit" class="btn btn-primary">
                Update Profile
              </button>
            </div>
          </div>
        </form>

        <hr />

        <form class="needs-validation m-4" novalidate action="">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Curent City
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="password"
                class="form-control"
                placeholder="Enter your current City"
                required
              />
              <div class="invalid-feedback">
                Please fill the current City field
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >House Address
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="password"
                class="form-control"
                placeholder="Enter House Address"
                required
              />
              <div class="invalid-feedback">
                Please fill the House Address
              </div>
            </div>
          </div>

          <div
            class="btn-toolbar justify-content-between"
            role="toolbar"
            aria-label="Toolbar with button groups"
          >
            <div class="btn-group" role="group" aria-label="First group">
              <!-- <a href="#" class="btn btn-light disabled">Back</a> -->
            </div>
            <div class="input-group">
              <button type="submit" class="btn btn-primary">
                Update Location
              </button>
            </div>
          </div>
        </form>
        <hr />

        <form class="needs-validation m-4" novalidate action="">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >Curent password
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="password"
                class="form-control"
                placeholder="Enter your current password"
                required
              />
              <div class="invalid-feedback">
                Please fill the current password field
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="inputMailForm"
                >New password
                <span class="text-danger font-weight-bold">*</span></label
              >
              <input
                type="password"
                class="form-control"
                placeholder="Enter your new password"
                required
              />
              <div class="invalid-feedback">
                Please fill the new password field
              </div>
            </div>
          </div>

          <div
            class="btn-toolbar justify-content-between"
            role="toolbar"
            aria-label="Toolbar with button groups"
          >
            <div class="btn-group" role="group" aria-label="First group">
              <!-- <a href="#" class="btn btn-light disabled">Back</a> -->
            </div>
            <div class="input-group">
              <button type="submit" class="btn btn-primary">
                Update Password
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- footer -->
    <?php include("include/footer.php") ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
