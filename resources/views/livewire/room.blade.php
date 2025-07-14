
<div>
    <div class="content-header">

        <div class="flex justify-between">
            <div>ห้องพัก</div>
            <div>ทั้งหมด <strong>{{ $rooms->count()}}</strong>ห้อง</div>
        </div>
    </div>

    <div class="content-body">
        <button class="btn-info" wire:click="openmodal">
            <i class="fa fa-plus mr-2"></i>
             เพิ่มห้องพัก
        </button>

        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th class="text-left">ห้องพัก</th>
                    <th class="text-left">ค่าเช่าต่อวัน</th>
                    <th class="text-left">ค่าเช่าต่อเดือน</th>
                    <th width="130px"></th>

                </tr>
            </thead>


        </table>

    </div>


</div>
