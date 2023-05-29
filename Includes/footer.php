  <!-------- Footer Start -------->
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-3"></div>
      <div class="col-md-3"></div>
      <div class="col-md-3"></div>
    </div>
  </div>
  <div class="foot">
    <div class="container py-4">
      <div class="row">
        <div class="col-md-3">
          <a class="navbar-brand" href="/">
            <img src="./Images/Black-Logo.png" width="220" />
          </a>
        </div>
        <div class="col-md-3 d-flex align-items-center justify-content-center">
          <a href="https://goo.gl/maps/YJ2M5bX86G1tncSW7" target="_blank">
            Mailing Address: 1248 Madison Ave #205, New York, NY, 10128
          </a>
        </div>
        <div class="col-md-4 d-flex align-items-center">
          <div>
            <a href="tel:+18447270033" class="fw-bold">
              Call Now +1-844-727-0033
            </a>
            <br />
            <a href="mailto:marketing@amzpublicationhub.com" class="fw-bold">
              Email : marketing@amzpublicationhub.com
            </a>
          </div>
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center">
          <div>
            <a class="social" href="https://www.instagram.com/amzpublishinghub/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a class="social" href="https://www.facebook.com/amazonpublishinghub/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ter">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mt-3">
            Amazon and all related Marks are Trademarks of Amazon.com, Inc. or
            its affiliates
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-------- Footer End -------->
  <script src="https://kit.fontawesome.com/b1e4efcbad.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>
    $(".count,.count-2").each(function() {
      $(this)
        .prop("Counter", 0)
        .animate({
          Counter: $(this).text(),
        }, {
          duration: 5000,
          easing: "swing",
          step: function(now) {
            $(this).text(Math.ceil(now));
          },
        });
    });
    // Select all elements with the "animate" class
    const animatedElements = document.querySelectorAll(".animate");

    // Create an Intersection Observer instance
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // Add the "active" class to elements when they come into view
          entry.target.classList.add("active");
        } else {
          // Remove the "active" class when elements go out of view
          entry.target.classList.remove("active");
        }
      });
    });

    // Observe each element with the "animate" class
    animatedElements.forEach((element) => {
      observer.observe(element);
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var images = document.getElementsByTagName("img");
      for (var i = 0; i < images.length; i++) {
        var image = images[i];
        if (!image.hasAttribute("alt")) {
          image.setAttribute("alt", "AMZ Publication hub");
        }
      }
    });
  </script>