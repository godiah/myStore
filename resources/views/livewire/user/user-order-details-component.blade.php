<div>
    {{-- Stop trying to control. --}}
    <style>
        /* Reset some default styles for the body */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        /* Header styles */
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 5px;
        }

        header h2 {
            font-size: 36px;
        }

        header a {
            font-size: 20px;
        }

        /* Main content styles */
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Section styles */
        section {
            margin-bottom: 30px;
        }

        section h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ccc;
        }

        table th,
        table td {
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #333;
            color: #fff;
        }

        /* Add a subtle hover effect to tables */
        table:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Add a subtle hover effect to table rows */
        table tbody tr:hover {
            background-color: #f2f2f2;
        }

        /* CSS for the Cancel button container */
        .cancel-button-container {
            text-align: right;
        }

        /* CSS for the Cancel button */
        .btn-cancel-order {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff4444; /* Red color for cancel */
            color: #fff; /* White text color */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        /* Hover effect for the Cancel button */
        .btn-cancel-order:hover {
            background-color: #ff0000; /* Darker red on hover */
        }

        /* Alert container styles */
        .alert {
            background-color: #f8d7da; /* Reddish color for error alerts */
            color: #721c24; /* Text color */
            border: 1px solid #f5c6cb; /* Border color */
            border-radius: 5px; /* Rounded corners */
            padding: 10px 20px; /* Padding for content */
            margin: 20px 0; /* Margin to separate from other content */
            font-size: 16px;
        }
    </style>
    <header>
        <h2>{{$order->user->name}} Orders</h2>
        <a href="{{route('user.orders')}}">All My Orders</a>
    </header>
    <main>
        @if(Session::has('order_message'))
            <div class="alert">
                <p>{{Session::get('order_message')}}</p>
            </div>
        @endif
        @if($order->status == 'ordered')
            <!-- <div class=" flex justify-end">
                <a href="#" class="p-2 bg-red-500 rounded" wire:click.prevent="cancelOrder">Cancel order</a>
            </div> -->
            <div class="cancel-button-container">
                <button class="btn-cancel-order" wire:click.prevent="cancelOrder">Cancel Order</button>
            </div>

        @endif
        <section class="order-summary">
            <h2>Order Summary</h2>
            <table>
                <tbody>
                    <tr>
                        <th>Order #:</th>
                        <td>{{$order->id}}</td>
                    </tr>
                    <tr>
                        <th>Date:</th>
                        <td>{{$order->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Subtotal:</th>
                        <td>Ksh.{{$order->subtotal}}</td>
                    </tr>

                    <tr>
                        <th>Tax:</th>
                        <td>Ksh.{{$order->tax}}</td>
                    </tr>

                    <tr>
                        <th>Total:</th>
                        <td>Ksh.{{$order->total}}</td>
                    </tr>

                    <tr>
                        <th>Payment Mode:</th>
                        <td>{{$order->transaction->mode}}</td>
                    </tr>
                    <!-- Add more summary details as needed -->
                </tbody>
            </table>
        </section>

        <section class="order-summary">
            <h2>Transaction Summary</h2>
            <table>
                <tbody>
                    <tr>
                        <th>Payment Mode:</th>
                        <td>{{$order->transaction->mode}}</td>
                    </tr>
                    <tr>
                        <th>Transaction status</th>
                        <td>{{$order->transaction->status}}</td>
                    </tr>
                    <tr>
                        <th>Transaction Date</th>
                        <td>{{$order->transaction->created_at}}</td>
                    </tr>
                    <!-- Add more summary details as needed -->
                </tbody>
            </table>
        </section>
        <section class="ordered-items">
            <h2>Ordered Items</h2>
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->orderItems as $item)
                        <tr>
                            <td><img src="" alt="product Image"></td>
                            <td>{{$item->product->name}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->product->regular_price}}</td>
                            <td>{{$item->quantity * $item->product->regular_price}}</td>
                        </tr>
                    @endforeach
                    <!-- <tr>
                        <td>Product B</td>
                        <td>1</td>
                        <td>$25.00</td>
                    </tr> -->
                    <!-- Add more ordered items as needed -->
                </tbody>
            </table>
            <div><p>Total={{$order->total}}</p></div>

        </section>
        <section class="billing-details">
            <h2>Billing Details</h2>
            <table>
                <tbody>
                    <tr>
                        <th>Name:</th>
                        <td>{{$order->firstname}} - {{$order->lastname}}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{$order->email}} or {{$order->email2}}</td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td>{{$order->mobile}} or {{$order->mobile2}}</td>
                    </tr>

                    <tr>
                        <th>Country:County</th>
                        <td>{{$order->country}} : {{$order->county}}</td>
                    </tr>
                    <tr>
                        <th>Subcounty:Town</th>
                        <td>{{$order->subcounty}} : {{$order->town}}</td>
                    </tr>
                    <tr>
                        <th>Specific Area:Street Name:Apartment</th>
                        <td>{{$order->specificarea}} : {{$order->streetname}} : {{$order->aptnumber}}</td>
                    </tr>
                    <tr>
                        <th>Additional info:</th>
                        <td>{{$order->addinfo}}</td>
                    </tr>
                    <!-- Add more billing details as needed -->
                </tbody>
            </table>
        </section>
        @if ($order->is_shipping_different==1)
        <section class="shipping-details">
            <h2>Shipping Details</h2>
            <table>
                <tbody>
                <tr>
                        <th>Name:</th>
                        <td>{{$order->shipping->firstname}} - {{$order->shipping->lastname}}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{$order->shipping->email}} or {{$order->shipping->email2}}</td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td>{{$order->shipping->mobile}} or {{$order->shipping->mobile2}}</td>
                    </tr>

                    <tr>
                        <th>Country:County</th>
                        <td>{{$order->shipping->country}} : {{$order->shipping->county}}</td>
                        <!-- <td>{{$order->shipping->country}} : {{$order->shipping->county}}</td> -->
                    </tr>
                    <tr>
                        <th>Subcounty:Town</th>
                        <td>{{$order->shipping->subcounty}} : {{$order->shipping->town}}</td>
                    </tr>
                    <tr>
                        <th>Specific Area:Street Name:Apartment</th>
                        <td>{{$order->shipping->specificarea}} : {{$order->shipping->streetname}} : {{$order->shipping->aptnumber}}</td>
                    </tr>
                    <tr>
                        <th>Additional info:</th>
                        <td>{{$order->shipping->addinfo}}</td>
                    </tr>
                    <!-- Add more shipping details as needed -->
                </tbody>
            </table>
        </section>
        @endif
        
    </main>
</div>
