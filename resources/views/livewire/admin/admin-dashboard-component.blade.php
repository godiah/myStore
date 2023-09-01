<div>
    <!-- Admin Dashboard -->
 <div class="grid-container">
  
  <!-- Header -->
   <header class="header">
     <div class="menu-icon" onclick="openSidebar()">
       <span class="material-icons-outlined" style="cursor: pointer; 
     vertical-align: middle;
     font-size: 20px;
     padding-top: 30px;
     transition: all 0.3s;
     color: #195190FF;">menu</span>
     </div>
     <div class="header-left">    
       <i class="fa-solid fa-magnifying-glass"></i>
     </div>
     <div class="header-right">   
       <i class="fa-regular fa-bell"></i>
       <i class="fa-regular fa-envelope"></i>
       <i class="fa-regular fa-user"></i>
     </div>
   </header>
 
   <!-- Side bar -->
   <aside id="sidebar">
   <div class="sidebar-title">
     <div class="sidebar-brand">
     <span class="material-icons-outlined">inventory</span>Inventory
     </div>
     <span class="material-icons-outlined" onclick="closeSidebar()" style="cursor: pointer;
     vertical-align: middle;
     font-size: 20px;    
     transition: all 0.3s;
     color: #A2A2A1FF;">close</span>
   </div>
   <ul class="sidebar-list">
     <a href="{{route('admin.products')}}">
     <li class="sidebar-list-item"><span class="material-icons-outlined">inventory_2</span>Products</li> 
     </a> 
     <a href="{{route('admin.products.add')}}">
     <li class="sidebar-list-item"><span class="material-icons-outlined">category</span>Add Product</li>  
     </a>
     <a href="{{route('admin.categories')}}">
     <li class="sidebar-list-item"><span class="material-icons-outlined">dashboard</span>Categories</li>
     </a>  
     <a href="{{route('admin.category.add')}}">
     <li class="sidebar-list-item"><span class="material-icons-outlined">style</span>Add Category</li>
     </a>
     <a href="#">
     <li class="sidebar-list-item"><span class="material-icons-outlined">pending_actions</span>Orders</li>
     </a>
     <a href="#">
     <li class="sidebar-list-item"><span class="material-icons-outlined">payments</span>Payments</li>
     </a>
     <a href="#">
     <li class="sidebar-list-item"><span class="material-icons-outlined">people</span>Users</li>
     </a>
     <a href="#">
     <li class="sidebar-list-item"><span class="material-icons-outlined">poll</span>Reports</li>  
     </a>  
   </ul>
   </aside>
 
   <!-- Main Dashboard -->
   <main class="main-container">
     <div class="main-title">
       <p class="font-weight-bold">DASHBOARD</p>      
     </div>
     <!-- Cards -->
     <div class="main-cards">
       <!-- Card 1 -->      
         <div class="card">
         <div class="card-inner">
           <a href="#">
           <p class="text-primary" style="font-weight: 900; font-size: 18px;">PRODUCTS</p>
           </a>
           <span class="material-icons-outlined">inventory_2</span>
         </div>
         <span class="text-primary font-weight-bold">249</span>  
       </div>
       
       <!-- Card 2 -->      
       <div class="card">
         <div class="card-inner">
           <a href="#">
           <p class="" style="font-weight: 900; font-size: 18px; color: #006B38FF;">ORDERS</p>
           </a>
           <span class="material-icons-outlined">pending_actions</span>
         </div>
         <span class=" font-weight-bold" style="color:#006B38FF;">89</span>  
       </div>
      
       <!-- Card 3 -->      
       <div class="card">
         <div class="card-inner">
           <a href="#">
           <p class="" style="font-weight: 900; font-size: 18px; color: #F2AA4CFF;">PAYMENTS</p>
           </a>
           <span class="material-icons-outlined">payments</span>
         </div>
         <span class=" font-weight-bold" style="color: #F2AA4CFF;">24</span>  
       </div>
       
       <!-- Card 4 -->      
       <div class="card">
         <div class="card-inner">
           <a href="#">
           <p class="" style="font-weight: 900; font-size: 18px; color: #990011FF">REPORTS</p>
           </a>
           <span class="material-icons-outlined">poll</span>
         </div>
         <span class=" font-weight-bold" style="color: #990011FF;">13</span>  
       </div>
            
     </div>
     <!-- Charts and Graphs -->
     <div class="charts">
       <!-- Chart 1 -->
       <div class="charts-card">
         <p class="chart-title">Best Selling Products</p>
         <div id="bar-chart">          
         </div>
       </div>
       <!-- Chart 2 -->
       <div class="charts-card">
         <p class="chart-title">Purchase and Sales Orders</p>
         <div id="area-chart">          
         </div>
       </div>
     </div>
   </main>
  </div>
 
 <!-- JavaScript -->
 <script src="Js/jquery-3.6.3.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 <script src="../Js/script_admin.js"></script>
</div>
