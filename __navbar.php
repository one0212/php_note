<style>
    .nav-item.active {
        background-color: orange;
    }

</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item  <?= $page_name=='0820_02_data_list' ? 'active' : '' ?>">
              <a class="nav-link" href="0820_02_data_list.php">資料列表</a>
            </li>

            <li class="nav-item  <?= $page_name=='0822_fetch_data_insert' ? 'active' : '' ?>">
              <a class="nav-link" href="0822_fetch_data_insert.php">新增資料</a>
            </li>
            <li class="nav-item  <?= $page_name=='0822_ajax_data_list2' ? 'active' : '' ?>">
              <a class="nav-link" href="0822_ajax_data_list2.php">資料列表2(Ajax)</a>
            </li>
            
            <li class="nav-item <?= $page_name=='0820_04_page2' ? 'active' : '' ?>">
              <a class="nav-link" href="0820_04_page2.php">Page2</a>
            </li>
          </ul>
        
        </div>
      </div>
    </nav>
