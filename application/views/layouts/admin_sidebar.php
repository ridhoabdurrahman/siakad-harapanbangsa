<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo ">
        <a href="index-2.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="<?= base_url() ?>assets/img/icons/logo-purple.svg" alt="Primary Logo" width="42">
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-3">Harapan</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item <?= $this->uri->segment(1) == "dashboard" ? "active" : "" ?>">
            <a href="app-email.html" class="menu-link">
                <i class="menu-icon tf-icons fa-duotone fa-fw fa-gauge"></i>
                <div class="text-truncate">Dashboard</div>
            </a>
        </li>

        <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenus = "SELECT `menu`.`id`, `menu`.`name` FROM `menu` ORDER BY `menu`.`id` ASC";
        $menus = $this->db->query($queryMenus)->result_array();

        foreach ($menus as $menu) :
        ?>
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text"><?= $menu["name"] ?></span>
            </li>

            <?php
            $menuId = $menu['id'];
            $querySubMenu = "SELECT * FROM `sub_menu` WHERE `sub_menu`.`menu_id` = $menuId AND `sub_menu`.`is_active` = 1 ORDER BY `sub_menu`.`menu_name` ASC";
            $subMenus = $this->db->query($querySubMenu)->result_array();

            foreach ($subMenus as $subMenu) :
            ?>
                <li class="menu-item <?= $this->uri->segment(1) == $subMenu['link'] ? "active" : "" ?>">
                    <a href="<?= site_url() . $subMenu['link'] ?>" class="menu-link">
                        <i class="menu-icon tf-icons <?= $subMenu['icon'] ?> me-3"></i>
                        <div class="text-truncate"><?= ucwords($subMenu['menu_name']) ?></div>
                    </a>
                </li>
        <?php
            endforeach;
        endforeach;
        ?>
    </ul>
</aside>
<!-- / Menu -->

<!-- Layout container -->
<div class="layout-page">