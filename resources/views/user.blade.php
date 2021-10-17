<ul>
    {{-- @foreach ($user_komen as $item)
    <li>
        {{ $item->komentar }}
    </li>
    @endforeach --}}

   <table border="1" cellpadding="10" cellspacing="0">
       <thead>
           <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Status</th>
            </tr>
       </thead>
       <tbody>
           @foreach ($item as $item)
           <tr>
               <td>{{ $item->name }}</td>
               <td>{{ $item->email }}</td>
               <td>{{ $item->status }}</td>
            </tr>
            @endforeach
       </tbody>
   </table>
</ul>