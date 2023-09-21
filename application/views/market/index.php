<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Jibufy - Business Company</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Add Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />

    <link rel="stylesheet" href="static/custom.css" />
    <link rel="stylesheet" href="static/css/bootstrap.min.css" />
    <link rel="stylesheet" href="static/css/bootstrap.min.css.map" />
  </head>
  <body>
    <!-- Bootstrap Navbar with Search Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.html">Marketplace</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html"
              ><i class="bi bi-bell h5"></i><span class="badge">45</span></a
            >
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.html"
              ><i class="bi bi-plus-square-dotted h5"></i
            ></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.html"
              >Marketplace <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages.html">Businesses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jobs.html">Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bookmarks.html">Bookmarks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="settings.html">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.html">Profile</a>
          </li>
        </ul>

        <form class="form-inline search-bar">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search..."
            aria-label="Search"
          />
          <button class="btn btn-primary my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
      </div>
    </nav>

    <div class="container">
      <div class="categories-bar">
        <a href="#" class="category">All</a>
        <a href="#" class="category">Music</a>
        <a href="#" class="category">Gaming</a>
        <a href="#" class="category">News</a>
        <a href="#" class="category">Sports</a>
        <a href="#" class="category">Movies</a>
        <a href="#" class="category">Electronics</a>
        <a href="#" class="category">Python</a>
        <a href="#" class="category">Django</a>
        <a href="#" class="category">Flutter</a>
        <a href="#" class="category">Hospitals</a>
        <a href="#" class="category">Engineering</a>
        <a href="#" class="category">Politics</a>
        <a href="#" class="category">Opinion</a>
        <a href="#" class="category">Science</a>
        <a href="#" class="category">Travel</a>
      </div>

      <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
      >
        <h1 class="h3">Products List</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">
              Add New
            </button>
            <button type="button" class="btn btn-sm btn-outline-secondary">
              Bookmarks
            </button>
          </div>
          <a
            href="settings.html"
            type="button"
            class="btn btn-sm btn-outline-secondary dropdown-toggle"
            >Settings</a
          >
        </div>
      </div>

      <!-- Sample card Thumbnails -->
      <div
        d="gallery"
        class="row row-cols-1 row-cols-sm-2 row-cols-md-4 gallery"
      >
        <div class="col gallery-item">
          <div class="card-thumbnail position-relative">
            <a href="#" class="position-absolute card-icon"
              ><i class="bi bi-bookmark"></i
            ></a>
            <a href="detail.html"
              ><img
                style="height: 200px; width: 100%"
                src="static/img/01.jpg"
                alt="card Thumbnail"
                class="img-fluid"
            /></a>
            <h5 class="mt-2 card-title text-primary">USh 800,000</h5>
            <div class="card-title">
              43 Inches Hisense Smart TV Powered by Android VIDAA
            </div>
            <div class="card-description">Kampala City • Electronics</div>
            <p class="card-description">20k Likes</p>
            <div class="thumbnail-button">
              <a href="detail.html">Detail</a>
              <a href="detail.html" class="bg-primary">Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col gallery-item">
          <div class="card-thumbnail position-relative">
            <a href="#" class="position-absolute card-icon"
              ><i class="bi bi-bookmark"></i
            ></a>
            <a href="detail.html"
              ><img
                style="height: 200px; width: 100%"
                src="static/img/02.jpg"
                alt="card Thumbnail"
                class="img-fluid"
            /></a>
            <h5 class="mt-2 card-title text-primary">USh 800,000</h5>
            <div class="card-title">
              ADH 32 Inch Flameless LED HD Digital TV With Free to Air
            </div>
            <div class="card-description">Kampala City • Electronics</div>
            <p class="card-description">20k Likes</p>
            <div class="thumbnail-button">
              <a href="detail.html">Detail</a>
              <a href="detail.html" class="bg-primary">Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col gallery-item">
          <div class="card-thumbnail position-relative">
            <a href="#" class="position-absolute card-icon"
              ><i class="bi bi-bookmark"></i
            ></a>
            <a href="detail.html"
              ><img
                style="height: 200px; width: 100%"
                src="static/img/03.jpg"
                alt="card Thumbnail"
                class="img-fluid"
            /></a>
            <h5 class="mt-2 card-title text-primary">USh 800,000</h5>
            <div class="card-title">Hisense Smart 50 Inches 4k</div>
            <div class="card-description">Kampala City • Electronics</div>
            <p class="card-description">20k Likes</p>
            <div class="thumbnail-button">
              <a href="detail.html">Detail</a>
              <a href="detail.html" class="bg-primary">Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col gallery-item">
          <div class="card-thumbnail position-relative">
            <a href="#" class="position-absolute card-icon"
              ><i class="bi bi-bookmark"></i
            ></a>
            <a href="detail.html"
              ><img
                style="height: 200px; width: 100%"
                src="static/img/04.jpg"
                alt="card Thumbnail"
                class="img-fluid"
            /></a>
            <h5 class="mt-2 card-title text-primary">USh 800,000</h5>
            <div class="card-title">
              43 Inches Brand New LG Smart Frameless With Inbuilt
            </div>
            <div class="card-description">Kampala City • Electronics</div>
            <p class="card-description">20k Likes</p>
            <div class="thumbnail-button">
              <a href="detail.html">Detail</a>
              <a href="detail.html" class="bg-primary">Contact Us</a>
            </div>
          </div>
        </div>

        <div class="col gallery-item">
          <div class="card-thumbnail position-relative">
            <a href="#" class="position-absolute card-icon"
              ><i class="bi bi-bookmark"></i
            ></a>
            <a href="detail.html"
              ><img
                style="height: 200px; width: 100%"
                src="static/img/05.jpg"
                alt="card Thumbnail"
                class="img-fluid"
            /></a>
            <h5 class="mt-2 card-title text-primary">USh 800,000</h5>
            <div class="card-title">TCL 65inch Real Uhd Smart TVS</div>
            <div class="card-description">Kampala City • Electronics</div>
            <p class="card-description">20k Likes</p>
            <div class="thumbnail-button">
              <a href="detail.html">Detail</a>
              <a href="detail.html" class="bg-primary">Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col gallery-item">
          <div class="card-thumbnail position-relative">
            <a href="#" class="position-absolute card-icon"
              ><i class="bi bi-bookmark"></i
            ></a>
            <a href="detail.html"
              ><img
                style="height: 200px; width: 100%"
                src="static/img/06.jpg"
                alt="card Thumbnail"
                class="img-fluid"
            /></a>
            <h5 class="mt-2 card-title text-primary">USh 800,000</h5>
            <div class="card-title">MECOOL KM6 Android TV Box 10</div>
            <div class="card-description">Kampala City • Electronics</div>
            <p class="card-description">20k Likes</p>
            <div class="thumbnail-button">
              <a href="detail.html">Detail</a>
              <a href="detail.html" class="bg-primary">Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col gallery-item">
          <div class="card-thumbnail position-relative">
            <a href="#" class="position-absolute card-icon"
              ><i class="bi bi-bookmark"></i
            ></a>
            <a href="detail.html"
              ><img
                style="height: 200px; width: 100%"
                src="static/img/07.jpg"
                alt="card Thumbnail"
                class="img-fluid"
            /></a>
            <h5 class="mt-2 card-title text-primary">USh 800,000</h5>
            <div class="card-title">
              Smart Plus 32 Inch Framless HD TV With Free to Air Decoder
            </div>
            <div class="card-description">Kampala City • Electronics</div>
            <p class="card-description">20k Likes</p>
            <div class="thumbnail-button">
              <a href="detail.html">Detail</a>
              <a href="detail.html" class="bg-primary">Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col gallery-item">
          <div class="card-thumbnail position-relative">
            <a href="#" class="position-absolute card-icon"
              ><i class="bi bi-bookmark"></i
            ></a>
            <a href="detail.html"
              ><img
                style="height: 200px; width: 100%"
                src="static/img/08.jpg"
                alt="card Thumbnail"
                class="img-fluid"
            /></a>
            <h5 class="mt-2 card-title text-primary">USh 800,000</h5>
            <div class="card-title">Starsat SR- 220H Satellite Receiver</div>
            <div class="card-description">Kampala City • Electronics</div>
            <p class="card-description">20k Likes</p>
            <div class="thumbnail-button">
              <a href="detail.html">Detail</a>
              <a href="detail.html" class="bg-primary">Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col gallery-item">
          <div class="card-thumbnail position-relative">
            <a href="#" class="position-absolute card-icon"
              ><i class="bi bi-bookmark"></i
            ></a>
            <a href="detail.html"
              ><img
                style="height: 200px; width: 100%"
                src="static/img/09.jpg"
                alt="card Thumbnail"
                class="img-fluid"
            /></a>
            <h5 class="mt-2 card-title text-primary">USh 800,000</h5>
            <div class="card-title">MECOOL KM6 Android TV Box 10</div>
            <div class="card-description">Kampala City • Electronics</div>
            <p class="card-description">20k Likes</p>
            <div class="thumbnail-button">
              <a href="detail.html">Detail</a>
              <a href="detail.html" class="bg-primary">Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col gallery-item">
          <div class="card-thumbnail position-relative">
            <a href="#" class="position-absolute card-icon"
              ><i class="bi bi-bookmark"></i
            ></a>
            <a href="detail.html"
              ><img
                style="height: 200px; width: 100%"
                src="static/img/10.jpg"
                alt="card Thumbnail"
                class="img-fluid"
            /></a>
            <h5 class="mt-2 card-title text-primary">USh 800,000</h5>
            <div class="card-title">
              Smart Plus 32 Inch Framless HD TV With Free to Air Decoder
            </div>
            <div class="card-description">Kampala City • Electronics</div>
            <p class="card-description">20k Likes</p>
            <div class="thumbnail-button">
              <a href="detail.html">Detail</a>
              <a href="detail.html" class="bg-primary">Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col gallery-item">
          <div class="card-thumbnail position-relative">
            <a href="#" class="position-absolute card-icon"
              ><i class="bi bi-bookmark"></i
            ></a>
            <a href="detail.html"
              ><img
                style="height: 200px; width: 100%"
                src="static/img/11.jpg"
                alt="card Thumbnail"
                class="img-fluid"
            /></a>
            <h5 class="mt-2 card-title text-primary">USh 800,000</h5>
            <div class="card-title">Starsat SR- 220H Satellite Receiver</div>
            <div class="card-description">Kampala City • Electronics</div>
            <p class="card-description">20k Likes</p>
            <div class="thumbnail-button">
              <a href="detail.html">Detail</a>
              <a href="detail.html" class="bg-primary">Contact Us</a>
            </div>
          </div>
        </div>

        <div class="col gallery-item">
          <div class="card-thumbnail position-relative">
            <a href="#" class="position-absolute card-icon"
              ><i class="bi bi-bookmark"></i
            ></a>
            <a href="detail.html"
              ><img
                style="height: 200px; width: 100%"
                src="static/img/12.jpg"
                alt="card Thumbnail"
                class="img-fluid"
            /></a>
            <h5 class="mt-2 card-title text-primary">USh 800,000</h5>
            <div class="card-title">MECOOL KM6 Android TV Box 10</div>
            <div class="card-description">Kampala City • Electronics</div>
            <p class="card-description">20k Likes</p>
            <div class="thumbnail-button">
              <a href="detail.html">Detail</a>
              <a href="detail.html" class="bg-primary">Contact Us</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Pagination -->
      <nav aria-label="Page navigation example mt-3">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled"><a class="page-link">Previous</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </div>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5 class="footer-logo">Jibufy</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac
              urna vel lacus pretium lacinia at ut mi.
            </p>
          </div>
          <div class="col-md-4">
            <h5>Explore</h5>
            <ul class="footer-links">
              <li><a href="#">Marketplace</a></li>
              <li><a href="#">Businesses</a></li>
              <li><a href="about.html">About Us</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><a href="privacy.html">Privacy Policy</a></li>
              <li><a href="#">Terms & Conditions</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h5>Contact</h5>
            <p>Email: contact@airbnb.com</p>
            <p>Phone: +1 (123) 456-7890</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Add Bootstrap JS scripts here (optional, if needed) -->
    <script src="static/js/bootstrap.bundle.min.js"></script>
    <script src="static/js/bootstrap.bundle.min.js.map"></script>
    <script type="text/javascript" src="static/js/htmx.min.js"></script>

    <script src="static/masonry.js"></script>

    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      var elem = document.querySelector(".gallery");
      var msnry = new Masonry(elem, {
        // options
        itemSelector: ".gallery-item",
        columnWidth: ".gallery-item",
      });

      // element argument can be a selector string
      //   for an individual element
      var msnry = new Masonry(".gallery", {
        // options
      });
    </script>
  </body>
</html>
