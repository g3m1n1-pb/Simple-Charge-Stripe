<?php
require_once('../vendor/stripe/lib/Stripe.php');

$stripe = array(
  "secret_key"      => "sk_test_mvAbjzecE3eThwXa6rghnZjC",
  "publishable_key" => "pk_test_6MdAl2FjLmXw4aTfpYAeVEBH"
);

Stripe::setApiKey($stripe['secret_key']);