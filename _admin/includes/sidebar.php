<section class="admin-panel d-flex">
        <div class="sidebar">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark h-100" style="width: 280px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">Админка</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto h-100">
                    <li class="nav-item">
                        <a href="?item=product" class="nav-link<?php if($_GET["item"]=="product"){echo " active"; } else{echo " text-white" ;} ?>" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <path fill="white"
                                    d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z">
                                </path>
                            </svg>
                            Продуктион
                        </a>
                    </li>
                    <li>
                        <a href="?item=faq" class="nav-link<?php if($_GET["item"]=="faq"){echo " active" ; } else{echo " text-white" ;} ?>">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <path fill="white"
                                    d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z">
                                </path>
                                <path fill="white" fill-rule="evenodd"
                                    d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z">
                                </path>
                            </svg>
                            FAQ
                        </a>
                    </li>

                    <li>  
                    <a href="?item=order" class="nav-link<?php if($_GET["item"]=="order"){echo " active"; } else{echo " text-white";} ?>">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <path fill="white"
                                    d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z">
                                </path>
                            </svg>
                            Заказы
                        </a>
                    </li>
                    <li>  
                    <a href="?item=main" class="nav-link<?php if($_GET["item"]=="main"){echo " active"; } else{echo " text-white";} ?>">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <path fill="white"
                                    d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z">
                                </path>
                            </svg>
                            Информация на сайте
                        </a>
                    </li>
                    <li class="mt-auto p-2">
            
                        <a href="exit.php" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <path fill="white"
                                    d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z">
                                </path>
                            </svg>
                            Выход
                        </a>
                    </li>
            </div>
            
        </div>
        <!-- <div class="admin-content">

        </div> -->
</section>

