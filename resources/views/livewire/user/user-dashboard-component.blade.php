<div>
    {{-- Stop trying to control. --}}
    <style>
        .user-dashboard{
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            gap: 10px;
            padding: 20px 0;
            background-color: #E6E8ED;
        }
        .user-sidebar{
            width: 22%;
            background-color: #fff;
        }
        .user-account-overview{
            width: 78%;
            background-color: #fff;
        }
        .user-title{
            border-bottom: .8px solid #ddd;  
        }
        .user-title h1{
          font-size: 18px;
          text-align: left;
          padding: 5px;
          margin-bottom: 0;
          letter-spacing: .8px;
        }

        hr{
            margin: 0;
        }
        .fa-star, .fa-gift , .fa-heart, .fa-clock-rotate-left, .fa-basket-shopping{
            margin-right: 5px;
            text-decoration: none;
        }
        /* ul li{
            padding: 11px 7px;
        } */
        .user-list li{
            padding: 11px 7px;
        }
        .user-side-links{
            color: #6c757d;
        }
        li:hover{
            color: #001233;
            transform: scale(1.06) translateY(-.5%);
            transition: 0.2s ease-in-out;
        }
        .btn-out{
            padding: 12px;
            text-align: center;
        }
        .log-out{
            color: #6c757d;
            text-decoration: none;
            font-size: 16px;
            padding: 10px;
            margin: 10px 0;
        }
        .log-out:hover {
            background-color: #6b1d1d;
            color: #fff !important;
            border-radius: 12px; 
        }
        .user-account-cards {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 10px;
            padding: 10px;
            padding-bottom: 18px;
        }
        .user-account-card {
          background-color: #fff;
          padding: 2px;
          border-radius: 5px;
          border: .8px solid #ddd;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
          min-height: 170px;
        }
        .user-account-title{
           border-bottom: .8px solid #ddd;
           text-align: left; 
           font-size: 15px;
           padding: 15px;
        }
        .edit-address{
            display: flex;
            justify-content: space-between;
            border-bottom: .8px solid #ddd; 
            font-size: 15px;
            padding: 15px;
        }
        .edit-address h5{
            font-size: 15px;
            margin-bottom: 0;
        }
        p{
            margin-bottom: 0;
            padding: 5px;
            text-align: left;
        }
    </style>

    <main>
        <div class="user-dashboard">
            <div class="user-sidebar">
                <div class="user-title">
                    <h1><strong>My Account</strong></h1>
                </div>
                <div class="user-side-nav">
                    <ul class="user-list">
                        <li ><a class="user-side-links" href=""><i class="fa-solid fa-basket-shopping"></i>Orders</a></li>
                        <li><a class="user-side-links" href=""><i class="fa-solid fa-star"></i>Product Reviews</a></li>
                        <li><a class="user-side-links" href=""><i class="fa-solid fa-gift"></i>Vouchers</a></li>
                        <li><a class="user-side-links" href=""><i class="fa-solid fa-heart"></i>Saved Items</a></li>
                        <li><a class="user-side-links" href=""><i class="fa-solid fa-clock-rotate-left"></i>Recently Viewed</a></li>
                        <hr>
                        <li><a class="user-side-links" href="">Account Management</a></li>
                        <hr>
                        <li><a href="" class="text-danger">Close Account</a></li>
                        <hr>                        
                    </ul>
                    <div class="btn-out">
                        <a href="" class="log-out">Log Out</a>
                    </div>
                </div>
            </div>
            <div class="user-account-overview">
                <div class="user-title">
                    <h1><strong>Account overview</strong></h1>
                </div>
                <div class="user-account-cards">
                    <!-- Account Details -->
                    <div class="user-account-card">
                      <h5 class="user-account-title">Account Details</h5>
                      <p class="">godiahmoses</p>
                      <p class="">godiahmoses70@gmail.com</p>
                    </div>
                    <!-- Address Book -->
                    <div class="user-account-card">
                      <div class="edit-address">
                        <h5 class="">Address Book</h5>
                        <a href=""><i class="fa-solid fa-pen"></i></a>
                      </div>
                      <p>Your Default Shipping Address : </p>
                      <p class="">Juja Jokamawa, Kiambu County</p>
                    </div> 
                    <!-- Store Credit -->
                    <div class="user-account-card">
                      <h5 class="user-account-title">Store Credit</h5>
                      <p class="">Currently unavailable | Check back soon</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</div>
