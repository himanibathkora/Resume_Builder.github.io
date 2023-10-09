<?php include"header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactUs</title>
    <link rel="stylesheet" href="./css/contactUs.css">
</head>
<body>
<div class="new_home_web">
  <div class="responsive-container-block big-container">
    <div class="responsive-container-block textContainer">
      <div class="topHead"><br>
        <p class="text-blk heading">
          Get in
          <span class="blueText">
            touch
          </span>
        </p>
        <div class="blueLine" id="w-c-s-bgc_p-2-dm-id">
        </div>
      </div>
      <p class="text-blk subHeading">
      We value your input! Please share your feedback or queries with us. We're here to assist you. Fill out the form below and we'll respond promptly.
      </p>
    </div>
    <div class="responsive-container-block container">
      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-7 wk-ipadp-10 line" id="i69b">
        <form class="form-box" action="https://formspree.io/f/mzbldwrj" method="POST">
          <div class="container-block form-wrapper">
            <div class="responsive-container-block">
              <div class="left4">
                <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6" id="i10mt-2">
                <input type="text" class="input" id="name" name="FullName" placeholder="Full Name" required>
                </div>
                <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                  <input type="text" class="input" id="email" name="Email" placeholder="Email Address" required>
                </div>
                <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 lastPhone">
                  <input type="text" class="input" id="phone" name="PhoneNumber" placeholder="Phone Number" required>
                </div>
              </div>
              <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-2">
                <textarea type="text" class="textinput" id="message" placeholder="Message"></textarea>
              </div>
            </div>
            <button type="submit" class="send">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include"footer.php"?>
</body>
</html>