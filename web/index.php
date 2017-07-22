<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $stripe['publishable_key']; ?>"
    data-name="California Ticket King, PC"
    data-amount="9900"
    data-description="Live Attorney Service"
    data-image="https://caticketking.com/wp-content/uploads/2017/03/ctk-favicon.jpg"
    data-label="Hire Us Now $99.00"
    data-shipping-address="true"
    data-billing-address="true"
    >
  </script>
</form>
