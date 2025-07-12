 @props(['title','text','clickconfirm', 'clickCancel']) 

    <x-modal wire:model='ShowModelDelete'title="{{$title}}"maxwidth ="xl">
        <div class="p-5 text-center text-xl">
            <div class="text-8xl text-orange-500 mb-5">
                <i class="fa fa-question"></i>
            </div>

            <div class="text-4xl font-bold">{{$title}}</div>
            <div class="text-2xl mt-3">{{$text}}</div>
        </div>
        
        <div class="mt-5 text-center pb-5">
            <button class="btn-success mr-3" wire:click='{{$clickconfirm}}'>
                <i class="fa fa-check"></i> 
                ยืนยัน
            </button>

            <button class="btn-secondary" wire:click='{{$clickCencel}}'>
                <i class="fa fa-items"></i> 
                ยกเลิก
            </button> 
        </div>
    </x-modal>