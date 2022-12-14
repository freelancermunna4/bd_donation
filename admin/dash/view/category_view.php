<?php

    $posts = $obj->category();

    if(isset($_GET['status'])){
      if($_GET['status']=='delete'){
          $id = $_GET['id'];
          $del_msg = $obj->delete_category($id);
      }
  }



?>

<section class="content_wrapper">
        <!-- Page Details Title -->
        <div class="page_details">
          <div>
            <a href="../../index.html" class="go_home"><small>Home</small></a>
            <small>/</small>
            <small>All Categories</small>
          </div>
        </div>

        <!-- Page Main Content -->
        <section class="page_main_content">
          <div class="main_content_container">
            <!-- Table -->
            <div class="table_content_wrapper">
              <div class="page_title">
                <h4>ALL CATEGORIES</h4>
              </div>
              <header class="table_header">
                <div class="table_header_left">
                  <p>Show</p>
                  <select>
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                    <option>100</option>
                  </select>
                  <p>Entries</p>
                </div>

                <div class="table_header_right">
                  <p>Search:</p>
                  <input type="search" placeholder="Search category" />
                </div>
              </header>

              <div class="table_parent">
                <div class="table_sub_parent">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>SL</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        <th class="table_th">
                          <div class="table_th_div">
                            <span>Name</span>
                            <span class="sort_icon"></span>
                          </div>
                        </th>
                        <th class="table_th">
                          <span>Action</span>
                        </th>
                      </tr>
                    </thead>
                    <tbody id="category_wrapper" class="text-sm">
                    <?php
            while($postdata=mysqli_fetch_assoc($posts)){

             ?>
                      <tr>
                        <td><?php echo $postdata['id']?></td>
                        <td><?php echo $postdata['category_name']?></td>
                        <td>
                          <a href="#">Edit</a> ||
                          <a class="action delete" href="?status=delete&&id=<?php echo $postdata['id']?>">Delete</a> 
                        </td>
                      </tr>

                      <?php }?>
                      
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="pagination_buttons">
                <p class="text-xs font-semibold">
                  Showing 1 to 10 of 100 Entries
                </p>

                <div class="flex gap-2">
                  <button>Prev</button>
                  <button>Next</button>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>