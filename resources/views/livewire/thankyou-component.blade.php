<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        /* Reset some default styles for the body */
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }

    /* Center the thank you content vertically and horizontally */
    .thank-you-container {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        opacity: 0; /* Initially hidden for animation */
        animation: fadeIn 1s ease forwards;
    }

    /* Style the icon */
    .thank-you-icon {
        font-size: 48px;
        color: #33cc33; /* Green color for the checkmark */
    }

    /* Style the heading */
    .thank-you-heading {
        font-size: 32px;
        color: #333;
        margin-top: 10px; /* Slight top margin to separate from the icon */
    }

    /* Style the message */
    .thank-you-message {
        font-size: 18px;
        color: #666;
        line-height: 1.5;
    }

    /* Add a subtle hover effect */
    .thank-you-container:hover {
        transform: translate(-50%, -50%) scale(1.02);
        transition: transform 0.3s ease;
    }

    /* Animation keyframes */
    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    </style>
    <div class="thank-you-container">
        <i class="fas fa-check-circle thank-you-icon"></i>
        <h1 class="thank-you-heading">Thank You for Placing Your Order with Us</h1>
        <p class="thank-you-message">We appreciate your business and will process your order promptly.</p>
        <p>Continue <span><a href="{{route('shop')}}">Shopping</a></span></p>
    </div>
</div>
