<div class="navbar-expand-md font-size-info-alert">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                            </span>
                            <span class="nav-link-title">
                                Home
                            </span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                                <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                                </span>
                                <span class="nav-link-title">
                                    Manag Data
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                    <?php if ($query_nik->akses == "Admin Super" || $query_nik->akses == "Admin"): ?>
                                    
                                        <a class="dropdown-item" href="{{route('user', 'user')}}">
                                            User
                                        </a>
                                        <a class="dropdown-item" href="{{route('pengarang', 'pengarang')}}">
                                            Pengarang
                                        </a>
                                    <?php else: ?>
                                        
                                    <?php endif ?>
                                    
                                    

                                        <a class="dropdown-item" href="{{route('buku', 'buku')}}">
                                            Buku
                                        </a>
                                    <?php if ($query_nik->akses == "Users"): ?>
                                        <a class="dropdown-item" href="{{route('buku', 'buku')}}">
                                            Keranjang Peminjaman
                                        </a>
                                    <?php else: ?>
                                    <?php endif ?>
                                        
                                         
                                    </div>
                                </div>
                            </div>
                        </li>


                    
                </ul>
            
            </div>
        </div>
    </div>
</div>

   
      