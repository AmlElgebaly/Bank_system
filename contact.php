<?php
require_once 'header.php';
?>

<body>
  <div class="contact-bg-img" style="background-image: url(https://images.pexels.com/photos/4174746/pexels-photo-4174746.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260);">
    <div class="parent">
      <div class="child">
        <form action="/action_page.php" method="post">
          <div class="mb-3">

            <input type="name" class="form-control" placeholder="Your Name" name="name">
          </div>
          <div class="mb-3 mt-3">

            <input type="email" class="form-control" id="email" placeholder="Your Email Address" name="email">
          </div>
          <div class="mb-3">

            <input type="phone" class="form-control" placeholder="Your Phone" name="pswd">
          </div>
          <div class="form-check mb-3">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
          </div>

          <textarea class="form-control" rows="10" id="comment" name="text" placeholder="Comments" style="max-width: 274px; height: 154px; resize: none;"></textarea>
          <button type="submit" class="btn btn-primary submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
<?php
require_once 'footer.php';
?>