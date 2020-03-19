<div class="alert alert-success">
<h3>{{ $title }}</h3>
    <h3> {{ $info }} </h3>
    <h1>Hello Bimble Components</h1>
</div>

<div class="alert alert-primary" role="alert">
   <ul>
    @foreach ($list as $item)     
        <li>
            {{ $item }}
        </li>
    @endforeach
   </ul>

   Data : 
   <ul>
    
     @forelse ($data as $item)
   <li>{{ $item->judul }}</li>
     @empty
        Data Kosong 
     @endforelse
   </ul>

   {{ $commit }}
   {{-- Render Component Slot --}}
   {{ $slot }}
</div>