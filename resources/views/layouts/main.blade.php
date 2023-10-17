<x-head />

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <x-sidebar />
        <!--  Sidebar End -->

        <!--  Main wrapper -->
        <div class="body-wrapper">

            <!--  Header Start -->
            <x-header />
            <!--  Header End -->

            <div class="m-0  overflow-hi">
                <div class="row">
                    <div>
                        
                        @If(session()->has('success'))

                        <div class="container container--narrow">
                          <div class="alert alert-success text-center">
                              {{ session('success') }}  
                          </div>
                        </div>
                    
                        @endif 
                    
                        @If(session()->has('failure'))
                    
                        <div class="container container--narrow">
                          <div class="alert alert-danger text-center">
                              {{ session('failure') }}  
                          </div>
                        </div>
                    
                        @endif 

                    </div>
                    <div class="col-12">
                        @yield('content')
                    </div>
                </div>
            </div>

        </div>

    </div>

    <x-footer />
