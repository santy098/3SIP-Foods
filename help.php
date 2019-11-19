<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Help</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('img/background-main.jpg');">
<?php include("head.php"); ?>
<div id="accordion">
  <div class="card">
    <div class="card-header" style="background-color:white;border:0px;" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" style="text-decoration:none;color:rgb(250, 91, 38);border:0px" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        When do you deliver?
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      We deliver on all days for all customers.<BR>
You can order during any time of the day. The delivery will be done between 30-60 mins after placement of order.
    </div>
  </div>
  <div class="card">
    <div class="card-header" style="background-color:white;border:0px" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style="text-decoration:none;color:rgb(250, 91, 38);border:0px" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        What if I am not at home to accept the delivery?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      Not to worry! If you are not home during delivery, our courier will drop the box off at your front door (or wherever you specify in your Delivery Instructions).
If you live in an area where a box could not easily be left, we suggest one of the following solutions:<BR>
✔Provide the address of a helpful neighbor that will be home during the delivery window and can accept your package for you.<BR>
✔Have the box delivered to your work place.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" style="background-color:white;border:0px" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style="text-decoration:none;color:rgb(250, 91, 38);border:0px" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        How does the food stay fresh in transit?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      We have specially designed boxes that we pack with a nice, thick liner and ice packs to ensure that everything arrives to you perfectly cold!
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" style="background-color:white;border:0px" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style="text-decoration:none;color:rgb(250, 91, 38);border:0px" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        How much does delivery cost?
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
      It’s free, silly! You subscribe and delivery is on us!
      </div>
    </div>
  </div>
</div>
</body>
</html>