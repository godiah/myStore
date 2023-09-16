<div>
    <style>
        .my-profile{
            display: flex;
            align-items: flex-start;
            justify-content: center;
            gap: 10px;
            padding: 20px;
        }
        .profile-sidebar{
            width: 25%;
        }
        .profile-edit{
            width: 75%;
        }
        .profile-banner{
            padding: 16px;
            text-align: center;
        }
        .profile-banner h1{
            font-size: 14px;
            letter-spacing: .6px;
        }
        .profile-header{
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 0;
            padding: 10px;
            position: relative;
        }
        .profile-header::after{
          content: "";
          display: block;
          width: 20px;
          height: 2px;
          background-color: #ddd;
          position: absolute;
          left: 10px;
          margin-top: 4px;
        }
        .profile-input {
          display: flex;
          flex: 100%;
          flex-direction: column;
          min-width: 100%;
          width: fit-content;
          position: static;
          padding: 0 15px;
        }
        .profile-input label.text {
          font-size: 16px;
          font-weight: 700;
          position: relative;
          top: 0.5rem;
          margin: 0 0 0 7px;
          padding: 0 3px;
          background: #fff;
          width: max-content;
          max-width: fit-content;
        }
        .profile-input input[type=text].input {
          padding: 11px 10px;
          font-size: 1rem;
          border: 1px #8a8787 solid;
          border-radius: 5px;
        }
        .profile-input input[type=text].input:focus {
          outline: none;
        }
        .profile-input input[type=date].input {
          padding: 11px 10px;
          font-size: 1rem;
          border: 1px #8a8787 solid;
          border-radius: 5px;
        }
        .profile-input input[type=date].input:focus {
          outline: none;
        }
        .profile-input input[type=password].input {
          padding: 11px 10px;
          font-size: 1rem;
          border: 1px #8a8787 solid;
          border-radius: 5px;
        }
        .profile-input input[type=password].input:focus {
          outline: none;
        }
        .form-select{
          border: 1px #8a8787 solid;
          padding: 11px 10px;
          font-size: 1rem;
          border: 1px #8a8787 solid;
          border-radius: 5px; 
        }
        .profile-button{
          text-align: right;
          padding: 15px;
          padding-top: 5px;
        }
        .profile-button a{
          text-decoration: none;
        }
        .profile-btn-cancel{
          color: rgb(235, 100, 51);
          font-size: 16px;
          border-radius:4px;
          display:inline-block;
          cursor:pointer;
          padding:6px 15px;
          margin-left: 15px;
        }
        .profile-btn-cancel:hover{
          background-color: rgb(235, 190, 174);
        }
        .profile-btn-save{
            font-size: 16px;
        	background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
        	background-color:#77b55a;
        	border-radius:4px;
        	border:1px solid #ffffff;
        	display:inline-block;
        	cursor:pointer;
        	color:#ffffff;
        	padding:6px 15px;
            margin-left: 10px;
        	text-decoration:none;
        }
        .profile-btn-save:hover {
        	background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
        	background-color:#72b352;
        }
    </style>

    <main>
        <div class="my-profile">
        <div class="profile-sidebar">
            <div class="profile-banner">
                <h1>Hello, Moses <i class="fa-solid fa-hand"></i></h1>
            </div>
            <div class="profile-sidebar-options">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Profile Details
                    </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Security Settings
                  </label>
                </div>
            </div>
        </div>
        <div class="profile-edit">
            <div class="profile-form">
                <h2 class="profile-header">Profile Details</h2>
                <form method="" action="#">
                    <!-- First Name -->
                    <div class="profile-input">
                      <label for="input" class="text">First Name: </label>
                      <input type="text" placeholder="First Name..." name="" class="input">
                    </div>
                    <!-- Last Name -->
                    <div class="profile-input">
                      <label for="input" class="text">Last Name: </label>
                      <input type="text" placeholder="Last Name..." name="" class="input">
                    </div>
                    <!-- Phone Number -->
                    <div class="profile-input">
                      <label for="input" class="text">Phone Number: </label>
                      <input type="text" placeholder="Phone Number" name="" class="input">
                    </div>
                    <!-- Gender -->
                    <div class="profile-input">
                      <label for="input" class="text">Gender: </label>
                      <select class="form-select" aria-label="Select Gender">
                        <option selected>Gender</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                      </select>
                      <!-- <input type="text" placeholder="Gender" name="" class="input"> -->
                    </div>
                    <!-- Birth Date -->
                    <div class="profile-input">
                      <label for="input" class="text">Birth Date: </label>
                      <input type="date" placeholder="Birth Date" name="" class="input">
                    </div>
                    <!-- Action Buttons  -->
                    <div class="profile-button">
                       <a href="#" class="profile-btn-cancel">Cancel</a>
                       <a href="#" class="profile-btn-save">Save</a>
                    </div>            
                </form>
            </div>
        </div>
        <div class="profile-edit">
            <div class="profile-form">
                <h2 class="profile-header">Security Settings</h2>
                <form method="" action="#">
                    <!-- Current Password -->
                    <div class="profile-input">
                      <label for="input" class="text">Current Password: </label>
                      <input type="password" placeholder="Current Password" name="" class="input">
                    </div>
                    <!-- New Password -->
                    <div class="profile-input">
                      <label for="input" class="text">New Password: </label>
                      <input type="password" placeholder="New Password" name="" class="input">
                    </div>
                    <!-- Confirm New Password -->
                    <div class="profile-input">
                      <label for="input" class="text">Confirm New Password: </label>
                      <input type="password" placeholder="Confirm New Password" name="" class="input">
                    </div>                    
                    <!-- Action Buttons  -->
                    <div class="profile-button">
                       <a href="#" class="profile-btn-cancel">Cancel</a>
                       <a href="#" class="profile-btn-save">Save</a>
                    </div>            
                </form>
            </div>
        </div>        
    </div>
    </main>
</div>