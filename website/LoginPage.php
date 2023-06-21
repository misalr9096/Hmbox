<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css"
    />
    <script src="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  </head>
  <style>
    * {
      font-family: "Alkatra", cursive;
      padding: 0px;
      margin: 0px;
    }
  </style>

  <body>
    <div
      class="container-fuild d-flex justify-content-center align-items-center"
      style="
        background-color: #dcf1ff;
        background-image: url(../images/new_login.webp);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      "
    >
      <div class="row" style="margin: 5rem">
        <div
          class="d-flex justify-content-center align-items-center col-sm-12 col-lg-5 col-xl-5 col-md-12"
        >
          <div
            class="card m-5 shadow p-3 mb-5 rounded"
            style="background: #dcf1ff; width: 18rem; border: none"
          >
            <h2
              class="card-title text-uppercase text-center mt-5 fs-1"
              style="
                font-family: 'Kalam', cursive;
                font-weight: bold;
                color: #262626;
              "
            >
              User
            </h2>
            <img
              class="card-img-top"
              src="../images/user.png"
              alt="Card image cap"
            />

            <div class="card-body">
              <div class="d-flex justify-content-center">
                <a href="./UserLogin.php">
                  <button
                    type="button"
                    class="btn shadow m-4"
                    style="
                      border-radius: 50px;
                      height: 50px;
                      color: #262626;
                      font-size: 18px;
                      background-color: #9ac9df;
                      width: 150px;
                    "
                  >
                    Login
                  </button></a
                >
              </div>
            </div>
          </div>
        </div>
        <div
          class="d-flex justify-content-center align-items-center col-sm-12 col-lg-5 col-xl-5 col-md-12"
        >
          <div
            class="card m-5 shadow p-3 mb-5 rounded"
            style="background: #dcf1ff; border: none; width: 18rem"
          >
            <h2
              class="card-title text-uppercase text-center mt-5 fs-1"
              style="
                font-family: 'Kalam', cursive;
                font-weight: bold;
                color: #262626;
              "
            >
              Admin
            </h2>
            <img
              class="card-img-top"
              src="../images/admin.jpg"
              alt="Card image cap"
            />

            <div class="card-body">
              <div class="d-flex justify-content-center">
                <a href="./AdminLogin.php">
                  <button
                    type="button"
                    class="btn shadow m-4"
                    style="
                      border-radius: 50px;
                      height: 50px;
                      color: #262626;
                      font-size: 18px;
                      background-color: #9ac9df;
                      width: 150px;
                    "
                  >
                    Login
                  </button></a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
