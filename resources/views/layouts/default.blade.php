<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMRS Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      /* ====== General Page Style ====== */
      body {
        background-color: #f4f6f9;
        font-family: 'Poppins', sans-serif;
        color: #333;
      }

      .container {
        margin-top: 30px;
      }

      /* ====== Navbar Customization ====== */
      .navbar {
        background: linear-gradient(135deg, #0d6efd, #004dc9);
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
      }

      .navbar-brand {
        font-weight: 700;
        font-size: 1.5rem;
        color: #fff !important;
        letter-spacing: 1px;
      }

      .navbar-nav .nav-link {
        color: #e9ecef !important;
        margin-right: 15px;
        font-weight: 500;
        transition: 0.3s;
      }

      .navbar-nav .nav-link:hover,
      .navbar-nav .nav-link.active {
        color: #fff !important;
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        padding: 6px 12px;
      }

      /* ====== Page Content ====== */
      .content-box {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
        padding: 30px;
        margin-top: 20px;
      }

      /* ====== Responsive Tweaks ====== */
      @media (max-width: 768px) {
        .navbar-nav .nav-link {
          margin: 5px 0;
        }
      }
    </style>
  </head>

  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">LMRS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/customers">Customers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/loans">Loans</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/loans">Payments</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Main Content Section -->
      <div class="content-box">
        @yield('content')
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
