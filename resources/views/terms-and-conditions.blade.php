<x-layout>

    <div>
        {{ App\Models\WebsiteInfo::where('key', 'TERMS')->first()->value }}
    </div>

</x-layout>
