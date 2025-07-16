<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\RoomModel;


class Room extends component{

    public $rooms =[];
    public $showModal = false;
    public $showModalEdit = false;
    public $showModalDelete = false;
    public $id; 
    public $name;
    public $price_day;
    public $price_month;
    public $from_number;
    public $to_number; 
    public $price_per_day;
    public $price_per_month;
    public $nameForDelete;

    public function mount()
    {
        $this->fetchData();
     }

    public function openModal()
    {
        $this->showModal = true;
    }

    public function openModalEdit($id)
    {
        $this->showModalEdit = true;
        $this->id = $id;

        $room = RoomModel::find($id); 
        $this->name = $room->name;
        $this->price_day = $room->price_per_day;
        $this->price_month = $room->price_per_month;   
    }


    public function openModalDelete($id,$name)
    {
        $this->showModalDelete = true;
        $this->id = $id;
        $this->nameForDelete = $name;
    }

    public function closeModal()
    {
        $this->showModal =$id;
    }
    public function updateRoom (){
        $room = RoomModel::find($this->id);
        $room->name = $this->name;
        $room->price_per_day = $this->price_day;
        $room->price_per_month = $this->price_month;
        $room->save();
    }
    // Todo ให้ทำการค้นหาห้องพักจาก ID ที่รับมา
    public function deleteRoom (){
        $room = RoomModel::find($this->id);
        $room->status ='deleted';
        $room->save();
        $this->showModalDelete = false; 
        $this->fetchData();
    }
    public function fetchData (){
        $this->rooms = RoomModel::where('status','use')
        ->orderBy('id', 'desc')
        ->get();

    }
    public function createRoom(){
        $this->validate([
          'from_number' => 'required',
            'to_number' => 'required', 
            'price_per_day' => 'required',
            'price_per_month' => 'required',
        ]);

        if ($this->from_number >$this->to_number) {
            $this->addError('from_number', 'ห้องต้องมีค่าน้อยกว่าห้องสุดท้าย');
            return;
        }
        if ($this->from_number >1000) {
            $this->addError('from_number', 'ห้องสุดท้ายต้องไม่เกิน 1000');
            return;
        }
        for($i = $this->from_number; $i <= $this->to_number; $i++) {
            $room = new RoomModel();
            $room->name = 'ห้องที่ '.$i;
            $room->price_per_day = $this->price_per_day;
            $room->price_per_month = $this->price_per_month; 
            $room->status = 'use';
            $room->save();
        }
        $this->showModal = false;
        $this->fetchData();


        // todo ให้ทำการสร้างห้องพักใหม่จากข้อมูลที่รับมา
        // $this->validate([
        //     'name' => 'required|string|max:255',
        //     'price_day' => 'required|numeric|min:0',
        //     'price_month' => 'required|numeric|min:0',
        // ]);

        // RoomModel::create([
        //     'name' => $this->name,
        //     'price_per_day' => $this->price_day,
        //     'price_per_month' => $this->price_month,
        //     'status' => 'use',
        // ]);

        // $this->showModal = false;
        // $this->fetchData();

    }

    public function render(){
        return view('livewire.room');
  }
}

