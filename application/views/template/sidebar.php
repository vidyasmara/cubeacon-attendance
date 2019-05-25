<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" style="background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center mb-4" href="<?= base_url('user') ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-book-open"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Cubetendance</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <div class="container">
            <img src="<?= base_url('') ?>assets/img/default.jpg" class="img-thumbnail" alt="default" width="304" height="236">
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu`.`id`,`menu`
                    FROM `user_menu` JOIN `user_access_menu`
                    ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                    WHERE `user_access_menu`.`role_id` = $role_id
                    ORDER BY `user_access_menu`.`menu_id` ASC
                    ";
        $menu = $this->db->query($queryMenu)->result_array();
        ?>

        <?php foreach ($menu as $m) : ?>

            <div class="sidebar-heading">
                <?= $m['menu']; ?>
            </div>

            <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT *
                    FROM `user_sub_menu`
                    WHERE `menu_id` = $menuId
                    AND `is_active` = 1
                    ";
            $SubMenu = $this->db->query($querySubMenu)->result_array();
            ?>

            <?php foreach ($SubMenu as $sm) : ?>
                <?php if ($title == $sm['title']) : ?>
                    <li class="nav-item active">
                    <?php else : ?>
                    <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                        <i class="<?= $sm['icon']; ?>"></i>
                        <span><?= $sm['title']; ?></span></a>
                </li>
            <?php endforeach; ?>
            <!-- Divider -->
            <hr class="sidebar-divider mt-3">
        <?php endforeach; ?>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->