<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search"></form>
    <ul class="nav menu">
        <li><a href="/admin" class="menu-dashboard">
                <svg class="glyph stroked dashboard-dial">
                    <use xlink:href="#stroked-dashboard-dial"></use>
                </svg>
                Tổng quan
            </a>
        </li>
        <li>
            <a href="/admin/rooms" class="menu-rooms">
                <svg class="glyph stroked clipboard with paper">
                    <use xlink:href="#stroked-clipboard-with-paper" />
                </svg>
                Quản lý phòng
            </a>
        </li>
        <li>
            <a href="/admin/hotels" class="menu-hotels">
                <svg class="glyph stroked home">
                    <use xlink:href="#stroked-home"/>
                </svg>
                Quản lý khách sạn
            </a>
        </li>
        {{-- <li>
            <a href="/admin/orders" class="menu-orders">
                <svg class="glyph stroked notepad ">
                    <use xlink:href="#stroked-notepad"></use>
                </svg>
                Đơn hàng
            </a>
        </li> --}}
        <li role="presentation" class="divider"></li>
        <li>
            <a href="/admin/users" class="menu-users">
                <svg class="glyph stroked male-user">
                    <use xlink:href="#stroked-male-user"></use>
                </svg>
                Quản lý thành viên
            </a>
        </li>
    </ul>
</div>

<input type="hidden" value="{{$activePage ?? ''}}" id="page-id" />
