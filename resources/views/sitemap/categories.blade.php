<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($categories as $category)
        <url>
            <loc>https://www.datacrm.com/blog/category/{{ $category->slug }}/</loc>
            <lastmod>{{str_replace(' ', 'T', $category->updated_at)}}+00:00</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.6</priority>
        </url>
    @endforeach
</urlset>