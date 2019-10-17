@extends('ui::layouts.blank')
@section('content')
    
    {!!  Suitable::source($data)
        ->title(__('Data Kontak Form'))
        ->search(true)
    ->columns([
        ['header' => __('ID'), 'field' => 'id', 'sortable', 'searchable'=> 'id'],
        ['header' => __('Nama'), 'field' => 'name', 'sortable', 'searchable'=> 'name'],
        ['header' => __('No Telepon'), 'field' => 'telepon', 'sortable', 'searchable' => 'telepon'],
        ['header' => __('Email'), 'field' => 'email', 'sortable', 'searchable' => 'email'],
        ['header' => 'Excerpt',
            'raw' => function($data){
                $detail = substr($data->message,0,20)."..";
                return $detail;
            }, 'sortable', 'searchable' => 'message'
        ],
        ['header' => __('Kategori'), 'field' => 'kategori', 'sortable', 'searchable' => 'kategori'],
    ])
    ->render()
    !!}
@stop