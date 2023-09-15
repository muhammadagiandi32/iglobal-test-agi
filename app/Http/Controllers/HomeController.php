<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\DataTables\UsersDataTable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(UsersDataTable $dataTable)
    {
        // if ($request->ajax()) {
        //     $data =  User::with('roles');
        //     return DataTables::eloquent($data)
        // ->addIndexColumn()
        // ->addColumn('ItemGroups', function (Item $items) {
        //     return $items->ItemGroups->ItemGroupDescriptions;
        // })
        // ->addColumn('Uoms', function (Item $items) {
        //     return $items->Uoms->UomName;
        // })
        // ->addColumn('TypeItems', function (Item $items) {
        //     return $items->TypeItems->TypeName;
        // })
        // ->addColumn('Users', function (Item $items) {
        //     return $items->Users->name;
        // })
        // ->addColumn('action', function ($row) {

        // $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->ItemId . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editData">Edit</a>';

        // $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->ItemId . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteData">Delete</a>';

        // return $btn;
        // })
        // ->toJson();
        // }
        // $data = [
        //     'ItemGroup' => ItemGroup::get(),
        //     'Uom' => Uom::get(),
        //     'TypeItem' => TypeItem::get()
        // ];
        // dd($data);
        // return view('pages.Item.index')->with($data);
        // return view('home');
        return $dataTable->render('home');
    }
}
