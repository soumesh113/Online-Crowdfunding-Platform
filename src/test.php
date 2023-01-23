<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<?php
if (isset($_GET['amt'])) {
    $amount = $_GET['amt'];
}
?>
<script>
    var options = {
        "key": "rzp_test_6XUCrUumpAQMFP", // Enter the Key ID generated from the Dashboard
        "amount": "3000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "currency": "INR",
        "name": "easyfunds.com",
        "description": "Investment",
        "image": "https://example.com/your_logo",
        "order_id": "order_L6z22oCHkSsez0", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
        "callback_url": "http://localhost:3000/src/vansh.php",
        "prefill": {
            "name": "Gaurav Kumar",
            "email": "gaurav.kumar@example.com",
            "contact": "9000090000"
        },
        "notes": {
            "address": "Razorpay Corporate Office"
        },
        "theme": {
            "color": "#3399cc"
        }
    };
    var rzp1 = new Razorpay(options);
    document.getElementById('rzp-button1').onclick = function(e) {
        rzp1.open();
        e.preventDefault();
    }
</script>