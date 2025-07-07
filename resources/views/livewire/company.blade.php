{{--TODO ฟอร์มรับข้อูล--}}

<div>
    <div class="content-header">ข้อมูลสถานประกอบการ</div>
        <form wire:submit ="save">
             <div class="flex gap-3">
                <div class="w-1/3">
                    <div>
                        <label for="name">ชื่อสถานประกอบการ</label>
                        <input type="text" class="form-control" wire:model="name">
                    </div>
                </div>
                <div class="w-1/3">
                    <div>
                        <label for="address">ที่อยู่</label>
                        <input type="text" class="form-control" wire:model="address">
                    </div>
                </div>
                <div class="w-1/3">
                    <div>
                        <label for="address">เบอร์โทร</label>
                        <input type="text" class="form-control" wire:model="phone">
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <label for="tax_code">เลขประจำตัวผู้เสียภาษี</label>
                <input type="text" class="form-control" wire:model="tax_code">

            </div>
                <div class="mt-3">
                    @if ($logoUrl)
                        <img src="{{ $logoUrl }}" alt="Logo" class="w-16 h-16 mb-3 rounded-md shadow-lg">
                    @endif
                    <label for="logo">โลโก้สถานประกอบการ</label>
                    <input type="file" class="form-control bg-white" wire:model="logo">
                </div> 

                {{-- todo สำหรับในการใช้ หมายเหตุ --}}
            
                <div class="mt-3">
                    <label for="note">หมายเหตุ</label>
                    <input type="text" class="form-control" wire:model="note">
                    {{-- <textarea class="form-control" wire:model="note"></textarea> --}}
                 </div>


                        {{-- <button tpye="submit" class="btn btn-primary  mt-3">
                            <i class="fa-solid fa-save mr-2"></i> บันทึกข้อมูล
                        </button>  --}}
                        
                     
                            <button class="btn btn-success mt-3" type="submit">
                            <i class="fa-solid fa-save mr-2"></i>บันทึกข้อมูล</button>
                      

                    @if ($flashMessage)
                        <div class="mt-3 alert alert-success">
                            <i class="fa fa-check mr-2"></i>
                            {{ $flashMessage }}
                        </div>
                    @endif



         </form>

         
</div>