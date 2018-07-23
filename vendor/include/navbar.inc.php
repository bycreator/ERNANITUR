<aside class="main-sidebar fixed offcanvas shadow">
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="<?= SYS[0] ?>public/dashboard/assets/img/basic/logo.png" alt="">
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm fab-right fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="<?= SYS[0] ?>public/dashboard/assets/img/dummy/u2.png" alt="User Image">
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1">Alexander Pierce</h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="index.html" class="list-group-item list-group-item-action ">
                            <i class="mr-2 icon-umbrella text-blue"></i>Profile
                        </a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-cogs text-yellow"></i>Settings</a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-security text-purple"></i>Change Password</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header"><strong>PRINCIPAL</strong></li>
            <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Empresa</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    <li><a href="index.html"><i class="icon icon-folder5"></i>Panel Dashboard 1</a>
                    </li>
                    <li><a href="panel-page-dashboard2.html"><i class="icon icon-folder5"></i>Panel Dashboard 2</a>
                    </li>
                    <li><a href="panel-page-dashboard3.html"><i class="icon icon-folder5"></i>Panel Dashboard 3</a>
                    </li>
                    <li><a href="panel-page-dashboard4.html"><i class="icon icon-folder5"></i>Panel Dashboard 4</a>
                    </li>
                    <li><a href="panel-page-dashboard5.html"><i class="icon icon-folder5"></i>Panel Dashboard 5</a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon icon-package blue-text s-18"></i>
                <span>Products</span>
                <span class="badge r-3 badge-primary pull-right">4</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="panel-page-products.html"><i class="icon icon-circle-o"></i>All Products</a>
                    </li>
                    <li><a href="panel-page-products-create.html"><i class="icon icon-add"></i>Add
                        New </a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>Contas<i
                    class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="panel-page-users.html"><i class="icon icon-circle-o"></i>Todas as contas</a>
                    </li>
                    <li><a href="<?=SYS[0]?>panel/create-user"><i class="icon icon-add"></i>Adicionar conta</a>
                    </li>
                    <li><a href="panel-page-profile.html"><i class="icon icon-user"></i>User Profile </a>
                    </li>
                </ul>
            </li>
            <li class="treeview no-b"><a href="#">
                <i class="icon icon-package light-green-text s-18"></i>
                <span>Auditoria</span>
                <span class="badge r-3 badge-success pull-right">20</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="panel-page-inbox.html"><i class="icon icon-circle-o"></i>Acessos</a>
                    </li>
                </ul>
            </li>
            <li class="header light mt-3"><strong>COMÉRCIO</strong></li>
            <li class="treeview ">
                <a href="#">
                    <i class="icon icon-package text-lime s-18"></i> <span>Apps</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="panel-page-chat.html"><i class="icon icon-circle-o"></i>Chat</a>
                    </li>
                    <li><a href="panel-page-calendar.html"><i class="icon icon-date_range"></i>Calender</a>
                    </li>
                    <li><a href="panel-page-calendar2.html"><i class="icon icon-date_range"></i>Calender 2</a>
                    </li>
                    <li><a href="panel-page-contacts.html"><i class="icon icon-circle-o"></i>Contacts</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
<!--Sidebar End-->