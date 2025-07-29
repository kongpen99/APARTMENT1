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
                    <th class="text-right" width="150px">ค่าเช่าต่อวัน</th>
                    <th class="text-right" width="150px">ค่าเช่าต่อเดือน</th>
                    <th width="130px"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($rooms as $room)
                <tr> 

<<<<<<< HEAD
                        <button class="btn-edit" wire:click="openModalEdit({{ $room->id }})" >
                            <i class="fa fa-pencil mr-2"></i>
=======
                    <td>{{ $room->name }}</td>
                    <td class="text-right">{{ number_format($room->price_per_day) }}</td>
                    <td class="text-right">{{ number_format($room->price_per_month) }}</td>
                    <td class="text-right">

                        <button class="btn-edit" wire:click="openModalEdit({{ $room->id }})" >
                            <i class="fa-solid fa-pencil mr-2"></i>
>>>>>>> f20bd98c1c540be11956e1544e82d8c06185d7d5
                        </button>                     
                        <button class="btn-delete" wire:click="openModalDelete({{ $room->id}})">
                            <i class="fa-solid fa-times mr-2"></i>
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
<<<<<<< HEAD

    {{-- TODO ทำการเพิ่มหอพัก และบันทึกข้อมูล OK--}}
=======
>>>>>>> f20bd98c1c540be11956e1544e82d8c06185d7d5
        <div>
            <h1 class="text-xl text-red-500">สร้างห้องพักแบบจำนวนมากในครั้งเดียว</h1>
        </div>
            <div class="flex gap-5 mt-3">
                <div class="w-1/2">
                    <label>เริ่มหมายเลข</label>
                    <input type="text" class="form-control" wire:model="from_number" placeholder="เช่น 1, 2, 3, ...">
                </div>
                <div class="w-1/2">
                    <label>ถึงหมายเลข</label>
                    <input type="text" class="form-control" wire:model="to_number" placeholder="เช่น 1, 2, 3, ...">
                </div>
                <div class="w-1/2">
                    <label>ค่าเช่าต่อวัน</label>
                    <input type="text" class="form-control" wire:model="price_per_day" placeholder="จำนวนเงิน/บาท">
                </div>
                <div class="w-1/2">
                    <label>ค่าเช่าต่อเดือน</label>
                    <input type="text" class="form-control" wire:model="price_per_month" placeholder="จำนวนเงิน/บาท">
                </div>                        
            </div>
<<<<<<< HEAD
 
        <div class="mt-5 text-center pb-3">
            <button class="btn-success" wire:click="createRoom">
=======

        <div class="mt-5 text-center pb-5">
            <button class="btn-success mr-2" wire:click="createRooms">
>>>>>>> f20bd98c1c540be11956e1544e82d8c06185d7d5
                <i class="fa-solid fa-check mr-2"></i>
                บันทึกสร้างห้องพัก
            </button>
            <button class="btn-danger" wire:click="showModal = false"> 
                <i class="fa-solid fa-times mr-2"></i>
                ยกเลิก
            </button>
        </div>   
        </x-modal>    

        <x-modal wire:model="showModeEdit" title="แก้ไขห้องพัก" maxwidth="xl">
            <div>ห้องพัก</div>
            <input type="text" class="form-control" wire:model="name" placeholder="ชื่อห้องพัก">

            <div class="mt-3">ราคาเช่าต่อวัน</div>
            <input type="text" class="form-control" type="number" wire:model="price_day" placeholder="จำนวนเงิน/บาท">
            <div class="mt-3">ราคาเช่าต่อเดือน</div>
            <input type="text" class="form-control" type="number" wire:model="price_month" placeholder="จำนวนเงิน/บาท">

            <div class="mt-5 text-center pb-5">
                <button class="btn-success mr-2" wire:click="updateRoom">
                    <i class="fa-solid fa-check mr-2"></i>
                    บันทึก
                </button>
                <button class="btn-danger" wire:click="showModeEdit = false"> 
                    <i class="fa-solid fa-times mr-2"></i>
                    ยกเลิก
                </button>
            </div>
        </x-modal>

        <x-modal-confirm 
            wire:model="showModalDelete"
            title="ลบห้องพัก"
            text="คุณต้องการลบห้อง {{$name}}พักใช่หรือไม่?">
            clickConfirm="deleteRoom"
            clickCancel="showModalDelete = false"
        </x-modal>

       
</div> 
      