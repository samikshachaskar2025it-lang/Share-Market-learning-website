<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51Pc4kbRw3aUPex0RPemJKKHXkj9JdQb2DvRqk7vq5xJPBF4yVjzfipAkqTZwBNYIrafhqG90EJi0Gt15yclFpQlm00Oy5eBbKQ";

$secretKey="sk_test_51Pc4kbRw3aUPex0RTRFi0sZICdK6xqCoBjCdzNCl1KQvaVPvyF5YkHH6mG848NG2wjFtQqKpWOMHM9LDengU5cA500a7zNdq66";

\Stripe\Stripe::setApiKey($secretKey);


?>