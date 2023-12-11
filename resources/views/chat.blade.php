@extends('master')

@section('title', 'Chat')

@section('konten')

    <h3>Chat</h3>
    <br>

    <div>
        @foreach ($chat as $message)
            <div>
                {{-- Penggantian emotikon langsung di dalam loop --}}
                @php
                    $emoticonMap = [
                        ':))' => '1.png',
                        ':3'  => '2.png',
                        ':P'  => '3.png',
                        ':C'  => '4.png',
                        ';)'  => '5.png',
                    ];

                    // memecah pesan menjadi array kata-kata
                    $words = explode(' ', $message->pesan);

                    // menggantikan kata-kata tertentu dengan gambar
                    $words = array_map(function($word) use ($emoticonMap) {
                        return isset($emoticonMap[$word]) ? '<img src="' . asset('images/emoticons/' . $emoticonMap[$word]) . '" alt="' . $word . '" style="max-width: 20px; max-height: 20px;" />' : $word;
                    }, $words);

                    // menggabungkan array kata-kata menjadi string kembali
                    $message->pesan = implode(' ', $words);
                @endphp

                {!! $message->pesan !!}
            </div>
        @endforeach
    </div>
    <br>
    <br>
    <br>
@endsection
