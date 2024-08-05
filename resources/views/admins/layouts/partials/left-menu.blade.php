<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item menu-open">
      <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Quản lý danh mục
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('list-cate') }}" class="nav-link active">
            <i class="far fa-circle nav-icon"></i>
            <p>Danh sách danh mục</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('create-cate') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Thêm danh mục</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Quản lý tin tức
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('list-new') }}" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách tin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('create-new') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Thêm tin tức</p>
            </a>
          </li>
        </ul>
      </li>
  </ul>
