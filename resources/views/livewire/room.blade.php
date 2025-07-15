
<div>
    <div class="content-header">

        <div class="flex justify-between">
            <div>ห้องพัก</div>
            <div>ทั้งหมด <strong>{{ $rooms->count()}}</strong>ห้อง</div>
        </div>
    </div>
    <div class="content-body">
        <button class="btn-info" wire:click="openModal">
            <i class="fa-solid fa-plus mr-2"></i>
             เพิ่มห้องพัก
        </button>

        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th class="text-left">ห้องพัก</th> 
                    <th class="text-left" width="150px">ค่าเช่าต่อวัน</th>
                    <th class="text-left" width="150px">ค่าเช่าต่อเดือน</th>
                    <th width="130px"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($rooms as $room)
                <tr> 
                    <td class="-trxt-left">{{ $room->name }}</td>
                    <td class="text-left">{{ number_format($room->price_per_day, 2) }}</td>
                    <td class="text-left">{{ number_format($room->price_per_month, 2) }}</td>
                    <td class="text-center">

                        <button class="btn-edit mr-2" wire:click="openModalEdit({{ $room->id }})" >
                            <i class="fa fa-pencil mr-2"></i>
                        </button>                     
                        <button class="btn-deleted" wire:click="openModalDelete({{ $room->id,$room->name }})">
                            <i class="fa fa-times mr-2"></i>
                        </button>
                    </td> 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Todo ทำการเพิ่มการแจ้งเตือนเมื่อมี Error เกิดขึ้น --}}

        <x-modal wire:model="showModal" title="ห้องพัก" maxwidth="xl">
            @if ($errors->any())
                    <div class="alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
            @endif

        <div>
            <h1 class="text-xl text-red-500">สร้างห้องพักแบบจำนวนมากในครั้งเดียว</h1>
        </div>
            <div class="flex gap-5 mt-3">
                <div class="w-1/2">
                    <label>เริ่มหมายเลข</label>
                    <input type="number" class="form-control" wire:model="fromNumber" placeholder="เช่น 1, 2, 3, ...">
                </div>
                <div class="w-1/2">
                    <label>ถึงหมายเลข</label>
                    <input type="number" class="form-control" wire:model="fromNumber" placeholder="เช่น 1, 2, 3, ...">
                </div>
                <div class="w-1/2">
                    <label>ค่าเช่าต่อวัน</label>
                    <input type="number" class="form-control" wire:model="fromNumber" placeholder="จำนวนเงิน/บาท">
                </div>
                <div class="w-1/2">
                    <label>ค่าเช่าต่อเดือน</label>
                    <input type="number" class="form-control" wire:model="fromNumber" placeholder="จำนวนเงิน/บาท">
                </div>                        
            </div>

        <div class="mt-5 text-center pb-3">
            <button class="btn-success" wire:click="createRooms">
                <i class="fa-solid fa-check mr-2"></i>
                สร้างห้องพัก
            </button>
            <button class="btn-danger" wire:click="showModal = false">
                <i class="fa-solid fa-times mr-2"></i>
                ยกเลิก
            </button>
        </div>
        </x-modal>
    <x-modal-confirm wire:model="showmodeldelete" title="ลบห้องพัก"
    text="คูณต้องการลบห้องพัก {{ $nameForDelete}} หรือไม่" clickConfirm="deleteRoom"
    clickCancel="showModelDelete = false" />
</div> 
    