<?php $title = isset($item) ? $item->name: "add new category" ?>
{!! Form::myInput('text', 'name', 'Name', ['required']) !!}
{!! Form::mySelect('parent_id', 'Parent category', [0 => 'root'] + App\Category::pluck('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}
