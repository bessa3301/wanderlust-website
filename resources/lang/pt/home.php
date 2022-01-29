<?php

use App\Models\WebsiteInfo;

return [
    'title1' => WebsiteInfo::where('key', 'title1')->first()->value
];
