<?php

use Illuminate\Http\File;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

function formatDate($date)
{
    return Carbon::parse($date)->toDateString();
}

function upload($file, $path)
{
    $fileName = Str::random(5) . date('YmdHis') . str_replace(' ', '-', $file->getClientOriginalName());
    
    $file->move($path, $fileName);

    return $fileName;
}
