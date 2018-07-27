<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{asset('images/user.png')}}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
                <div class="email">{{ Auth::user()->email}}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="material-icons">persona</i>Perfil</a></li>                        
                        <li role="seperator" class="divider"></li>
                        <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                          <i class="material-icons">input</i>Cerrar sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">Menú principal</li>
                <li class="active">
                    <a href="#">
                        <i class="material-icons">home</i>
                        <span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="material-icons">assignment_ind</i>
                        <span>Documentos asignados</span>
                    </a>                    
                </li>
                <li>
                    <a href="#">
                        <i class="material-icons">mail</i>
                        <span>Documentos enviados</span>
                    </a>                    
                </li>
                
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">group</i>
                        <span>Gestión de Personal</span>
                    </a>
                    <ul class="ml-menu">                        
                        <li>
                            <a href="#">
                                <span>Lista de personal</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">work</i>
                        <span>Gestión de Oficina</span>
                    </a>
                    <ul class="ml-menu">                        
                        <li>
                            <a href="#">
                                <span>Lista de oficinas</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">list_alt</i>
                        <!-- <i class="material-icons">receipt</i> -->
                        <span>Gestión de Documento</span>
                    </a>
                    <ul class="ml-menu">                        
                        <li>
                            <a href="#">
                                <span>Lista de documentos</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Lista de documentos asignados</span>
                            </a>
                        </li>
                         <li>
                            <a href="#">
                                <span>Enviar documentos</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">playlist_add_check</i>
                        <!-- <i class="material-icons">receipt</i> -->
                        <span>Gestión de ingreso de documento</span>
                    </a>
                    <ul class="ml-menu">                        
                        <li>
                            <a href="#">
                                <span>Lista de ingresos</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">bar_chart</i>
                        <span>Gesti�n de Reporte</span>
                    </a>
                    <ul class="ml-menu">                        
                        <li>
                            <a href="#">
                                <span>Resporte de documentos</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="header">LABELS</li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-red">donut_large</i>
                        <span>Important</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2018 <a href="javascript:void(0);">Ministerio Público</a>.
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    
    



    
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"  class="active"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">

            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>
