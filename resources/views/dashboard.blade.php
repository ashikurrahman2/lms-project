@extends('layouts.user')
@section('title', 'Student Dashboard')
@section('user_content')
  <!-- Page Body Start -->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
          <div>
            {{-- Header logo --}}
            <div class="logo-wrapper"><a href="index.html"><img class="max-w-full h-auto for-light" src="{{ asset('/') }}user/assets/images/logo/logo.png" alt=""><img class="max-w-full h-auto for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
              <div class="back-btn hidden lg:block"><i class="fa-solid fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="max-w-full h-auto" src="{{ asset('/') }}user/assets/images/logo/logo-icon.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"> <a href="index.html"><img class="max-w-full h-auto" src="{{ asset('/') }}user/assets/images/logo/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="pin-title sidebar-main-title">
                    <div> 
                      <h6>Pinned</h6>
                    </div>
                  </li>
                 
                  <li class="sidebar-list">
                    {{-- <i class="fa-solid fa-thumbtack"></i> --}}
                    {{-- <label class="badge badge-light-primary">13</label> --}}
                    
                    <a class="sidebar-link sidebar-title" href="{{ route('dashboard') }}">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-home"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-home"></use>
                      </svg>
                      <span class="lan-3">Dashboard</span></a>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-widget"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-widget"></use>
                      </svg><span class="lan-6">Widgets</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="general-widget.html">General</a></li>
                      <li><a href="chart-widget.html">Chart</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-layout"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-layout"></use>
                      </svg><span class="lan-7">Page layout</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="box-layout.html">Boxed</a></li>
                      <li><a href="layout-rtl.html">RTL</a></li>
                      <li><a href="layout-dark.html">Dark Layout</a></li>
                      <li><a href="hide-on-scroll.html">Hide Nav Scroll</a></li>
                      <li><a href="footer-light.html">Footer Light</a></li>
                      <li><a href="footer-dark.html">Footer Dark</a></li>
                      <li><a href="footer-fixed.html">Footer Fixed</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-8">Applications</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-project"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-project"></use>
                      </svg><span>Projects        </span></a>
                    <ul class="sidebar-submenu">
                      <li>
                        <label class="badge badge-light-success">New</label><a href="project-details.html">Project Details</a>
                      </li>
                      <li><a href="project-list.html">Project List</a></li>
                      <li><a href="createnew.html">Create new</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="file-manager.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-file"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-file"></use>
                      </svg><span>File manager</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack">           </i><a class="sidebar-link sidebar-title link-nav" href="kanban.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-board"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-board"></use>
                      </svg><span>kanban Board</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-ecommerce"></use>
                      </svg><span>Ecommerce</span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="submenu-title" href="#">Products<span class="sub-arrow"><i class="fa-solid fa-angle-right"></i></span></a>
                        <ul class="sidebar-submenu">
                          <li><a href="add-products.html">Add Product</a></li>
                          <li><a href="product-grid.html">Products Grid</a></li>
                          <li><a href="products-list.html">Products List</a></li>
                          <li><a href="product-details.html">Product Details</a></li>
                        </ul>
                      </li>
                      <li><a href="category.html">Category</a></li>
                      <li>
                        <label class="badge badge-light-success">New</label><a class="submenu-title" href="#">Seller<span class="sub-arrow"><i class="fa-solid fa-angle-right"></i></span></a>
                        <ul class="sidebar-submenu">
                          <li><a href="seller-list.html">Seller List</a></li>
                          <li><a href="seller-details.html">Seller Details</a></li>
                        </ul>
                      </li>
                      <li><a class="submenu-title" href="#">Orders<span class="sub-arrow"><i class="fa-solid fa-angle-right"></i></span></a>
                        <ul class="sidebar-submenu">
                          <li><a href="order-history.html">Order History</a></li>
                          <li>
                            <label class="badge badge-light-success">New</label><a href="order-details.html">Order Details</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="submenu-title" href="#">Invoices<span class="sub-arrow"><i class="fa-solid fa-angle-right"></i></span></a>
                        <ul class="sidebar-submenu">
                          <li><a href="invoice-1.html">Invoice-1</a></li>
                          <li><a href="invoice-2.html">Invoice-2</a></li>
                          <li><a href="invoice-3.html">Invoice-3</a></li>
                          <li><a href="invoice-4.html">Invoice-4</a></li>
                          <li><a href="invoice-5.html">Invoice-5</a></li>
                          <li><a href="invoice-template.html">Invoice-6</a></li>
                        </ul>
                      </li>
                      <li><a href="cart.html">Cart</a></li>
                      <li><a href="wishlist.html">Wishlist</a></li>
                      <li><a href="checkout.html">Checkout</a></li>
                      <li>
                        <label class="badge badge-light-success">New</label><a href="manage-review.html">Manage Review</a>
                      </li>
                      <li>
                        <label class="badge badge-light-success">New</label><a href="settings.html">Settings</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="mail-box.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-email"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-email"></use>
                      </svg><span>Mail Box</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-chat"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-chat"></use>
                      </svg><span>Chat</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="private-chat.html">Private Chat</a></li>
                      <li><a href="group-chat.html">Group Chat</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-user"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-user"></use>
                      </svg><span>Users</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="user-profile.html">User Profile</a></li>
                      <li><a href="add-user.html">Add User</a></li>
                      <li>
                        <label class="badge badge-light-success">New</label><a href="user-list.html">User List</a>
                      </li>
                      <li><a href="user-cards.html">User Cards</a></li>
                      <li>
                        <label class="badge badge-light-success">New</label><a href="roles-permission.html">Roles & Permission</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <label class="badge badge-light-success">New</label><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-reports"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-reports"></use>
                      </svg><span>Reports</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="product-report.html">Products</a></li>
                      <li><a href="sales-report.html">Sales</a></li>
                      <li><a href="sales-return.html">Sales Return</a></li>
                      <li><a href="customer-order.html">Customer Order</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="bookmark.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-bookmark"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-bookmark"> </use>
                      </svg><span>Bookmarks</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="contacts.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-contact"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-contact"> </use>
                      </svg><span>Contacts</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="task.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-task"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-task"> </use>
                      </svg><span>Tasks</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="calendar.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-calendar"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-calender"></use>
                      </svg><span>Calendar</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="social-app.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-social"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-social"> </use>
                      </svg><span>Social App</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="to-do.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-to-do"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-to-do"> </use>
                      </svg><span>To-Do</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="search-result.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-search"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-search"> </use>
                      </svg><span>Search Result</span></a></li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Forms & Table</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-form"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-form"> </use>
                      </svg><span>Forms</span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="submenu-title" href="#">Form Controls<span class="sub-arrow"><i class="fa-solid fa-angle-right"></i></span></a>
                        <ul class="sidebar-submenu">
                          <li><a href="form-validation.html">Form Validation</a></li>
                          <li><a href="base-input.html">Base Inputs</a></li>
                          <li><a href="radio-checkbox-control.html">Checkbox & Radio</a></li>
                          <li><a href="input-group.html">Input Groups</a></li>
                          <li> <a href="input-mask.html">Input Mask</a></li>
                          <li><a href="megaoptions.html">Mega Options</a></li>
                        </ul>
                      </li>
                      <li><a class="submenu-title" href="#">Form Widgets<span class="sub-arrow"><i class="fa-solid fa-angle-right"></i></span></a>
                        <ul class="sidebar-submenu">
                          <li><a href="datepicker.html">Datepicker</a></li>
                          <li><a href="touchspin.html">Touchspin</a></li>
                          <li><a href="select2.html">Select2</a></li>
                          <li><a href="switch.html">Switch</a></li>
                          <li><a href="typeahead.html">Typeahead</a></li>
                          <li><a href="clipboard.html">Clipboard</a></li>
                        </ul>
                      </li>
                      <li><a class="submenu-title" href="#">Form layout<span class="sub-arrow"><i class="fa-solid fa-angle-right"></i></span></a>
                        <ul class="sidebar-submenu">
                          <li><a href="form-wizard.html">Form Wizard 1</a></li>
                          <li><a href="form-wizard-two.html">Form Wizard 2</a></li>
                          <li><a href="two-factor.html">Two Factor</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-table"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-table"></use>
                      </svg><span>Tables</span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="submenu-title" href="#">Tailwind Tables<span class="sub-arrow"><i class="fa-solid fa-angle-right"></i></span></a>
                        <ul class="sidebar-submenu">
                          <li><a href="tailwind-basic-table.html">Basic Tables</a></li>
                          <li><a href="table-components.html">Table components</a></li>
                        </ul>
                      </li>
                      <li><a class="submenu-title" href="#">Data Tables<span class="sub-arrow"><i class="fa-solid fa-angle-right"></i></span></a>
                        <ul class="sidebar-submenu">
                          <li><a href="datatable-basic-init.html">Basic Init</a></li>
                          <li> <a href="datatable-advance.html">Advance Init </a></li>
                          <li><a href="datatable-API.html">API</a></li>
                          <li><a href="datatable-data-source.html">Data Sources</a></li>
                          <li><a href="datatable-ext-autofill.html">Extensions</a></li>
                        </ul>
                      </li>
                      <li><a href="jsgrid-table.html">Js Grid Table        </a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Components</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-ui-kits"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-ui-kits"></use>
                      </svg><span>Ui Kits</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="avatars.html">Avatars</a></li>
                      <li>
                        <label class="badge badge-light-success">New</label><a href="divider.html">Divider</a>
                      </li>
                      <li><a href="helper-classes.html">helper classes</a></li>
                      <li><a href="grid.html">Grid</a></li>
                      <li><a href="tag-pills.html">Tags & pills</a></li>
                      <li><a href="progress-bar.html">Progress</a></li>
                      <li><a href="modal.html">Modal</a></li>
                      <li><a href="alert.html">Alert</a></li>
                      <li><a href="popover.html">Popover</a></li>
                      <li>
                        <label class="badge badge-light-success">New</label><a href="placeholders.html">Placeholders</a>
                      </li>
                      <li><a href="tooltip.html">Tooltip</a></li>
                      <li><a href="dropdown.html">Dropdown</a></li>
                      <li><a href="according.html">Accordion</a></li>
                      <li><a href="tab-tailwind.html">Tabs</a></li>
                      <li>
                        <label class="badge badge-light-success">New</label><a href="offcanvas.html">Offcanvas</a>
                      </li>
                      <li>
                        <label class="badge badge-light-success">New</label><a href="navigate-links.html">Navigate Links</a>
                      </li>
                      <li><a href="list.html">Lists</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-bonus-kit"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-bonus-kit"></use>
                      </svg><span>Bonus Ui</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="scrollable.html">Scrollable</a></li>
                      <li>
                        <label class="badge badge-light-success">New</label><a href="tree.html">Tree view</a>
                      </li>
                      <li><a href="toasts.html">Toasts</a></li>
                      <li>
                        <label class="badge badge-light-success">New</label><a href="block-ui.html">BlockUI</a>
                      </li>
                      <li><a href="rating.html">Rating</a></li>
                      <li><a href="dropzone.html">dropzone</a></li>
                      <li><a href="tour.html">Tour</a></li>
                      <li><a href="sweet-alert2.html">Sweet Alert2</a></li>
                      <li><a href="modal-animated.html">Animated Modal</a></li>
                      <li><a href="swiper-slider.html">swiper slider</a></li>
                      <li><a href="ribbons.html">Ribbons</a></li>
                      <li><a href="pagination.html">Pagination</a></li>
                      <li><a href="breadcrumb.html">Breadcrumb</a></li>
                      <li><a href="range-slider.html">Range Slider</a></li>
                      <li>
                        <label class="badge badge-light-success">New</label><a href="ratios.html">Ratios</a>
                      </li>
                      <li><a href="image-cropper.html">Image cropper</a></li>
                      <li><a href="basic-card.html">Basic Card</a></li>
                      <li><a href="creative-card.html">Creative Card</a></li>
                      <li><a href="draggable-card.html">Draggable Card</a></li>
                      <li><a href="timeline-v-1.html">Timeline </a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-animation"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-animation"></use>
                      </svg><span>Animations</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="animate.html">Animate</a></li>
                      <li><a href="scroll-reval.html">Scroll Reveal</a></li>
                      <li><a href="AOS.html">AOS animation</a></li>
                      <li><a href="tilt.html">Tilt Animation</a></li>
                      <li><a href="wow.html">Wow Animation</a></li>
                      <li>
                        <label class="badge badge-light-success">New</label><a href="flash-icon.html">Flash Icons</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-icons"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-icons"></use>
                      </svg><span>Icons</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="flag-icon.html">Flag icon</a></li>
                      <li><a href="font-awesome.html">Fontawesome Icon</a></li>
                      <li><a href="ico-icon.html">Ico Icon</a></li>
                      <li><a href="themify-icon.html">Themify Icon</a></li>
                      <li><a href="feather-icon.html">Feather icon</a></li>
                      <li><a href="weather-icon.html">Weather Icon</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="buttons.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-button"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-button"></use>
                      </svg><span>Button</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-charts"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-charts"></use>
                      </svg><span>Charts</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="chart-apex.html">Apex Chart</a></li>
                      <li><a href="chart-google.html">Google Chart</a></li>
                      <li><a href="chart-sparkline.html">Sparkline chart</a></li>
                      <li><a href="chart-knob.html">Knob Chart</a></li>
                      <li><a href="chartjs.html">Chatjs Chart</a></li>
                      <li><a href="chartist.html">Chartist Chart</a></li>
                      <li><a href="chart-peity.html">Peity Chart</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Pages</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="landing-page.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-landing-page"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-landing-page"></use>
                      </svg><span>Landing page</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="sample-page.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-sample-page"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-sample-page"></use>
                      </svg><span>Sample page</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="internationalization.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-internationalization"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-internationalization"></use>
                      </svg><span>Internationalization</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="https://admin.pixelstrap.net/cuba_tailwind/starter-kit/index.html" target="_blank">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-starter-kit"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-starter-kit"></use>
                      </svg><span>Starter kit</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-error"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-error"></use>
                      </svg><span>Error Pages</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="error-403.html">Error 403</a></li>
                      <li><a href="error-404.html">Error 404</a></li>
                      <li><a href="error-500.html">Error 500</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-authenticate"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-authenticate"></use>
                      </svg><span>Authentication</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="login.html" target="_blank">Login Simple</a></li>
                      <li><a href="login_one.html" target="_blank">Login with bg image</a></li>
                      <li><a href="login_two.html" target="_blank">Login with image two                      </a></li>
                      <li><a href="login_three.html" target="_blank">Login With Image Three</a></li>
                      <li><a href="login_with_tooltip.html" target="_blank">Login with tooltip</a></li>
                      <li><a href="login_with_sweetalert.html" target="_blank">Login with sweetalert</a></li>
                      <li><a href="register_simple.html" target="_blank">Register Simple</a></li>
                      <li><a href="register_with_bg_image.html" target="_blank">Register with Bg Image                              </a></li>
                      <li><a href="register_with_image_two.html" target="_blank">Register with image two</a></li>
                      <li><a href="register_wizard.html" target="_blank">Register wizard</a></li>
                      <li><a href="account-restricted.html" target="_blank">Account Restricted</a></li>
                      <li><a href="unlock.html">Unlock User</a></li>
                      <li><a href="forgot-password.html">Forgot Password</a></li>
                      <li><a href="reset-password.html">Reset Password</a></li>
                      <li><a href="maintenance.html">Maintenance</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-coming-soon"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-coming-soon"></use>
                      </svg><span>Coming Soon</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="comingsoon.html">Coming Simple</a></li>
                      <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                      <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-email-temp"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-email-temp"></use>
                      </svg><span>Email templates</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="basic-template.html">Basic Email</a></li>
                      <li><a href="email-header.html">Basic With Header</a></li>
                      <li><a href="template-email.html">Ecomerce Template</a></li>
                      <li><a href="template-email-2.html">Email Template 2</a></li>
                      <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                      <li><a href="email-order-success.html">Order Success</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <label class="badge badge-light-success">New</label><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="manage-api.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-api"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-api"></use>
                      </svg><span>Manage API</span></a>
                  </li>
                  <li class="sidebar-list">
                    <label class="badge badge-light-success">New</label><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="sitemap.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-sitemap"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-sitemap"></use>
                      </svg><span>Site Map</span></a>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="pricing.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-price"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-price"></use>
                      </svg><span>Pricing  </span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="faq.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-faq"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-faq"></use>
                      </svg><span>FAQ</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="subscribed-user.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-subscribe"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-subscribe"></use>
                      </svg><span>Subscribed User</span></a></li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Miscellaneous</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-gallery"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-gallery"></use>
                      </svg><span>Gallery</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="gallery.html">Gallery Grid</a></li>
                      <li><a href="gallery-with-description.html">Gallery Grid Desc</a></li>
                      <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                      <li><a href="masonry-gallery-with-disc.html">Masonry with Desc</a></li>
                      <li><a href="hover-effects.html">Hover Effects</a></li>
                      <li>
                        <label class="badge badge-light-success">New</label><a href="gallery-with-placeholder.html">Gallery Placeholder</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-blog"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-blog"></use>
                      </svg><span>Blog</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="blog.html">Blog</a></li>
                      <li><a href="blog-details.html">Blog Details</a></li>
                      <li><a href="add-blog.html">Add Blog</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-job-search"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-job-search"></use>
                      </svg><span>Jobs</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="job-cards-view.html">Cards view</a></li>
                      <li><a href="job-list-view.html">List View</a></li>
                      <li><a href="job-details.html">Job Details</a></li>
                      <li><a href="candidates.html">Candidates</a></li>
                      <li><a href="companies.html">Companies</a></li>
                      <li><a href="job-apply.html">Apply</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-learning"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-learning"></use>
                      </svg><span>Courses</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="course-list-view.html">Course List</a></li>
                      <li><a href="course-details.html">Course Details</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-maps"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-maps"></use>
                      </svg><span>Maps</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="map-js.html">Maps JS</a></li>
                      <li><a href="vector-map.html">Vector Maps</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-editors"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-editors"></use>
                      </svg><span>Editors</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="quilleditor.html">Quill Editor</a></li>
                      <li><a href="ckeditor.html">CK Editor</a></li>
                      <li><a href="ace-code-editor.html">ACE Code Editor </a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="knowledgebase.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-knowledgebase"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-knowledgebase"></use>
                      </svg><span>Knowledgebase</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="support-ticket.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-support-tickets"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#fill-support-tickets"></use>
                      </svg><span>Support Ticket</span></a></li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container w-full">
            <div class="page-title">
              <div class="grid grid-cols-12 mx-2 items-center">
                <div class="col-span-6 sm:col-span-12">
               <h3 class="text-3xl font-bold">Welcome Back,👋 We're Glad You're Here</h3>
                </div>
                <div class="col-span-6 sm:col-span-12">
                  <ol class="breadcrumb flex">
                    <li class="breadcrumb-item"><a href="index.html">                                       
                        <svg class="stroke-icon">
                          <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Online course</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container dashboard-3">
            <div class="grid grid-cols-12 card-gap">
              <div class="col-span-5 xxl:col-span-8 xl:col-span-12 col-ed-6 box-col-7">
                <div class="grid grid-cols-12 card-gap">
                  <div class="col-span-12">
                    <div class="card overflow-hidden welcome-card">            
                      <div class="card-body">
                        <h4 class="mb-3 mt-1 font-medium f-22">Hello {{ auth()->user()->name }}<span> <img src="https://admin.pixelstrap.net/cuba_tailwind/assets/images/dashboard-3/hand.svg" alt="hand vector"></span></h4>
                        <p>Learn something new every day with world's best courses.Free online courses available.</p>
                      </div><img class="welcome-img" src="https://admin.pixelstrap.net/cuba_tailwind/assets/images/dashboard-3/widget.svg" alt="search image">
                    </div>
                  </div>
                  <div class="col-span-6 sm:col-span-12">
                    <div class="card course-box"> 
                      <div class="card-body"> 
                        <div class="course-widget"> 
                          <div class="course-icon"> 
                            <svg class="fill-icon">
                              <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#course-1"></use>
                            </svg>
                          </div>
                          <div> 
                            <h4 class="mb-0"> <span class="counter" data-target="100">0</span>+</h4><span class="f-light">Completed Courses</span><a class="btn btn-light f-light" href="course-list-view.html">View Course<span class="ms-2"> 
                                <svg class="fill-icon f-light">
                                  <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#arrowright"></use>
                                </svg></span></a>
                          </div>
                        </div>
                      </div>
                      <ul class="square-group">
                        <li class="square-1 warning"></li>
                        <li class="square-1 primary"></li>
                        <li class="square-2 warning1"></li>
                        <li class="square-3 danger"></li>
                        <li class="square-4 light"></li>
                        <li class="square-5 warning"></li>
                        <li class="square-6 success"></li>
                        <li class="square-7 success"></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-span-6 sm:col-span-12">
                    <div class="card course-box"> 
                      <div class="card-body"> 
                        <div class="course-widget"> 
                          <div class="course-icon warning"> 
                            <svg class="fill-icon">
                              <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#course-2"></use>
                            </svg>
                          </div>
                          <div> 
                            <h4 class="mb-0"> <span class="counter" data-target="80">0</span>+</h4><span class="f-light">In Progress Courses</span><a class="btn btn-light f-light" href="course-list-view.html">View Course<span class="ms-2"> 
                                <svg class="fill-icon f-light">
                                  <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#arrowright"></use>
                                </svg></span></a>
                          </div>
                        </div>
                      </div>
                      <ul class="square-group">
                        <li class="square-1 warning"></li>
                        <li class="square-1 primary"></li>
                        <li class="square-2 warning1"></li>
                        <li class="square-3 danger"></li>
                        <li class="square-4 light"></li>
                        <li class="square-5 warning"></li>
                        <li class="square-6 success"></li>
                        <li class="square-7 success"></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-span-2 xxl:col-span-4 xl:col-span-6 sm:col-span-12 col-ed-3 box-col-5">
                <div class="card get-card">
                  <div class="card-header card-no-border">
                    <h5>Today Progress</h5><span class="font-medium f-light !text-[14px]">Your Daily Goal Almost Done!</span>
                  </div>
                  <div class="card-body pt-0">
                    <div class="progress-chart-wrap">
                      <div id="progresschart">  </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-span-2 xl:col-span-12 col-ed-3 box-col-none results-box">
                <div class="card get-card overflow-hidden"> 
                  <div class="card-header card-no-border">
                    <h5>Do You Want to Get</h5><span class="font-medium f-light !text-[14px]">Better Results?</span><a class="btn btn-primary btn-hover-effect text-white !inline-block" href="course-details.html">More Details<span class="ms-1"> 
                        <svg class="fill-icon">
                          <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#arrowright"> </use>
                        </svg></span></a>
                  </div>
                  <div class="card-body pt-0">
                    <div class="get-image text-center"> <img class="max-w-full [@media(max-width:1747px)]:!h-[134px]" src="../assets/images/dashboard-3/better.png" alt="laptop with men vector"></div>
                  </div>
                </div>
              </div>
              <div class="col-span-3 xxl:col-span-5 xl:col-span-6 sm:col-span-12 col-ed-5 box-col-5">
                <div class="card default-inline-calender"> 
                  <div class="card-body">
                    <div class="input-group flex main-inline-calender">
                      <input class="form-control" id="inline-calender1" type="date">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-span-5 xxl:col-span-7 xl:col-span-12 col-ed-7 box-col-7">
                <div class="card"> 
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h5 class="m-0">Learning Overview<span class="f-14 font-medium ms-1 f-light">(75% activity growth)</span></h5>
                      <div class="card-header-right-icon">
                        <div class="dropdown icon-dropdown">
                          <button class="btn dropdown-toggle" id="learningButton" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="learningButton"><a class="dropdown-item" href="#">This Month</a><a class="dropdown-item" href="#">Previous Month</a><a class="dropdown-item" href="#">Last 3 Months</a><a class="dropdown-item" href="#">Last 6 Months</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0"> 
                    <div class="learning-wrap"> 
                      <div id="learning-chart"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-span-4 xxl:col-span-7 xl:col-span-6 md:col-span-12 col-ed-7 box-col-7"> 
                <div class="card">
                  <div class="card-header card-no-border">
                    <div class="header-top"> 
                      <h5>Activity Hours</h5>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="activitydropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="activitydropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Yesterday</a><a class="dropdown-item" href="#">This week</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body !pt-0">
                    <div class="grid grid-cols-12 gap-3 m-0 overall-card">
                      <div class="col-span-8 xl:col-span-12">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                        <div class="chart-right">
                          <div class="grid grid-cols-12">
                            <div class="col-span-12">
                              <div class="card-body !p-0">
                                <div class="activity-wrap">
                                  <div id="activity-chart"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-span-4 xl:col-span-12 !p-0">
                        <div class="grid grid-cols-12 !mt-0 gap-y-3 lg:gap-3">
                          <div class="col-span-12 xl:col-span-6 md:col-span-4 sm:col-span-12">
                            <div class="light-card balance-card">
                              <div> <span class="f-light">Time Spent</span>
                                <h6 class="mt-1 mb-0">30</h6>
                              </div>
                            </div>
                          </div>
                          <div class="col-span-12 xl:col-span-6 md:col-span-4 sm:col-span-12">
                            <div class="light-card balance-card activity-details">
                              <div> <span class="f-light">Course Subscribe</span>
                                <h6 class="mt-1 mb-0">45</h6>
                              </div>
                            </div>
                          </div>
                          <div class="col-span-12 xl:col-span-6 md:col-span-4 sm:col-span-12">
                            <div class="light-card balance-card">
                              <div> <span class="f-light">Exams Passed</span>
                                <h6 class="mt-1 mb-0">12</h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-span-3 xxl:col-span-5 xl:col-span-6 md:col-span-12 col-ed-5 box-col-5">
                <div class="card">
                  <div class="card-header card-no-border">
                    <div class="header-top"> 
                      <h5>Upcoming Courses</h5>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="upcomingdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="upcomingdropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Yesterday</a><a class="dropdown-item" href="#">This week </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="upcoming-event-wrap">
                      <div id="upcomingchart"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-span-6 md:col-span-12">
                <div class="card">
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h5>Top Mentors</h5>
                      <div class="card-header-right-icon">
                        <div class="dropdown icon-dropdown">
                          <button class="btn dropdown-toggle" id="topMentor" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topMentor"><a class="dropdown-item" href="#!">This Month</a><a class="dropdown-item" href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last 3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-0 t-top-mentor">
                    <div class="overflow-x-auto custom-scrollbar">
                      <table class="table" id="t-top-mentor"> 
                        <thead> 
                          <tr>
                            <th> </th>
                            <th>Mentor Name</th>
                            <th>Expertise</th>
                            <th>Courses</th>
                            <th>Experience</th>
                          </tr>
                        </thead>
                        <tbody> 
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto rounded-full" src="../assets/images/dashboard/user/6.jpg" alt="user"><a class="font-medium" href="course-list-view.html">Kathrin Ney</a></div>
                            </td>
                            <td>Data Science</td>
                            <td>550</td>
                            <td>10 Year</td>
                          </tr>
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto rounded-full" src="../assets/images/dashboard/user/3.jpg" alt="user"><a class="font-medium" href="course-list-view.html">Mili Pais</a></div>
                            </td>
                            <td>UI/UX Designer</td>
                            <td>210</td>
                            <td>06 Year</td>
                          </tr>
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto rounded-full" src="../assets/images/dashboard/user/4.jpg" alt="user"><a class="font-medium" href="course-list-view.html">Robert Fox</a></div>
                            </td>
                            <td>English Literature</td>
                            <td>920</td>
                            <td>15 Year</td>
                          </tr>
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto rounded-full" src="../assets/images/dashboard/user/2.jpg" alt="user"><a class="font-medium" href="course-list-view.html">Caleb Riv</a></div>
                            </td>
                            <td>Web Designer</td>
                            <td>110</td>
                            <td>12 Year</td>
                          </tr>
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto rounded-full" src="../assets/images/dashboard/user/1.jpg" alt="user"><a class="font-medium" href="course-list-view.html">Caryl Kauth</a></div>
                            </td>
                            <td>JS Developer</td>
                            <td>120</td>
                            <td>10 Year</td>
                          </tr>
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto rounded-full" src="../assets/images/dashboard/user/5.jpg" alt="user"><a class="font-medium" href="course-list-view.html">Eriko Fonsa</a></div>
                            </td>
                            <td>Painter</td>
                            <td>360</td>
                            <td>06 Year</td>
                          </tr>
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto rounded-full" src="../assets/images/dashboard/user/13.jpg" alt="user"><a class="font-medium" href="course-list-view.html">Olivia Gor</a></div>
                            </td>
                            <td>Mathematics</td>
                            <td>221</td>
                            <td>08 Year</td>
                          </tr>
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto rounded-full" src="../assets/images/dashboard/user/10.jpg" alt="user"><a class="font-medium" href="course-list-view.html">Emily Park</a></div>
                            </td>
                            <td>Painter</td>
                            <td>859</td>
                            <td>03 Year</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-span-6 md:col-span-12">
                <div class="card">
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h5>Completed Course</h5>
                      <div class="card-header-right-icon">
                        <div class="dropdown icon-dropdown">
                          <button class="btn dropdown-toggle" id="courses" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="courses"><a class="dropdown-item" href="#!">This Month</a><a class="dropdown-item" href="#!">Previous Month</a><a class="dropdown-item" href="#!">Last 3 Months</a><a class="dropdown-item" href="#!">Last 6 Months</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-0 completed-course-table">
                    <div class="overflow-x-auto custom-scrollbar">
                      <table class="table" id="completed-course-table"> 
                        <thead> 
                          <tr>
                            <th> </th>
                            <th>Student Name</th>
                            <th>Course Name</th>
                            <th>Completion Date</th>
                            <th>Mentor Name</th>
                          </tr>
                        </thead>
                        <tbody> 
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto" src="../assets/images/dashboard/user/7.jpg" alt="user"><a class="font-medium" href="course-details.html">Cody Fisher</a></div>
                            </td>
                            <td>Python</td>
                            <td>Oct 25, 2025</td>
                            <td>Wade Warren</td>
                          </tr>
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto" src="../assets/images/dashboard/user/12.jpg" alt="user"><a class="font-medium" href="course-details.html">Alexis Taylor</a></div>
                            </td>
                            <td>Analysis</td>
                            <td>May 20, 2025</td>
                            <td>Dylan Sullivan</td>
                          </tr>
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto" src="../assets/images/user/10.jpg" alt="user"><a class="font-medium" href="course-details.html">Jenny Wilson</a></div>
                            </td>
                            <td>Development</td>
                            <td>Apr 28, 2025</td>
                            <td>Guy Hawkins</td>
                          </tr>
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto" src="../assets/images/dashboard/user/2.jpg" alt="user"><a class="font-medium" href="course-details.html">Lily Ramirez</a></div>
                            </td>
                            <td>Marketing</td>
                            <td>Mar 13, 2025</td>
                            <td>Ethan Brooks</td>
                          </tr>
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto" src="../assets/images/dashboard/user/11.jpg" alt="user"><a class="font-medium" href="course-details.html">Andrew Price</a></div>
                            </td>
                            <td>Developer</td>
                            <td>Feb 12, 2025</td>
                            <td>Nathan Cooper</td>
                          </tr>
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto" src="../assets/images/user/6.jpg" alt="user"><a class="font-medium" href="course-details.html">Luke Mitchell</a></div>
                            </td>
                            <td>Mathematics</td>
                            <td>Apr 12, 2025</td>
                            <td>Owen Davis</td>
                          </tr>
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto" src="../assets/images/user/3.png" alt="user"><a class="font-medium" href="course-details.html">Caleb Rivera</a></div>
                            </td>
                            <td>Architect</td>
                            <td>May 09, 2025</td>
                            <td>Zoey Jenkins</td>
                          </tr>
                          <tr> 
                            <td></td>
                            <td>
                              <div class="common-flex items-center"><img class="max-w-full h-auto" src="../assets/images/user/14.png" alt="user"><a class="font-medium" href="course-details.html">Chloe Wilson</a></div>
                            </td>
                            <td>Writer</td>
                            <td>May 04, 2025</td>
                            <td>Alexis Taylor</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-span-5 xxl:col-span-12 col-ed-12 box-col-12"> 
                <div class="card course-card"> 
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h5 class="m-0">My Course</h5>
                      <div class="card-header-right-icon"><a class="link-only" href="course-list-view.html" target="_blank">View All<i data-feather="arrow-right"></i></a></div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="course-main-card">
                      <div class="course-wrapper"> 
                        <div class="course-icon-box">
                          <div class="icon-wrap"><img src="https://admin.pixelstrap.net/cuba_tailwind/assets/images/dashboard-3/course/1.svg" alt="clock vector"></div><img class="arrow-bg" src="../assets/images/dashboard-3/course/back-arrow/1.png" alt="sqaure border arrow">
                        </div>
                        <h6 class="f-14">Management</h6>
                      </div>
                      <div class="course-wrapper">
                        <div class="course-icon-box">
                          <div class="icon-wrap"><img src="https://admin.pixelstrap.net/cuba_tailwind/assets/images/dashboard-3/course/2.svg" alt="web development vector"></div><img class="arrow-bg" src="../assets/images/dashboard-3/course/back-arrow/2.png" alt="sqaure border arrow">
                        </div>
                        <h6 class="f-14">Web Devlopment</h6>
                      </div>
                      <div class="course-wrapper">
                        <div class="course-icon-box">
                          <div class="icon-wrap"><img src="https://admin.pixelstrap.net/cuba_tailwind/assets/images/dashboard-3/course/3.svg" alt="business vector"></div><img class="arrow-bg" src="../assets/images/dashboard-3/course/back-arrow/1.png" alt="sqaure border arrow">
                        </div>
                        <h6 class="f-14">Business Analytics</h6>
                      </div>
                      <div class="course-wrapper">
                        <div class="course-icon-box">
                          <div class="icon-wrap"><img src="https://admin.pixelstrap.net/cuba_tailwind/assets/images/dashboard-3/course/4.svg" alt="marketing vector"></div><img class="arrow-bg" src="../assets/images/dashboard-3/course/back-arrow/3.png" alt="sqaure border arrow">
                        </div>
                        <h6 class="f-14">Marketing</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div Class="col-span-4 xxl:col-span-7 md:col-span-12 col-ed-6 box-col-7">
                <div class="card schedule-card">
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h5 class="m-0">Upcoming Schedule</h5>
                      <div class="card-header-right-icon"><a class="btn btn-light-primary" href="course-list-view.html">+ Create</a></div>
                    </div>
                  </div>
                  <div class="card-body pt-0"> 
                    <ul class="schedule-list"> 
                      <li class="primary"><img src="../assets/images/dashboard/user/4.jpg" alt="profile">
                        <div> 
                          <h6 class="mb-1">Web Design</h6>
                          <ul>
                            <li class="f-light">
                              <svg class="fill-icon f-light">
                                <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#bag"></use>
                              </svg><span>March 3, 2025</span>
                            </li>
                            <li class="f-light">
                              <svg class="fill-icon f-success">
                                <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#clock"></use>
                              </svg><span> 09.00 - 12.00 AM</span>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="warning"><img src="../assets/images/dashboard/user/2.jpg" alt="profile">
                        <div> 
                          <h6 class="mb-1">UI/UX Design</h6>
                          <ul>
                            <li class="f-light">
                              <svg class="fill-icon f-light">
                                <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#bag"></use>
                              </svg><span>April 10, 2025</span>
                            </li>
                            <li class="f-light">
                              <svg class="fill-icon f-success">
                                <use href="https://admin.pixelstrap.net/cuba_tailwind/assets/svg/icon-sprite.svg#clock"></use>
                              </svg><span> 11.00 - 1.00 PM</span>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-span-3 xxl:col-span-5 md:col-span-12 col-ed-6 box-col-5">
                <div class="card">
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h5 class="m-0">Active Courses</h5>
                      <div class="card-header-right-icon"><a class="link-only" href="course-list-view.html" target="_blank">View All<i data-feather="arrow-right"></i></a></div>
                    </div>
                  </div>
                  <div class="card-body pt-0"> 
                    <ul class="lessons-lists"> 
                      <li> <img src="../assets/images/dashboard-3/lessons/1.png" alt="ux icon">
                        <div> 
                          <h6 class="f-14 font-normal mb-0">UI/UX </h6><span class="f-light">Web design</span>
                        </div>
                        <div class="lesson-wrap ms-auto"> 
                          <div id="lessonChart1"> </div>
                        </div>
                      </li>
                      <li> <img src="../assets/images/dashboard-3/lessons/2.png" alt="vue icon">
                        <div> 
                          <h6 class="f-14 font-normal mb-0">Vue 3</h6><span class="f-light">JS Framework</span>
                        </div>
                        <div class="lesson-wrap ms-auto"> 
                          <div id="lessonChart2"></div>
                        </div>
                      </li>
                      <li> <img src="../assets/images/dashboard-3/lessons/3.png" alt="bootstrap icon">
                        <div> 
                          <h6 class="f-14 font-normal mb-0">Bootstrap 5</h6><span class="f-light">Framework</span>
                        </div>
                        <div class="lesson-wrap ms-auto"> 
                          <div id="lessonChart3"></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container mx-auto w-full">
            <div class="gird grid-cols-12">
              <div class="col-span-12 footer-copyright text-center">
                <p class="mb-0">Copyright <span class="year-update"> </span> © Cuba Theme By Pixelstrap  </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
@endsection