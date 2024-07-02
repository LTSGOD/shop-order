<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='50'>id</th>
        <th width='100'>유저 id</th>
        <th width='200'>이메일</th>
        <th width='200'>통화</th>
        <th width='200'>잔액</th>
        <th width='200'>입금</th>
        <th width='200'>출금</th>
        <th width='200'>설명</th>
        <th width='200'>작업자</th>
        <th width='200'>작업자 id</th>
        <th width='200'>수정일자</th>
    </x-wire-thead>
    <tbody>
        @if(!empty($rows))
            @foreach ($rows as $item)
            {{-- 테이블 리스트 --}}
            <x-wire-tbody-item :selected="$selected" :item="$item">
                <td width='50'>
                    {{$item->id}}
                </td>
                <td width='100'>{{$item->user_id}}</td>
                <td width='200'>{{$item->email}}</td>
                <td width='200'>{{$item->currency}}</td>
                <td width='200'>{{$item->balance}}</td>
                <td width='200'>{{$item->input}}</td>
                <td width='200'>{{$item->output}}</td>
                <td width='200'>{{$item->description}}</td>
                <td width='200'>{{$item->worker}}</td>
                <td width='200'>{{$item->worker_id}}</td>
                <td width='200'>{{$item->updated_at}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>

