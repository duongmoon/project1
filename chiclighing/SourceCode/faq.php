<?php
require "header.php";

require_once('db/dbhelper.php');
      
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <link rel="stylesheet" href="style_head_vs_last/footer_faq.css" />
    <title>Document</title>
  </head>

  <body>
    <section class="body-faq">
      <div class="container">
        <div class="accordion">
          <div class="accordion-item" id="question1">
            <a class="accordion-link" href="#question1">
              When will I receive my order?
              <i class="icon ion-plus-round"></i>
              <i class="icon ion-minus-round"></i>
            </a>
            <div class="answer">
              <p>
                Normally the delivery time is 4-10 working days. Once our
                carriers have begun shipping, the delivery time can extend up to
                six working days.
              </p>
            </div>
          </div>

          <div class="accordion-item" id="question2">
            <a class="accordion-link" href="#question2">
              What is the reason ChicLighting is unable to ship to the United
              Kingdom?
              <i class="icon ion-plus-round"></i>
              <i class="icon ion-minus-round"></i>
            </a>
            <div class="answer">
              <p>
                Our carriers are currently unable to perform shipments due to
                Brexit and documentation related issues.
              </p>
            </div>
          </div>

          <div class="accordion-item" id="question3">
            <a class="accordion-link" href="#question3">
              I accidentally entered the wrong address information in my order.
              What can I do?
              <i class="icon ion-plus-round"></i>
              <i class="icon ion-minus-round"></i>
            </a>
            <div class="answer">
              <p>
                Has your order not been shipped yet? Then you can report a
                change in the address details by contacting our customer service
                team, preferable via phone to act as quick as possible. If the
                order information has already been forwarded to the warehouse,
                we can unfortunately no longer make any changes to the order.
                Has your order already been shipped? Then contact the delivery
                service, they may be able to make a change for you.
              </p>
            </div>
          </div>

          <div class="accordion-item" id="question4">
            <a class="accordion-link" href="#question4">
              <p>
                I have already placed my order but still want to add products.Is
                this still possible?
              </p>
              <i class="icon ion-plus-round"></i>
              <i class="icon ion-minus-round"></i>
            </a>
            <div class="answer">
              <p>
                We process our orders as fast as possible to provide fast
                deliveries for all our customers. If your order has not yet been
                shipped and the information have not been transferred to the
                warehouse we are still able to change your order. You can check
                the status of your order in your personal account. If you are
                still able to make any changes please contact our customer
                service via phone to take quick action.
              </p>
            </div>
          </div>

          <div class="accordion-item" id="question5">
            <a class="accordion-link" href="#question5">
              <p>Why does ChicLighting charge disposal fee for an order?</p>
              <i class="icon ion-plus-round"></i>
              <i class="icon ion-minus-round"></i>
            </a>
            <div class="answer">
              <p>
                For consumers, the disposal fee must be included in the sales
                price. Because ChicLighting works with many companies, the
                disposal fee may be stated separately. This does not mean when
                you receive your new order, that you give your old lamps to our
                driver.
              </p>
            </div>
          </div>

          <div class="accordion-item" id="question6">
            <a class="accordion-link" href="#question6">
              <p>How can I change my order?</p>
              <i class="icon ion-plus-round"></i>
              <i class="icon ion-minus-round"></i>
            </a>
            <div class="answer">
              <p>
                If you want to change your order, we kindly ask you to contact
                our customer service by mail or phone: 09123456789
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
<?php
  require "footer.php";

  ?>