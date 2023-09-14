<div>
    <style>
        /* Add styles for the table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        /* Style table headers */
        th {
            background-color: #333;
            color: #fff;
            text-align: left;
            padding: 10px;
        }

        /* Style table rows */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Style table cells */
        td, th {
            padding: 10px;
            border: 1px solid #ccc;
        }

        /* Center the FontAwesome icon */
        td i {
            display: block;
            text-align: center;
            font-size: 24px;
            color: #33cc33; /* Green color for success */
        }

        /* Add a subtle hover effect */
        tr:hover {
            background-color: #ddd;
            transform: scale(1.02);
            transition: transform 0.3s ease;
        }
        .message {
            color:green;
        }
    </style>
    <header>
        <h1>Admin Orders</h1>
    </header>

    <main>
        @if(Session::has('order_message'))
            <div class="message">{{Session::get('order_message')}}</div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Order Id</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Name</th>
                    <!-- <th>Shipping</th> -->
                    <th>Email</th>
                    <th>Status</th>
                    <th>Payment</th>
                    <th>Action</th>
                    <th>Status 2</th>
                    <!-- <th>Action</th> -->
                    <!-- <th>Status</th>
                    <th>Status</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>ksh.{{$order->created_at}}</td>
                        <!-- <td>Ksh.{{$order->tax}}</td> -->
                        <td>Ksh.{{$order->Total}}</td>
                        <td>{{$order->firstname}}</td>
                        <!-- <td>{{$order->lastname}}</td> -->
                        <!-- <td>{{$order->mobile}} or {{$order->mobile2}}</td> -->
                        <!-- <td>{{$order->line1}}</td> -->
                        <td>{{$order->email}}</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->transaction->mode}}</td>

                        <!-- <td>{{$order->created_at}}</td> -->
                        <td><a href="{{route('user.orderdetails',['order_id'=>$order->id])}}">details</a></td>
                        <td class="py-2 px-4">
                            <ul>
                                <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">Delivered</a></li>
                                <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'canceled')">Canceled</a></li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
                <!-- <tr>
                    <td>#12345</td>
                    <td>August 15, 2023</td>
                    <td>$150.00</td>
                    <td><i class="fas fa-check-circle"></i> Order Placed</td>
                </tr> -->
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <div>
        {{$orders->links()}}
        </div>
    </main>
</div>

