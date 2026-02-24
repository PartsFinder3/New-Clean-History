<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title>Car History Clean - Latest Vehicles & News</title>
        <link>{{ url('/') }}</link>
        <description>Professional car history removal and VIN check services.</description>
        <language>en-us</language>
        <pubDate>{{ now()->toRssString() }}</pubDate>
        <atom:link href="{{ route('rss') }}" rel="self" type="application/rss+xml" />

        @foreach($blogs as $blog)
        <item>
            <title>{{ $blog->title }}</title>
            <link>{{ route('blogs.show', $blog->slug) }}</link>
            <description>{{ Str::limit(strip_tags($blog->content), 200) }}</description>
            <pubDate>{{ $blog->created_at->toRssString() }}</pubDate>
            <guid>{{ route('blogs.show', $blog->slug) }}</guid>
        </item>
        @endforeach

        @foreach($cars as $car)
        <item>
            <title>{{ $car->car_name }} - VIN: {{ $car->vin }}</title>
            <link>{{ route('cars.show', $car->slug) }}</link>
            <description>Vehicle: {{ $car->car_name }} | VIN: {{ $car->vin }} | Mileage: {{ $car->mileage ?? 'N/A' }} | Location: {{ $car->location ?? 'N/A' }}</description>
            <pubDate>{{ $car->created_at->toRssString() }}</pubDate>
            <guid>{{ route('cars.show', $car->slug) }}</guid>
        </item>
        @endforeach
    </channel>
</rss>
