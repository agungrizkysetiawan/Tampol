<?php
/**
 * page_head.php
 *
 * Author: pixelcave
 *
 * Header and Sidebar of each page
 *
 */
include '../config/database.php';

session_start();    
if (isset($_SESSION['username'])) {
    $username   = $_SESSION['username'];
    $nama       = $_SESSION['nama_lengkap'];
}else if (empty($_SESSION['username'])) {
    echo "<script>window.location = 'login.php'</script>";
}

$qry_siswa = "SELECT m.nim, m.nama, k.nama_kelas AS kelas, k.prodi
FROM mahasiswa m
JOIN kelas k ON m.id_kelas = k.id_kelas";
$exe_siswa = mysqli_query($db, $qry_siswa);

$qry_dosen = "SELECT * FROM dosen";
$exe_dosen = mysqli_query($db, $qry_dosen);

$qry_kelas = "SELECT k.id_kelas, k.nama_kelas, k.prodi, d.nama_dosen
              FROM kelas k
              JOIN dosen d ON k.nip = d.nip";
$exe_kelas = mysqli_query($db, $qry_kelas);


// $qry_dpa = "SELECT * FROM dpa ORDER BY id_dpa ASC";
// $exe_dpa = mysqli_query($db, $qry_dpa);

$qry_jenis_tatib    =   "SELECT * FROM jenis_tatib ORDER BY nama_tatib desc";
$exe_jenis_tatib    = mysqli_query($db, $qry_jenis_tatib);

// $qry_jenis_pelanggaran    =   "SELECT * FROM jenis_pelanggaran";
// $exe_jenis_pelanggaran    = mysqli_query($db, $qry_jenis_pelanggaran);

$qry_laporan_pelanggaran    =   "SELECT * FROM data_pelanggaran WHERE status = 'N'";
$exe_laporan_pelanggaran    = mysqli_query($db, $qry_laporan_pelanggaran);

$qry_laporan_pelanggaran2    =   "SELECT * FROM data_pelanggaran WHERE status = 'P'";
$exe_laporan_pelanggaran2    = mysqli_query($db, $qry_laporan_pelanggaran2);

$qry_count_siswa    =   "SELECT COUNT(nim) FROM mahasiswa";
$exe_count_siswa    =   mysqli_query($db, $qry_count_siswa);
$far_count_siswa    =   mysqli_fetch_row($exe_count_siswa);

$qry_count_dosen    =   "SELECT COUNT(nip) FROM dosen";
$exe_count_dosen    =   mysqli_query($db, $qry_count_dosen);
$far_count_dosen    =   mysqli_fetch_row($exe_count_dosen);

$qry_count_kelas    =   "SELECT COUNT(id_kelas) FROM kelas";
$exe_count_kelas    =   mysqli_query($db, $qry_count_kelas);
$far_count_kelas    =   mysqli_fetch_row($exe_count_kelas);

$qry_count_jenis_tatib    =   "SELECT COUNT(nama_tatib) FROM jenis_tatib";
$exe_count_jenis_tatib    =   mysqli_query($db, $qry_count_jenis_tatib);
$far_count_jenis_tatib    =   mysqli_fetch_row($exe_count_jenis_tatib);


$qry_data_pelanggaran    =   "SELECT COUNT(id) FROM data_pelanggaran";
$exe_data_pelanggaran    =   mysqli_query($db, $qry_data_pelanggaran);
$far_data_pelanggaran    =   mysqli_fetch_row($exe_data_pelanggaran);

?>


<?php
$page_classes = '';

if ($template['header'] == 'navbar-fixed-top') {
    $page_classes = 'header-fixed-top';
} else if ($template['header'] == 'navbar-fixed-bottom') {
    $page_classes = 'header-fixed-bottom';
}

if ($template['sidebar']) {
    $page_classes .= (($page_classes == '') ? '' : ' ') . $template['sidebar'];
}

if ($template['main_style'] == 'style-alt')  {
    $page_classes .= (($page_classes == '') ? '' : ' ') . 'style-alt';
}

if ($template['footer'] == 'footer-fixed')  {
    $page_classes .= (($page_classes == '') ? '' : ' ') . 'footer-fixed';
}

