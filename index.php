<?php
require_once('php/header.php');
?>

    <div class="container-fluid">
        <!--        SIDEBAR -->
        <div id="mySidebar" class="d-flex flex-column flex-shrink-0 py-3 text-white bg-dark sidebar">
            <div class="col-md-12 d-flex flex-row">
                <div class="col-md-9 d-flex justify-content-center align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none goToMainPage">
                    <h1>Mapouille</h1>
                </div>
                <div class="col-md-3 justify-content-center align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none closeSidebar">
                    <a href="javascript:void(0)"
                       class="col-md-12 d-flex justify-content-center align-content-center h-100 w-100"><i
                                class="bi bi-arrow-bar-left w-100 h-100 text-white"></i></a>
                </div>
            </div>

            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"/>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"/>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"/>
                        </svg>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"/>
                        </svg>
                        Products
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#people-circle"/>
                        </svg>
                        Customers
                    </a>
                </li>
            </ul>
        </div>

        <!--        WORLDMAP-->
        <div class="col-md-12 d-flex flex-row align-content-center justify-content-center h-100">
            <iframe height="100%" width="100%" class="border-0 p-4" allowfullscreen
                    src="//umap.openstreetmap.fr/fr/map/worldmap_823399?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=none&captionBar=false">
            </iframe>
        </div>
    </div>

<?php
require_once('php/footer.php');
?>