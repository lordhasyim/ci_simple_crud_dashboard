<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="<?php echo base_url() ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Perusahaan<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                        </li>

                        <li>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Penjualan<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">
                                <i class="fa fa-table fa-fw"></i> Data Penjualan
                            </a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Master<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('VoterList') ?>">
                                <i class="fa fa-files-o fa-fw"></i> Master Provinsi
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('VoterWaiting') ?>">
                                <i class="fa fa-files-o fa-fw"></i> Master Kota
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('History') ?>">
                                <i class="fa fa-files-o fa-fw"></i> User
                            </a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</nav>
<!-- /.navbar-static-side -->