if (!$template['menu_scroll'])  {
    $page_classes .= (($page_classes == '') ? '' : ' ') . 'disable-menu-autoscroll';
}
?>
<div id="page-container"<?php if ($page_classes) { echo ' class="' . $page_classes . '"'; } ?>>
    <!-- Alternative Sidebar -->
    <div id="sidebar-alt">
        <!-- Wrapper for scrolling functionality -->
        <div class="sidebar-scroll">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
            </div>
            <!-- END Sidebar Content -->
        </div>
        <!-- END Wrapper for scrolling functionality -->
    </div>
    <!-- END Alternative Sidebar -->

    <!-- Main Sidebar -->
    <div id="sidebar"  style="font-family: 'Poppins', sans-serif;">
        <!-- Wrapper for scrolling functionality -->
        <div class="sidebar-scroll">
            <!-- Sidebar Content -->
            <div class="sidebar-content">

                <!-- User Info -->
                <div class="top-bar">
        <img src="img/tampols.png" alt="Logo" width="150">
        <!-- Jika Anda ingin menambahkan teks atau elemen lain di sekitar gambar, Anda bisa tambahkan di sini -->
    </div>

                <?php if ($primary_nav) { ?>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav">
                    <?php foreach( $primary_nav as $key => $link ) {
                        $link_class = '';
                        $li_active  = '';
                        $menu_link  = '';

                        // Get 1st level link's vital info
                        $url        = (isset($link['url']) && $link['url']) ? $link['url'] : '#';
                        $active     = (isset($link['url']) && ($template['active_page'] == $link['url'])) ? ' active' : '';
                        $icon       = (isset($link['icon']) && $link['icon']) ? '<i class="' . $link['icon'] . ' sidebar-nav-icon"></i>' : '';

                        // Check if the link has a submenu
                        if (isset($link['sub']) && $link['sub']) {
                            // Since it has a submenu, we need to check if we have to add the class active
                            // to its parent li element (only if a 2nd or 3rd level link is active)
                            foreach ($link['sub'] as $sub_link) {
                                if (in_array($template['active_page'], $sub_link)) {
                                    $li_active = ' class="active"';
                                    break;
                                }

                                // 3rd level links
                                if (isset($sub_link['sub']) && $sub_link['sub']) {
                                    foreach ($sub_link['sub'] as $sub2_link) {
                                        if (in_array($template['active_page'], $sub2_link)) {
                                            $li_active = ' class="active"';
                                            break;
                                        }
                                    }
                                }
                            }

                            $menu_link = 'sidebar-nav-menu';
                        }

                        // Create the class attribute for our link
                        if ($menu_link || $active) {
                            $link_class = ' class="'. $menu_link . $active .'"';
                        }
                        ?>
                        <?php if ($url == 'header') { // if it is a header and not a link ?>
                        <li class="sidebar-header">
                            <?php if (isset($link['opt']) && $link['opt']) { // If the header has options set ?>
                            <?php } ?>
                            <span class="sidebar-header-title"><?php echo $link['name']; ?></span>
                        </li>
                        <?php } else { // If it is a link ?>
                        <li<?php echo $li_active; ?>>
                        <a href="<?php echo $url; ?>"<?php echo $link_class; ?>><?php if (isset($link['sub']) && $link['sub']) { // if the link has a submenu ?><i class="fa fa-angle-left sidebar-nav-indicator"></i><?php } echo $icon . $link['name']; ?></a>
                        <?php if (isset($link['sub']) && $link['sub']) { // if the link has a submenu ?>
                        <ul>
                            <?php foreach ($link['sub'] as $sub_link) {
                                $link_class = '';
                                $li_active = '';
                                $submenu_link = '';

                                // Get 2nd level link's vital info
                                $url        = (isset($sub_link['url']) && $sub_link['url']) ? $sub_link['url'] : '#';
                                $active     = (isset($sub_link['url']) && ($template['active_page'] == $sub_link['url'])) ? ' active' : '';

                                // Check if the link has a submenu
                                if (isset($sub_link['sub']) && $sub_link['sub']) {
                                    // Since it has a submenu, we need to check if we have to add the class active
                                    // to its parent li element (only if a 3rd level link is active)
                                    foreach ($sub_link['sub'] as $sub2_link) {
                                        if (in_array($template['active_page'], $sub2_link)) {
                                            $li_active = ' class="active"';
                                            break;
                                        }
                                    }

                                    $submenu_link = 'sidebar-nav-submenu';
                                }

                                if ($submenu_link || $active) {
                                    $link_class = ' class="'. $submenu_link . $active .'"';
                                }
                                ?>
                                <li<?php echo $li_active; ?>>
                                <a href="<?php echo $url; ?>"<?php echo $link_class; ?>><?php if (isset($sub_link['sub']) && $sub_link['sub']) { ?><i class="fa fa-angle-left sidebar-nav-indicator"></i><?php } echo $sub_link['name']; ?></a>
                                <?php if (isset($sub_link['sub']) && $sub_link['sub']) { ?>
                                <ul>
                                    <?php foreach ($sub_link['sub'] as $sub2_link) {
                                            // Get 3rd level link's vital info
                                        $url    = (isset($sub2_link['url']) && $sub2_link['url']) ? $sub2_link['url'] : '#';
                                        $active = (isset($sub2_link['url']) && ($template['active_page'] == $sub2_link['url'])) ? ' class="active"' : '';
                                        ?>
                                        <li>
                                            <a href="<?php echo $url; ?>"<?php echo $active ?>><?php echo $sub2_link['name']; ?></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                    <?php } ?>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </li>
                        <?php } ?>
                        <?php } ?>
                    </ul>
                    <!-- END Sidebar Navigation -->
                    <?php } ?>
                </div>
                <!-- END Sidebar Content -->
            </div>
            <!-- END Wrapper for scrolling functionality -->
        </div>
        <!-- END Main Sidebar -->

        <!-- Main Container -->
        <div id="main-container">
            <!-- Header -->
            <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available header.navbar classes:

            'navbar-default'            for the default light header
            'navbar-inverse'            for an alternative dark header

            'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

            'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
            -->
            <header class="navbar<?php if ($template['header_navbar']) { echo ' ' . $template['header_navbar']; } ?><?php if ($template['header']) { echo ' '. $template['header']; } ?>">
                <?php if ( $template['header_content'] == 'horizontal-menu' ) { // Horizontal Menu Header Content ?>
                <!-- Navbar Header -->
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                <!-- END Navbar Header -->

                <!-- Alternative Sidebar Toggle Button, Visible only in large screens (> 767px) -->
                <ul class="nav navbar-nav-custom pull-right hidden-xs">

                </ul>
                <!-- END Alternative Sidebar Toggle Button -->

                <!-- Horizontal Menu + Search -->
                <div id="horizontal-menu-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Profile</a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Settings <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="fa fa-asterisk fa-fw pull-right"></i> General</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-lock fa-fw pull-right"></i> Security</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-user fa-fw pull-right"></i> Account</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-magnet fa-fw pull-right"></i> Subscription</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0)" tabindex="-1"><i class="fa fa-chevron-right fa-fw pull-right"></i> More Settings</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)" tabindex="-1">Second level</a></li>
                                        <li><a href="javascript:void(0)">Second level</a></li>
                                        <li><a href="javascript:void(0)">Second level</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0)" tabindex="-1"><i class="fa fa-chevron-right fa-fw pull-right"></i> More Settings</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0)">Third level</a></li>
                                                <li><a href="javascript:void(0)">Third level</a></li>
                                                <li><a href="javascript:void(0)">Third level</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Contact <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="fa fa-envelope-o fa-fw pull-right"></i> By Email</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-phone fa-fw pull-right"></i> By Phone</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form action="page_ready_search_results.php" class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search..">
                        </div>
                    </form>
                </div>
                <!-- END Horizontal Menu + Search -->
                <?php } else { // Default Header Content  ?>
                <!-- Left Header Navigation -->

                <!-- Right Header Navigation -->
                <ul class="nav navbar-nav-custom pull-right">
                    <!-- Alternative Sidebar Toggle Button -->

                    <!-- END Alternative Sidebar Toggle Button -->

                    <!-- User Dropdown -->
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/placeholders/avatars/images.png" alt="avatar"> <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                            <li class="dropdown-header text-center">Account</li>
                            <li>
                                <a href="proses/logout.php"><i class="fa fa-power-off fa-fw pull-right"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                    <!-- END User Dropdown -->
                </ul>
                <!-- END Right Header Navigation -->
                <?php } ?>
            </header>
            <!-- END Header -->
