<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
    <!-- Logo 區域 -->
    <div class="sidenav-header">
        <a class="navbar-brand " href="../index.php">
            <div class="logo-box mt-3">
                <img src="../logo-img/logo5.png" class="logo-img mb-5" alt="logo">
                <hr class="horizontal light ">
            </div>
        </a>
    </div>

    <!-- <hr class="horizontal light"> -->

    <!-- 選單區域 -->
    <div class="collapse navbar-collapse w-auto ms-4" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../members/member-list.php">
                    <div class="icon-wrapper me-2">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <span class="nav-link-text">會員管理</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../exhibitions/exhibition-list.php">
                    <div class="icon-wrapper me-2">
                        <i class="fas fa-palette"></i>
                    </div>
                    <span class="nav-link-text">展覽管理</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../teachers/teacher-list.php">
                    <div class="icon-wrapper me-2">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <span class="nav-link-text">師資管理</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="../products/product-list.php">
                    <div class="icon-wrapper me-2">
                    <i class="bi bi-basket-fill"></i>
                    </div>
                    <span class="nav-link-text">商品管理</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../coupons/coupon-list.php">
                    <div class="icon-wrapper me-2">
                        <i class="fas fa-tags"></i>
                    </div>
                    <span class="nav-link-text">優惠券管理</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- 登出區域 -->
    <div class="sidenav-footer position-absolute w-100 bottom-0">
        <div class="mx-3">
            <a class="btn btn-primary mt-4 w-100" href="../logout.php" type="button">
                <i class="fas fa-sign-out-alt me-2"></i> 登出
            </a>
        </div>
    </div>
</aside>

<style>
/* 側邊欄基本樣式 */
.sidenav {
    background-color: #2D2D2D;
    z-index: 1024;
    transition: all 0.3s ease;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    width: 250px !important;
}

/* Logo 區域 */
.sidenav-header {
    padding: 0;
    border-bottom: none;
    margin-bottom: 150px;
}

.navbar-brand {
    width: 100%;
    margin: 0 !important;
    padding: 0 !important;
}

/* Logo 容器 */
.logo-box {
    width: 100%;
    height: 200px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    overflow: visible;
    position: relative;
}

/* Logo 圖片 */
.logo-img {
    max-width: 85%;
    height: auto;
    object-fit: contain;
    margin-bottom: 2rem;
    margin-top: 2rem;
}

/* 分隔線樣式 */
.horizontal.light {
    width: 80%;
    margin: 0;
    opacity: 0.2;
    border-color: #fff;
    position: absolute;
    bottom: 0;
}

/* 選單容器 */
.navbar-collapse {
    margin-top: 1.5rem;
    padding-top: 0.75rem;
}

/* 選單項目樣式 */
.nav-link {
    color: #D1D5DB !important;
    margin: 0.75rem 0.75rem;
    border-radius: 0.5rem;
    padding: 0.75rem 0.875rem;
    transition: all 0.2s ease;
}

.nav-link:hover:not(.active) {
    background-color: #EA580C !important;
    color: #FFFFFF !important;
}

.nav-link.active {
    background-color: #9A3412 !important;
    color: #FFFFFF !important;
}

/* 圖示包裝 */
.icon-wrapper {
    width: 32px;
    height: 32px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 0.5rem;
    background-color: rgba(255, 255, 255, 0.1);
    margin-right: 0.5rem !important;
}

.nav-link i {
    font-size: 1.1rem;
    color: #F5E3C3;
}

.nav-link:hover .icon-wrapper {
    background-color: rgba(255, 255, 255, 0.2);
}

.nav-link.active .icon-wrapper {
    background-color: #F5E3C3;
}

.nav-link.active i {
    color: #9A3412;
}

/* 登出按鈕 */
.sidenav-footer {
    padding: 1.5rem;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.sidenav-footer .btn-primary {
    background-color: #9A3412;
    border: none;
    transition: all 0.2s ease;
}

.sidenav-footer .btn-primary:hover {
    background-color: #EA580C;
}

/* 主內容區域調整 */
.main-content {
    margin-left: 250px !important;
}

/* 響應式調整 */
@media (max-width: 768px) {
    .sidenav {
        transform: translateX(-100%);
    }
    
    .g-sidenav-show .sidenav {
        transform: translateX(0);
    }
    .main-content {
        margin-left: 0 !important;
    }
    .logo-box {
        height: 120px;
    }
}
</style>
