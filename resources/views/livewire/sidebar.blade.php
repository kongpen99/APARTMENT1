<div class="sidebar">
    <div class="sidebar-header">
      <div class="text-center">Apartment 1.0</div>
    </div>


    <div class="sidebar-body">
        <div class="menu">
            <ul class="list-none p-0 m-0">
                <li wire:click ="changeMenu ('dashboard') " @if ($currentMenu == 'dashboard') class="active" @endif  class=" hover:bg-orange-300 hover:text-white transition-colors duration-200">
                    <a href="/dashboard" wire:navigate>
                        <i class="fa-solid fa-chart-line me-2 "></i> Dashboard
                </li>
            </a>
                <li class=" hover:bg-orange-300 hover:text-white transition-colors duration-200">
                    <i class="fa-solid fa-building me-2"></i>บันทึกค่าใช้จ่าย</li>
                <li class=" hover:bg-orange-300 hover:text-white transition-colors duration-200">
                    <i class="fa-solid fa-home me-2"></i>ห้องพัก</li>
                <li class=" hover:bg-orange-300 hover:text-white transition-colors duration-200">
                    <i class="fa-solid fa-user me-2 "></i>ผู้เข้าพัก</li>
                <li class=" hover:bg-orange-300 hover:text-white transition-colors duration-200">
                    <i class="fa-solid fa-gear me-2"></i>ผู้ใช้งาน</li>

                <li class=" hover:bg-orange-300 hover:text-white transition-colors duration-200">
                    <a href="/company/index" wire:navigate>
                        <i class="fa-solid fa-building me-2"></i>ข้อมูลสถานประกอบการ
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div> 