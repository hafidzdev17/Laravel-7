<ul>
    @foreach ($user_komen as $item)
    <li>
        {{ $item->komentar }}
    </li>
    @endforeach
</ul>